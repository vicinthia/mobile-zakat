import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import 'package:cool_alert/cool_alert.dart';
import 'package:intl/intl.dart';
import 'package:zakat_mobile/FormUser/list_amil.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'form_amil.dart';

class EditAmil extends StatefulWidget {
  final List list;
  final int index;

  EditAmil({this.list, this.index});

  @override
  State<EditAmil> createState() => _EditAmilState();
}

class _EditAmilState extends State<EditAmil> {
  TextEditingController _namaController;
  TextEditingController _alamatController;
  TextEditingController _ketController;
  TextEditingController _jmlController;
  String _selectedState;
  DateTime _selectedDate;
  TextEditingController _dateController;

  void editData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/amil");
    http.put(url, body: {
      "kode_amil": widget.list[widget.index]["kode_amil"],
      "nama_amil": "${_namaController.text}",
      "jns_kel_amil": "${_selectedState}",
      "tgl_lahir": "${DateFormat('yyyy-MM-dd').format(_selectedDate)}",
      "tgl_lahir_amil": "${_selectedDate}",
      "alamat_amil": "${_alamatController.text}",
      "ket_amil": "${_ketController.text}"
    });
  }

  @override
  void initState() {
    _namaController =
        new TextEditingController(text: widget.list[widget.index]["nama_amil"]);
    _alamatController = new TextEditingController(
        text: widget.list[widget.index]["alamat_amil"]);
    _ketController =
        new TextEditingController(text: widget.list[widget.index]["ket_amil"]);
    _selectedState = widget.list[widget.index]["jns_kel_amil"];
    _selectedDate = DateTime.parse(widget.list[widget.index]["tgl_lahir_amil"]);

    _dateController = TextEditingController(
        text: DateFormat('MMMM d, y').format(_selectedDate));
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
                      decoration: InputDecoration(labelText: 'Keterangan amil'),
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
                                builder: (context) => listAmil()));
                          },
                          child: Text("Edit Data amil"),
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
