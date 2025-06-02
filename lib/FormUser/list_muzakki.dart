import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:zakat_mobile/FormUser/detail_muzakki.dart';
import 'package:zakat_mobile/FormUser/form_muzakki.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

class listMuzakki extends StatefulWidget {
  const listMuzakki({Key key}) : super(key: key);

  @override
  State<listMuzakki> createState() => _listMuzakkiState();
}

class _listMuzakkiState extends State<listMuzakki> {
  String Harga;
  TextEditingController Hargacontroller = new TextEditingController();

  Future<List> getData() async {
    final response =
        await http.get(Uri.parse(ApiConstants.baseUrl + "api/zakat/muzakki"));
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
          title: Text("Daftar Muzakki"),
          leading: IconButton(
              icon: Icon(Icons.arrow_back),
              onPressed: () {
                Navigator.push(context,
                    MaterialPageRoute(builder: (context) => formMuzakki()));
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

  @override
  Widget build(BuildContext context) {
    return RefreshIndicator(
      onRefresh: getRefresh,
      child: ListView.builder(
        physics: const BouncingScrollPhysics(
            parent: AlwaysScrollableScrollPhysics()),
        itemCount: widget.list == null ? 0 : widget.list.length,
        itemBuilder: (context, i) {
          return widget.filter == null || widget.filter == ""
              ? Container(
                  child: GestureDetector(
                  onTap: () => Navigator.of(context).push(MaterialPageRoute(
                      builder: (BuildContext context) => DetailMuzakki(
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
                            // Image.asset("assets/burger.png", height: 70, width: 100),
                            SizedBox(
                              width: 10,
                            ),
                            Expanded(
                              child: Column(
                                mainAxisAlignment: MainAxisAlignment.start,
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: [
                                  Text(
                                    "Nama Muzakki : " +
                                        widget.list[i]['nama_muzakki'],
                                    style: TextStyle(
                                        fontSize: 16,
                                        fontWeight: FontWeight.w500),
                                  ),
                                  SizedBox(
                                    height: 5,
                                  ),
                                  Text(
                                    "Alamat : " + widget.list[i]['alamat'],
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
                      onTap: () => Navigator.of(context).push(MaterialPageRoute(
                          builder: (BuildContext context) => DetailMuzakki(
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
                                // Image.asset("assets/burger.png", height: 70, width: 100),
                                SizedBox(
                                  width: 10,
                                ),
                                Expanded(
                                  child: Column(
                                    mainAxisAlignment: MainAxisAlignment.start,
                                    crossAxisAlignment:
                                        CrossAxisAlignment.start,
                                    children: [
                                      Text(
                                        "Nama Muzakki : " +
                                            widget.list[i]['nama_muzakki'],
                                        style: TextStyle(
                                            fontSize: 16,
                                            fontWeight: FontWeight.w500),
                                      ),
                                      SizedBox(
                                        height: 5,
                                      ),
                                      Text(
                                        "Alamat : " + widget.list[i]['alamat'],
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
                  : new Container();
        },
      ),
    );
  }
}
