import 'dart:convert';

import 'package:flutter/material.dart';

import 'package:http/http.dart' as http;
import 'package:cool_alert/cool_alert.dart';
import 'package:zakat_mobile/FormUser/edit_amil.dart';

import 'package:zakat_mobile/FormUser/list_amil.dart';

import '../design_course/design_course_app_theme.dart';
import '../../api/link.dart';

class DetailAmil extends StatefulWidget {
  List list;
  int index;
  DetailAmil({this.index, this.list});

  @override
  State<DetailAmil> createState() => _DetailAmilState();
}

class _DetailAmilState extends State<DetailAmil> {
  void deleteData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/amil");
    http.delete(url,
        body: {"kode_amil": widget.list[widget.index]["kode_amil"]});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          backgroundColor: DesignCourseAppTheme.green,
          title: Text("Data ID Amil ${widget.list[widget.index]['kode_amil']}"),
        ),
        body: new Container(
          padding: const EdgeInsets.all(10.0),
          child: Card(
            child: Center(
              child: Column(children: <Widget>[
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Text(
                  "ID Amil : ${widget.list[widget.index]['kode_amil']}",
                  style: TextStyle(fontSize: 20.0, fontWeight: FontWeight.bold),
                ),
                SizedBox(
                  height: 20.0,
                ),
                Text(
                  "Nama Amil : ${widget.list[widget.index]['nama_amil']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Tanggal Lahir : ${widget.list[widget.index]['tgl_lahir_amil']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Alamat : ${widget.list[widget.index]['alamat_amil']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Jenis Kelamin : ${widget.list[widget.index]['jns_kel_amil']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Keterangan Amil : ${widget.list[widget.index]['ket_amil']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Row(
                  mainAxisSize: MainAxisSize.min,
                  children: <Widget>[
                    ElevatedButton(
                      onPressed: () => Navigator.of(context).push(
                          MaterialPageRoute(
                              builder: (BuildContext context) => EditAmil(
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
                                "Apakah Yakin Hapus Data Amil '${widget.list[widget.index]['nama_amil']}' ?",
                            onConfirmBtnTap: () {
                              deleteData();
                              Navigator.of(context).push(MaterialPageRoute(
                                  builder: (context) => listAmil()));
                            });

                        setState(() {});
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
