import 'dart:convert';

import 'package:flutter/material.dart';

import 'package:http/http.dart' as http;
import 'package:cool_alert/cool_alert.dart';

import 'package:zakat_mobile/FormUser/list_mustahik.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'edit_mustahik.dart';

class DetailMustahik extends StatefulWidget {
  List list;
  int index;
  DetailMustahik({this.index, this.list});

  @override
  State<DetailMustahik> createState() => _DetailMustahikState();
}

class _DetailMustahikState extends State<DetailMustahik> {
  void deleteData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/mustahik");
    http.delete(url,
        body: {"kode_mustahik": widget.list[widget.index]["kode_mustahik"]});
  }

  void deleteBerkas() async {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/berkasmustahik");
    http.delete(url,
        body: {"kode_mustahik": widget.list[widget.index]["kode_mustahik"]});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          backgroundColor: DesignCourseAppTheme.green,
          title: Text(
              "Data ID Mustahik ${widget.list[widget.index]['kode_mustahik']}"),
        ),
        body: new Container(
          padding: const EdgeInsets.all(10.0),
          child: Card(
            child: Center(
              child: Column(children: <Widget>[
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Text(
                  "ID Mustahik : ${widget.list[widget.index]['kode_mustahik']}",
                  style: TextStyle(fontSize: 20.0, fontWeight: FontWeight.bold),
                ),
                SizedBox(
                  height: 20.0,
                ),
                Text(
                  "Nama Mustahik : ${widget.list[widget.index]['nama_mustahik']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Tanggal Lahir : ${widget.list[widget.index]['tgl_lahir_mus']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Alamat : ${widget.list[widget.index]['alamat_mus']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Jenis Kelamin : ${widget.list[widget.index]['jns_kel_mus']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                // Text(
                //   "No KTP : ${widget.list[widget.index]['no_ktp']}",
                //   style: TextStyle(fontSize: 18.0),
                // ),
                // Text(
                //   "No KK : ${widget.list[widget.index]['no_kk']}",
                //   style: TextStyle(fontSize: 18.0),
                // ),
                SizedBox(
                  height: 20,
                ),
                Text(
                  "Keterangan Mustahik : ${widget.list[widget.index]['ket_mustahik']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Row(
                  mainAxisSize: MainAxisSize.min,
                  children: <Widget>[
                    ElevatedButton(
                      onPressed: () => Navigator.of(context).push(
                          MaterialPageRoute(
                              builder: (BuildContext context) => EditMustahik(
                                  list: widget.list, index: widget.index))),
                      child: Text("EDIT",
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.w500,
                              color: Colors.white)),
                      style: ElevatedButton.styleFrom(
                        primary: Colors.green,
                      ),
                    ),
                    SizedBox(
                      width: 20,
                    ),
                    ElevatedButton(
                      onPressed: () async {
                        await CoolAlert.show(
                            context: context,
                            type: CoolAlertType.warning,
                            text:
                                "Apakah Yakin Hapus Data Mustahik '${widget.list[widget.index]['nama_mustahik']}' ?",
                            onConfirmBtnTap: () async {
                              deleteBerkas();
                              setState(() {});
                              deleteData();
                              setState(() {});
                              await Navigator.of(context).push(
                                  MaterialPageRoute(
                                      builder: (context) => listMustahik()));
                            });
                      },
                      child: Text("DELETE",
                          style: TextStyle(
                              fontSize: 20,
                              fontWeight: FontWeight.w500,
                              color: Colors.white)),
                      style: ElevatedButton.styleFrom(
                        primary: Colors.redAccent,
                      ),
                    )
                  ],
                ),
              ]),
            ),
          ),
        ));
  }
}
