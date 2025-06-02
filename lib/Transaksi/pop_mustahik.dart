import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

// Future<List<dynamic>> fetchData() async {
//   final response = await http
//       .get(Uri.parse('http://192.168.3.233/api/zakat/mustahik'));

//   if (response.statusCode == 200) {
//     final Map<String, dynamic> jsonResponse = json.decode(response.body);
//     return jsonResponse['data'];
//   } else {
//     throw Exception('Failed to load data');
//   }
// }
Future<List<dynamic>> fetchData({String kategori}) async {
  // Modifikasi URL API untuk menerima query parameter jika kategori ada
  final url = kategori != null
      ? ApiConstants.baseUrl + 'api/zakat/mustahik?ket_mustahik=$kategori'
      : ApiConstants.baseUrl + 'api/zakat/mustahik';

  final response = await http.get(Uri.parse(url));

  if (response.statusCode == 200) {
    final Map<String, dynamic> jsonResponse = json.decode(response.body);
    return jsonResponse['data'];
  } else {
    throw Exception('Failed to load data');
  }
}

Future<Map<String, dynamic>> showDataDialog(BuildContext context) async {
  String _selectedState;
  return await showDialog<Map<String, dynamic>>(
    context: context,
    builder: (BuildContext context) {
      return FutureBuilder<List<dynamic>>(
        future: fetchData(),
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
                  title: Text("Data Mustahik"),
                  content: SingleChildScrollView(
                    child: Column(
                      mainAxisSize: MainAxisSize.min,
                      children: [
                        DropdownButtonFormField<String>(
                          value: _selectedState,
                          decoration: InputDecoration(
                            labelText: 'Golongan Asnaf',
                            labelStyle:
                                TextStyle(color: DesignCourseAppTheme.green),
                            focusedBorder: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(10),
                              borderSide:
                                  BorderSide(color: DesignCourseAppTheme.green),
                            ),
                          ),
                          items: _buildDropDownItems([
                            'Fakir',
                            'Miskin',
                            'Amil',
                            'Mualaf',
                            'Budak',
                            'Orang yang Berhutang',
                            'Orang yang Berjihad',
                            'Anak Jalanan'
                          ]),
                          onChanged: (value) {
                            setState(() {
                              _selectedState = value; // Update _selectedState
                            });

                            // Panggil fetchDataAmil dengan parameter kategori baru
                            fetchData(kategori: _selectedState).then((newData) {
                              setState(() {
                                filteredData =
                                    newData; // Update data berdasarkan pilihan
                              });
                            });
                          },
                        ),
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
                                  .where((item) => item['nama_mustahik']
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
                                title: Text(
                                    "Nama Mustahik : " + item['nama_mustahik']),
                                subtitle: Text(
                                    "Alamat Mustahik : " + item['alamat_mus']),
                                onTap: () {
                                  Navigator.of(context).pop({
                                    'nama_mustahik': item['nama_mustahik'],
                                    'alamat_mus': item['alamat_mus'],
                                    'kode_mustahik': item['kode_mustahik']
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

List<DropdownMenuItem<String>> _buildDropDownItems(List<String> items) {
  return items
      .map((item) => DropdownMenuItem(
            value: item,
            child: Text(item),
          ))
      .toList();
}
