import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:flutter/material.dart';
import 'package:zakat_mobile/Custom/rp_format.dart';
import 'package:zakat_mobile/Riwayat/detail_riwayat.dart';
import 'package:zakat_mobile/Riwayat/select_riwayat.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

class RiwayatAktivitasPage extends StatefulWidget {
  @override
  State<RiwayatAktivitasPage> createState() => _RiwayatAktivitasPageState();
}

class _RiwayatAktivitasPageState extends State<RiwayatAktivitasPage> {
  Future<List> getData() async {
    final response = await http
        .get(Uri.parse(ApiConstants.baseUrl + "api/zakat/riwayatzakat"));
    return json.decode(response.body)['data'];
  }

  String linkType;
  String kategoriZakat;

  String filter;
  TextEditingController searchController = TextEditingController();

  @override
  void initState() {
    // getData();
    searchController.addListener(() {
      setState(() {
        filter = searchController.text;
      });
    });
    // _fetchMenuItems();
    super.initState();
  }

  @override
  void dispose() {
    searchController.dispose();
    super.dispose();
  }

  String _selectedState;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Container(
          decoration: BoxDecoration(
              color: Colors.white, borderRadius: BorderRadius.circular(30)),
          child: TextField(
            onChanged: (value) {},
            controller: searchController,
            decoration: InputDecoration(
                border: InputBorder.none,
                errorBorder: InputBorder.none,
                enabledBorder: InputBorder.none,
                focusedBorder: InputBorder.none,
                contentPadding: EdgeInsets.all(15),
                hintText: "Cari Riwayat by Nama Muzakki"),
          ),
        ),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            DropdownButtonFormField<String>(
              decoration: InputDecoration(
                labelText: 'Kategori Zakat',
                labelStyle: TextStyle(color: DesignCourseAppTheme.green),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                ),
              ),
              items: _buildDropDownItems([
                'Zakat Fitrah (Beras)',
                'Zakat Fitrah (Tunai)',
                'Zakat Maal',
                'Shadaqah',
                'Fidyah'
              ]),
              onChanged: (value) {
                setState(() {
                  _selectedState = value;
                  print(_selectedState);
                  setState(() {
                    switch (_selectedState) {
                      case "Zakat Fitrah (Beras)":
                        kategoriZakat = "CAT-01";
                        break;
                      case "Zakat Fitrah (Tunai)":
                        kategoriZakat = "CAT-02";
                        break;
                      case "Zakat Maal":
                        kategoriZakat = "CAT-03";
                        break;
                      case "Shadaqah":
                        kategoriZakat = "CAT-04";
                        break;
                      case "Fidyah":
                        kategoriZakat = "CAT-05";
                        break;
                      default:
                    }
                  });
                  print(kategoriZakat);
                  Navigator.of(context).push(MaterialPageRoute(
                      builder: (context) =>
                          SelectRiwayatPage(kategoriZakat: kategoriZakat)));
                });
              },
            ),
            SizedBox(height: 50),
            Text(
              "Riwayat Aktivitas",
              style: TextStyle(
                fontSize: 20,
                fontWeight: FontWeight.bold,
              ),
            ),
            SizedBox(height: 16),
            Expanded(
              child: FutureBuilder<List>(
                future: getData(),
                builder: (context, snapshot) {
                  if (snapshot.hasError) print(snapshot.error);
                  return snapshot.hasData
                      ? ListView.builder(
                          physics: const BouncingScrollPhysics(
                              parent: AlwaysScrollableScrollPhysics()),
                          itemCount: snapshot.data.length,
                          itemBuilder: (context, i) {
                            return filter == null || filter == ""
                                ? Container(
                                    child: GestureDetector(
                                        onTap: () => Navigator.of(context).push(
                                            MaterialPageRoute(
                                                builder:
                                                    (BuildContext context) =>
                                                        DetailRiwayat(
                                                          list: snapshot.data,
                                                          index: i,
                                                        ))),
                                        child: Card(
                                          shape: RoundedRectangleBorder(
                                            borderRadius:
                                                BorderRadius.circular(12),
                                          ),
                                          margin: const EdgeInsets.only(
                                              bottom: 16.0),
                                          child: Padding(
                                            padding: const EdgeInsets.all(16.0),
                                            child: Row(
                                              crossAxisAlignment:
                                                  CrossAxisAlignment.center,
                                              children: [
                                                Image.asset(
                                                  'assets/zakat_riwayat.png', // Replace with your image path
                                                  width: 80,
                                                  height: 80,
                                                ),
                                                SizedBox(width: 16),
                                                Expanded(
                                                  child: Column(
                                                    crossAxisAlignment:
                                                        CrossAxisAlignment
                                                            .start,
                                                    children: [
                                                      Row(
                                                        children: [
                                                          Container(
                                                            padding: EdgeInsets
                                                                .symmetric(
                                                              horizontal: 8,
                                                              vertical: 4,
                                                            ),
                                                            decoration:
                                                                BoxDecoration(
                                                              color: Colors
                                                                  .green[100],
                                                              borderRadius:
                                                                  BorderRadius
                                                                      .circular(
                                                                          8),
                                                            ),
                                                            child: Text(
                                                              'Success',
                                                              style: TextStyle(
                                                                color: Colors
                                                                    .green,
                                                                fontWeight:
                                                                    FontWeight
                                                                        .bold,
                                                              ),
                                                            ),
                                                          ),
                                                          Spacer(),
                                                          Flexible(
                                                            child: Text(
                                                              '${snapshot.data[i]['jenis']} / ${snapshot.data[i]['keterangan']}',
                                                              style: TextStyle(
                                                                fontSize: 16,
                                                                fontWeight:
                                                                    FontWeight
                                                                        .bold,
                                                              ),
                                                            ),
                                                          ),
                                                        ],
                                                      ),
                                                      SizedBox(height: 4),
                                                      Text(
                                                        'Petugas/Amil : ${snapshot.data[i]['nama_amil']}',
                                                        style: TextStyle(
                                                          fontSize: 14,
                                                        ),
                                                      ),
                                                      SizedBox(height: 4),
                                                      Text(
                                                        '${snapshot.data[i]['tgl_zakat']}',
                                                        style: TextStyle(
                                                          color: Colors.grey,
                                                          fontSize: 14,
                                                        ),
                                                      ),
                                                      SizedBox(height: 10),
                                                      Text(
                                                        '${snapshot.data[i]['nama_muzakki']}',
                                                        style: TextStyle(
                                                          fontSize: 18,
                                                          fontWeight:
                                                              FontWeight.bold,
                                                        ),
                                                      ),
                                                      SizedBox(height: 8),
                                                      Text(
                                                        'Total Zakat',
                                                        style: TextStyle(
                                                          fontSize: 14,
                                                        ),
                                                      ),
                                                      Text(
                                                        snapshot.data[i][
                                                                    'keterangan'] ==
                                                                "Beras"
                                                            ? "${snapshot.data[i]['total_zakat']}Kg"
                                                            : "${CurrencyFormat.convertToIdr(int.tryParse(snapshot.data[i]['total_zakat']), 0)}",
                                                        style: TextStyle(
                                                          fontSize: 16,
                                                          color: Colors.green,
                                                          fontWeight:
                                                              FontWeight.bold,
                                                        ),
                                                      ),
                                                    ],
                                                  ),
                                                ),
                                              ],
                                            ),
                                          ),
                                        )))
                                : '${snapshot.data[i]['nama_muzakki']}'
                                        .toLowerCase()
                                        .contains(filter.toLowerCase())
                                    ? Container(
                                        child: GestureDetector(
                                            onTap: () => Navigator.of(context)
                                                .push(MaterialPageRoute(
                                                    builder: (BuildContext
                                                            context) =>
                                                        DetailRiwayat(
                                                          list: snapshot.data,
                                                          index: i,
                                                        ))),
                                            child: Card(
                                              shape: RoundedRectangleBorder(
                                                borderRadius:
                                                    BorderRadius.circular(12),
                                              ),
                                              margin: const EdgeInsets.only(
                                                  bottom: 16.0),
                                              child: Padding(
                                                padding:
                                                    const EdgeInsets.all(16.0),
                                                child: Row(
                                                  crossAxisAlignment:
                                                      CrossAxisAlignment.center,
                                                  children: [
                                                    Image.asset(
                                                      'assets/zakat_riwayat.png', // Replace with your image path
                                                      width: 80,
                                                      height: 80,
                                                    ),
                                                    SizedBox(width: 16),
                                                    Expanded(
                                                      child: Column(
                                                        crossAxisAlignment:
                                                            CrossAxisAlignment
                                                                .start,
                                                        children: [
                                                          Row(
                                                            children: [
                                                              Container(
                                                                padding: EdgeInsets
                                                                    .symmetric(
                                                                  horizontal: 8,
                                                                  vertical: 4,
                                                                ),
                                                                decoration:
                                                                    BoxDecoration(
                                                                  color: Colors
                                                                          .green[
                                                                      100],
                                                                  borderRadius:
                                                                      BorderRadius
                                                                          .circular(
                                                                              8),
                                                                ),
                                                                child: Text(
                                                                  'Success',
                                                                  style:
                                                                      TextStyle(
                                                                    color: Colors
                                                                        .green,
                                                                    fontWeight:
                                                                        FontWeight
                                                                            .bold,
                                                                  ),
                                                                ),
                                                              ),
                                                              Spacer(),
                                                              Text(
                                                                '${snapshot.data[i]['jenis']} / ${snapshot.data[i]['keterangan']}',
                                                                style:
                                                                    TextStyle(
                                                                  fontSize: 16,
                                                                  fontWeight:
                                                                      FontWeight
                                                                          .bold,
                                                                ),
                                                              ),
                                                            ],
                                                          ),
                                                          SizedBox(height: 4),
                                                          Text(
                                                            'Petugas/Amil : ${snapshot.data[i]['nama_amil']}',
                                                            style: TextStyle(
                                                              fontSize: 14,
                                                            ),
                                                          ),
                                                          SizedBox(height: 4),
                                                          Text(
                                                            '${snapshot.data[i]['tgl_zakat']}',
                                                            style: TextStyle(
                                                              color:
                                                                  Colors.grey,
                                                              fontSize: 14,
                                                            ),
                                                          ),
                                                          SizedBox(height: 10),
                                                          Text(
                                                            '${snapshot.data[i]['nama_muzakki']}',
                                                            style: TextStyle(
                                                              fontSize: 18,
                                                              fontWeight:
                                                                  FontWeight
                                                                      .bold,
                                                            ),
                                                          ),
                                                          SizedBox(height: 8),
                                                          Text(
                                                            'Total Zakat',
                                                            style: TextStyle(
                                                              fontSize: 14,
                                                            ),
                                                          ),
                                                          Text(
                                                            snapshot.data[i][
                                                                        'keterangan'] ==
                                                                    "Beras"
                                                                ? "${snapshot.data[i]['total_zakat']}Kg"
                                                                : "${CurrencyFormat.convertToIdr(int.tryParse(snapshot.data[i]['total_zakat']), 0)}",
                                                            style: TextStyle(
                                                              fontSize: 16,
                                                              color:
                                                                  Colors.green,
                                                              fontWeight:
                                                                  FontWeight
                                                                      .bold,
                                                            ),
                                                          ),
                                                        ],
                                                      ),
                                                    ),
                                                  ],
                                                ),
                                              ),
                                            )))
                                    : new Container();
                          },
                        )
                      : const Center(
                          child: CircularProgressIndicator(),
                        );
                },
              ),
            ),
          ],
        ),
      ),
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
}
