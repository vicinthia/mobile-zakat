import 'dart:convert';

import 'package:flutter/material.dart';

import 'package:http/http.dart' as http;
import 'package:cool_alert/cool_alert.dart';
import 'package:zakat_mobile/Custom/rp_format.dart';
import 'package:zakat_mobile/FormUser/edit_muzakki.dart';
import 'package:zakat_mobile/FormUser/list_muzakki.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';

class DetailMuzakki extends StatefulWidget {
  List list;
  int index;
  DetailMuzakki({this.index, this.list});

  @override
  State<DetailMuzakki> createState() => _DetailMuzakkiState();
}

class _DetailMuzakkiState extends State<DetailMuzakki> {
  void deleteData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/muzakki");
    http.delete(url,
        body: {"kode_muzakki": widget.list[widget.index]["kode_muzakki"]});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          backgroundColor: DesignCourseAppTheme.green,
          title: Text(
              "Data ID Muzakki ${widget.list[widget.index]['kode_muzakki']}"),
        ),
        body: new Container(
          padding: const EdgeInsets.all(10.0),
          child: Card(
            child: Center(
              child: Column(children: <Widget>[
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Text(
                  "ID Muzakki : ${widget.list[widget.index]['kode_muzakki']}",
                  style: TextStyle(fontSize: 20.0, fontWeight: FontWeight.bold),
                ),
                SizedBox(
                  height: 20.0,
                ),
                Text(
                  "Nama Muzakki : ${widget.list[widget.index]['nama_muzakki']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Tanggal Lahir : ${widget.list[widget.index]['tgl_lahir']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Alamat : ${widget.list[widget.index]['alamat']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Jenis Kelamin : ${widget.list[widget.index]['jns_kel_muz']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                SizedBox(
                  height: 20,
                ),
                Text(
                  "Pekerjaan : ${widget.list[widget.index]['pekerjaan']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "Penghasilan : ${CurrencyFormat.convertToIdr(int.tryParse(widget.list[widget.index]['penghasilan']), 0)}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Text(
                  "No. Telp : ${widget.list[widget.index]['no_telp']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                SizedBox(
                  height: 20,
                ),
                Text(
                  "Keterangan Muzakki : ${widget.list[widget.index]['ket_muzakki']}",
                  style: TextStyle(fontSize: 18.0),
                ),
                Padding(padding: const EdgeInsets.only(top: 30.0)),
                Row(
                  mainAxisSize: MainAxisSize.min,
                  children: <Widget>[
                    ElevatedButton(
                      onPressed: () => Navigator.of(context).push(
                          MaterialPageRoute(
                              builder: (BuildContext context) => EditMuzakki(
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
                                "Apakah Yakin Hapus Data Muzakki '${widget.list[widget.index]['nama_muzakki']}' ?",
                            onConfirmBtnTap: () {
                              deleteData();
                              Navigator.of(context).push(MaterialPageRoute(
                                  builder: (context) => listMuzakki()));
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
