import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:zakat_mobile/Custom/rp_format.dart';
import '../Model/zakat.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

class RiwayatBagiPage extends StatefulWidget {
  @override
  _RiwayatBagiPageState createState() => _RiwayatBagiPageState();
}

class _RiwayatBagiPageState extends State<RiwayatBagiPage> {
  List<Zakat> zakatList = [];

  Future<void> fetchZakatData() async {
    final response = await http
        .get(Uri.parse(ApiConstants.baseUrl + 'api/zakat/riwayatbagi'));

    if (response.statusCode == 200) {
      // Parse the response body as a Map (JSON object)
      final Map<String, dynamic> jsonResponse = json.decode(response.body);

      // Extract the list of data from the "data" field
      List<dynamic> zakatData = jsonResponse['data'];

      setState(() {
        zakatList = zakatData.map((data) => Zakat.fromJson(data)).toList();
      });
    } else {
      throw Exception('Failed to load zakat data');
    }
  }

  @override
  void initState() {
    super.initState();
    fetchZakatData();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Text('Riwayat Pembagian Zakat'),
      ),
      body: zakatList.isEmpty
          ? Center(child: CircularProgressIndicator())
          : ListView.builder(
              itemCount: zakatList.length,
              itemBuilder: (context, index) {
                return Padding(
                  padding: const EdgeInsets.all(15.0),
                  child: GestureDetector(
                    onTap: () {
                      print("tes");
                    },
                    child: Container(
                      color: Colors.transparent,
                      padding: EdgeInsets.all(8.0),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment
                            .start, // Untuk menempatkan gambar di atas teks
                        children: [
                          Container(
                            height: 150.0, // Atur tinggi gambar
                            width: 200.0, // Atur lebar gambar
                            child: zakatList[index].imageUrl != null
                                ? Image.network(
                                    ApiConstants.baseUrl +
                                        '${zakatList[index].imageUrl}',

                                    fit: BoxFit
                                        .cover, // Memungkinkan gambar menyesuaikan ukuran
                                  )
                                : Icon(Icons.image),
                          ),
                          SizedBox(
                              width:
                                  10.0), // Memberikan jarak antara gambar dan teks
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  "Nama Mustahik : " +
                                      zakatList[index].nama_mustahik,
                                  style: TextStyle(
                                      fontSize: 16.0,
                                      fontWeight: FontWeight.bold),
                                ),
                                SizedBox(height: 5.0),
                                Text("Alamat : " + zakatList[index].alamat_mus),
                                SizedBox(height: 5.0),
                                // Text(
                                //   "Total Zakat diterima : " +
                                //       zakatList[index].total_bagi,
                                //   style: TextStyle(fontWeight: FontWeight.bold),
                                // ),
                                Text(
                                  zakatList[index].kode_bagi.startsWith('F-')
                                      ? 'Total Zakat diterima : ${zakatList[index].total_bagi} kg'
                                      : (zakatList[index]
                                              .kode_bagi
                                              .startsWith('M-')
                                          ? 'Total Zakat diterima : ${CurrencyFormat.convertToIdr(int.tryParse(zakatList[index].total_bagi), 0)} '
                                          : 'Unknown'),
                                  style: TextStyle(fontWeight: FontWeight.bold),
                                ),
                                SizedBox(height: 5.0),
                                Text("Tgl Pembagian : " +
                                    zakatList[index].tgl_bagi),
                              ],
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                );
              },
            ),
    );
  }
}
