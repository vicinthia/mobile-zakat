import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:zakat_mobile/FormUser/detail_mustahik.dart';
import 'package:zakat_mobile/FormUser/form_mustahik.dart';
import 'package:zakat_mobile/FormUser/form_muzakki.dart';
import 'package:zakat_mobile/FormUser/select_listmustahik.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

class listMustahik extends StatefulWidget {
  const listMustahik({Key key}) : super(key: key);

  @override
  State<listMustahik> createState() => _listMustahikState();
}

class _listMustahikState extends State<listMustahik> {
  String Harga;
  TextEditingController Hargacontroller = new TextEditingController();

  Future<List> getData() async {
    final response =
        await http.get(Uri.parse(ApiConstants.baseUrl + "api/zakat/mustahik"));
    return json.decode(response.body)['data'];
  }

  @override
  void initState() {
    getData();
    filter = searchController.text;
    super.initState();
  }

  TextEditingController searchController = TextEditingController();
  String filter;

  @override
  void dispose() {
    searchController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
          backgroundColor: DesignCourseAppTheme.green,
          title: Text("Daftar Mustahik"),
          leading: IconButton(
              icon: Icon(Icons.arrow_back),
              onPressed: () {
                Navigator.push(context,
                    MaterialPageRoute(builder: (context) => formMustahik()));
              })),
      body: new FutureBuilder<List>(
        future: getData(),
        builder: (context, snapshot) {
          if (snapshot.hasError) print(snapshot.error);
          return snapshot.hasData
              ? MenuList(
                  list: snapshot.data,
                )
              : const Center(
                  child: CircularProgressIndicator(),
                );
        },
      ),
    );
  }
}

class MenuList extends StatefulWidget {
  final List list;
  final searchController;
  final filter;
  MenuList({this.list, this.filter, this.searchController});

  @override
  State<MenuList> createState() => _MenuListState();
}

class _MenuListState extends State<MenuList> {
  Future<Null> getRefresh() async {
    await Future.delayed(Duration(seconds: 3));
  }

  String _selectedState; // Initialize as null by default

  @override
  Widget build(BuildContext context) {
    return RefreshIndicator(
      onRefresh: getRefresh,
      child: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          children: [
            DropdownButtonFormField<String>(
              value: _selectedState, // Set the current selected value
              decoration: InputDecoration(
                labelText: 'Golongan Asnaf',
                labelStyle: TextStyle(color: DesignCourseAppTheme.green),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
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
                  _selectedState = value;
                  print(_selectedState);
                  Navigator.of(context).push(MaterialPageRoute(
                      builder: (context) =>
                          SelectMustahikPage(selectAsnaf: _selectedState)));
                });
              },
            ),
            Expanded(
              // Wrap ListView.builder with Expanded to avoid overflow
              child: ListView.builder(
                physics: const BouncingScrollPhysics(
                    parent: AlwaysScrollableScrollPhysics()),
                itemCount: widget.list == null ? 0 : widget.list.length,
                itemBuilder: (context, i) {
                  return widget.filter == null || widget.filter == ""
                      ? Container(
                          child: GestureDetector(
                          onTap: () => Navigator.of(context).push(
                              MaterialPageRoute(
                                  builder: (BuildContext context) =>
                                      DetailMustahik(
                                        list: widget.list,
                                        index: i,
                                      ))),
                          child: Card(
                              child: Padding(
                            padding: const EdgeInsets.all(10.0),
                            child: Column(
                              mainAxisAlignment: MainAxisAlignment.center,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  crossAxisAlignment: CrossAxisAlignment.center,
                                  mainAxisSize: MainAxisSize.max,
                                  children: [
                                    SizedBox(
                                      width: 10,
                                    ),
                                    Expanded(
                                      child: Column(
                                        mainAxisAlignment:
                                            MainAxisAlignment.start,
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        children: [
                                          Text(
                                            "Nama Mustahik : " +
                                                widget.list[i]['nama_mustahik'],
                                            style: TextStyle(
                                                fontSize: 16,
                                                fontWeight: FontWeight.w500),
                                          ),
                                          SizedBox(
                                            height: 5,
                                          ),
                                          Text(
                                            "Alamat : " +
                                                widget.list[i]['alamat_mus'],
                                            style: TextStyle(
                                                fontSize: 16,
                                                fontWeight: FontWeight.w500),
                                          ),
                                          SizedBox(
                                            height: 5,
                                          ),
                                        ],
                                      ),
                                    )
                                  ],
                                )
                              ],
                            ),
                          )),
                        ))
                      : '${widget.list[i]['nama_muzakki']}'
                              .toLowerCase()
                              .contains(widget.filter.toLowerCase())
                          ? Container(
                              child: GestureDetector(
                              onTap: () => Navigator.of(context).push(
                                  MaterialPageRoute(
                                      builder: (BuildContext context) =>
                                          DetailMustahik(
                                            list: widget.list,
                                            index: i,
                                          ))),
                              child: Card(
                                  child: Padding(
                                padding: const EdgeInsets.all(10.0),
                                child: Column(
                                  mainAxisAlignment: MainAxisAlignment.center,
                                  crossAxisAlignment: CrossAxisAlignment.start,
                                  children: [
                                    Row(
                                      mainAxisAlignment:
                                          MainAxisAlignment.start,
                                      crossAxisAlignment:
                                          CrossAxisAlignment.center,
                                      mainAxisSize: MainAxisSize.max,
                                      children: [
                                        SizedBox(
                                          width: 10,
                                        ),
                                        Expanded(
                                          child: Column(
                                            mainAxisAlignment:
                                                MainAxisAlignment.start,
                                            crossAxisAlignment:
                                                CrossAxisAlignment.start,
                                            children: [
                                              Text(
                                                "Nama Mustahik : " +
                                                    widget.list[i]
                                                        ['nama_mustahik'],
                                                style: TextStyle(
                                                    fontSize: 16,
                                                    fontWeight:
                                                        FontWeight.w500),
                                              ),
                                              SizedBox(
                                                height: 5,
                                              ),
                                              Text(
                                                "Alamat : " +
                                                    widget.list[i]
                                                        ['alamat_mus'],
                                                style: TextStyle(
                                                    fontSize: 16,
                                                    fontWeight:
                                                        FontWeight.w500),
                                              ),
                                              SizedBox(
                                                height: 5,
                                              ),
                                            ],
                                          ),
                                        )
                                      ],
                                    )
                                  ],
                                ),
                              )),
                            ))
                          : new Container();
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

List<DropdownMenuItem<String>> _buildDropDownItems(List<String> items) {
  return items
      .map((item) => DropdownMenuItem(
            value: item,
            child: Text(item),
          ))
      .toList();
}
