import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

Future<List<dynamic>> fetchDataAmil() async {
  final response =
      await http.get(Uri.parse(ApiConstants.baseUrl + 'api/zakat/amil'));

  if (response.statusCode == 200) {
    final Map<String, dynamic> jsonResponse = json.decode(response.body);
    return jsonResponse['data'];
  } else {
    throw Exception('Failed to load data');
  }
}

Future<Map<String, dynamic>> showDataDialogAmil(BuildContext context) async {
  return await showDialog<Map<String, dynamic>>(
    context: context,
    builder: (BuildContext context) {
      return FutureBuilder<List<dynamic>>(
        future: fetchDataAmil(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return AlertDialog(
              title: Text("Loading"),
              content: Center(
                child: CircularProgressIndicator(),
              ),
            );
          } else if (snapshot.hasError) {
            return AlertDialog(
              title: Text("Error"),
              content: Text("Failed to load data"),
            );
          } else if (snapshot.hasData) {
            List<dynamic> data = snapshot.data;
            List<dynamic> filteredData = List.from(data);
            String searchQuery = '';

            return StatefulBuilder(
              builder: (BuildContext context, StateSetter setState) {
                return AlertDialog(
                  title: Text("Data Amil"),
                  content: SingleChildScrollView(
                    child: Column(
                      mainAxisSize: MainAxisSize.min,
                      children: [
                        SizedBox(height: 10),
                        TextField(
                          decoration: InputDecoration(
                              labelText: 'Search',
                              labelStyle:
                                  TextStyle(color: DesignCourseAppTheme.green),
                              border: OutlineInputBorder(),
                              focusedBorder: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide: BorderSide(
                                    color: DesignCourseAppTheme.green),
                              )),
                          onChanged: (query) {
                            setState(() {
                              searchQuery = query;
                              filteredData = data
                                  .where((item) => item['nama_amil']
                                      .toLowerCase()
                                      .contains(query.toLowerCase()))
                                  .toList();
                            });
                          },
                        ),
                        SizedBox(height: 10),
                        Container(
                          width: double.maxFinite,
                          height: 400,
                          child: ListView.builder(
                            shrinkWrap: true,
                            itemCount: filteredData.length,
                            itemBuilder: (context, index) {
                              final item = filteredData[index];
                              return ListTile(
                                title: Text("Nama Amil : " + item['nama_amil']),
                                subtitle: Text(
                                    "Alamat Amil : " + item['alamat_amil']),
                                onTap: () {
                                  Navigator.of(context).pop({
                                    'nama_amil': item['nama_amil'],
                                    'alamat_amil': item['alamat_amil'],
                                    'kode_amil': item['kode_amil']
                                  }); // Mengembalikan nilai
                                },
                              );
                            },
                          ),
                        ),
                      ],
                    ),
                  ),
                  actions: [
                    TextButton(
                      onPressed: () {
                        Navigator.of(context).pop();
                      },
                      child: Text(
                        "Close",
                        style: TextStyle(color: DesignCourseAppTheme.green),
                      ),
                    ),
                  ],
                );
              },
            );
          } else {
            return AlertDialog(
              title: Text("No Data"),
              content: Text("No data available"),
            );
          }
        },
      );
    },
  );
}
