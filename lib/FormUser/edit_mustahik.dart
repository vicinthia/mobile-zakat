import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import 'package:cool_alert/cool_alert.dart';
import 'package:intl/intl.dart';
import 'package:zakat_mobile/FormUser/list_mustahik.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'form_mustahik.dart';

class EditMustahik extends StatefulWidget {
  final List list;
  final int index;

  EditMustahik({this.list, this.index});

  @override
  State<EditMustahik> createState() => _EditMustahikState();
}

class _EditMustahikState extends State<EditMustahik> {
  TextEditingController _namaController;
  TextEditingController _alamatController;
  TextEditingController _ketController;
  TextEditingController _jmlController;
  TextEditingController _ktpController;
  TextEditingController _kkController;
  String _selectedState;
  DateTime _selectedDate;
  TextEditingController _dateController;

  void editData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/mustahik");
    http.put(url, body: {
      "kode_mustahik": widget.list[widget.index]["kode_mustahik"],
      "nama_mustahik": "${_namaController.text}",
      "jns_kel_mus": "${_selectedState}",
      "tgl_lahir_mus": "${DateFormat('yyyy-MM-dd').format(_selectedDate)}",
      "alamat_mus": "${_alamatController.text}",
      "ket_mustahik": "${_ketController.text}",
      // "no_ktp": "${_ktpController.text}",
      // "no_kk": "${_kkController.text}"
    });
  }

  @override
  void initState() {
    _namaController = new TextEditingController(
        text: widget.list[widget.index]["nama_mustahik"]);
    _alamatController = new TextEditingController(
        text: widget.list[widget.index]["alamat_mus"]);
    _ketController = new TextEditingController(
        text: widget.list[widget.index]["ket_mustahik"]);
    _selectedState = widget.list[widget.index]["jns_kel_mus"];
    _selectedDate = DateTime.parse(widget.list[widget.index]["tgl_lahir_mus"]);

    _dateController = TextEditingController(
        text: DateFormat('MMMM d, y').format(_selectedDate));

    // _ktpController =
    //     new TextEditingController(text: widget.list[widget.index]["no_ktp"]);
    // _kkController =
    //     new TextEditingController(text: widget.list[widget.index]["no_kk"]);

    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text("Form Edit Data",
              style: TextStyle(fontWeight: FontWeight.bold)),
          backgroundColor: DesignCourseAppTheme.green,
        ),
        body: SingleChildScrollView(
          child: Padding(
              padding: const EdgeInsets.all(10.0),
              child: Column(children: [
                Text(
                  'Form Edit Data',
                  style: TextStyle(fontSize: 20),
                ),
                SizedBox(height: 20),
                Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: <Widget>[
                    Text('Personal',
                        style: TextStyle(
                            fontSize: 18, fontWeight: FontWeight.bold)),
                    TextFormField(
                      controller: _namaController,
                      decoration: InputDecoration(labelText: 'Nama Lengkap'),
                    ),
                    TextFormField(
                      controller: _dateController,
                      decoration: InputDecoration(labelText: 'Tanggal Lahir'),
                      readOnly: true,
                      onTap: () async {
                        DateTime pickedDate = await showDatePicker(
                          context: context,
                          initialDate: DateTime.now(),
                          firstDate: DateTime(1900),
                          lastDate: DateTime.now(),
                        );
                        if (pickedDate != null) {
                          setState(() {
                            _selectedDate = pickedDate;
                            _dateController.text =
                                DateFormat('MMMM d, y').format(_selectedDate);
                          });
                        }
                      },
                    ),
                    DropdownButtonFormField<String>(
                      decoration: InputDecoration(labelText: '$_selectedState'),
                      items: _buildDropDownItems(['Laki-Laki', 'Perempuan']),
                      onChanged: (value) {
                        setState(() {
                          _selectedState = value;
                        });
                      },
                    ),
                    // TextFormField(
                    //   controller: _ktpController,
                    //   decoration: InputDecoration(labelText: 'Nomor KTP'),
                    //   keyboardType: TextInputType.number,
                    // ),
                    // TextFormField(
                    //   controller: _kkController,
                    //   decoration: InputDecoration(labelText: 'Nomor KK'),
                    //   keyboardType: TextInputType.number,
                    // ),
                    SizedBox(height: 50),
                    Text('Contact',
                        style: TextStyle(
                            fontSize: 18, fontWeight: FontWeight.bold)),
                    TextFormField(
                      controller: _alamatController,
                      decoration: InputDecoration(labelText: 'Alamat'),
                    ),
                    TextFormField(
                      controller: _ketController,
                      decoration:
                          InputDecoration(labelText: 'Keterangan Mustahik'),
                    ),
                    SizedBox(height: 50),
                    Center(
                      child: Container(
                        height: 60,
                        width: 188,
                        child: ElevatedButton(
                          onPressed: () async {
                            setState(() {});
                            editData();
                            await CoolAlert.show(
                                context: context,
                                type: CoolAlertType.success,
                                title: "Berhasil Mendata",
                                text: "Data Muzakki Tersimpan!",
                                confirmBtnText: "Ok");
                            Navigator.of(context).push(MaterialPageRoute(
                                builder: (context) => listMustahik()));
                          },
                          child: Text("Edit Data Mustahik"),
                          style: ElevatedButton.styleFrom(
                            shadowColor: Colors.black,
                            primary: DesignCourseAppTheme.green,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20),
                            ),
                          ),
                        ),
                      ),
                    ),
                  ],
                ),
              ])),
        ));
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
