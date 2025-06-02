import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import 'package:cool_alert/cool_alert.dart';
import 'package:intl/intl.dart';
import 'package:zakat_mobile/FormUser/list_muzakki.dart';

import '../Custom/rp_format.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'form_muzakki.dart';

class EditMuzakki extends StatefulWidget {
  final List list;
  final int index;

  EditMuzakki({this.list, this.index});

  @override
  State<EditMuzakki> createState() => _EditMuzakkiState();
}

class _EditMuzakkiState extends State<EditMuzakki> {
  TextEditingController _namaController;
  TextEditingController _alamatController;
  TextEditingController _ketController;
  TextEditingController _jmlController;
  TextEditingController _pekerjaanController;
  TextEditingController _penghasilanController;
  TextEditingController _noTelpController;

  String _selectedState;
  DateTime _selectedDate;
  TextEditingController _dateController;

  String selectedCategory;
  String selectedRw;
  String selectedArea;
  String selectedRt;

  final Map<String, List<String>> rwOptions = {
    'Makarya': ['RW 03', 'RW 04'],
    'Sekitar Makarya': ['Siwalankerto', 'Pengkol', 'Brigjen Katamso'],
    'Lain-lain': ['RW 07', 'RW 08'],
  };

  final Map<String, List<String>> areaOptions = {
    'RW 03': ['Barat', 'Timur', 'Utara'],
    'RW 04': ['Barat', 'Timur', 'Utara'],
    // 'RW 05': ['Utara', 'Tenggara', 'Selatan'],
    // Tambahkan data untuk RW lainnya
  };

  final Map<String, List<String>> rtOptions = {
    'Barat': ['RT 09', 'RT 10', 'RT 11'],
    'Timur': ['RT 06', 'RT 07', 'RT 08'],
    'Utara': ['RT 12', 'RT 16', 'RT 17'],
    // Tambahkan data untuk Area lainnya
  };

  String tglLahirUp;
  String hasilUp;
  void editData() {
    var url = Uri.parse(ApiConstants.baseUrl + "api/zakat/muzakki");
    http.put(url, body: {
      "kode_muzakki": widget.list[widget.index]["kode_muzakki"],
      "nama_muzakki": "${_namaController.text}",
      "jns_kel_muz": "${_selectedState}",
      "tgl_lahir": "${DateFormat('yyyy-MM-dd').format(_selectedDate)}",
      "alamat": "${_alamatController.text}",
      "ket_muzakki": "${_ketController.text}",
      "pekerjaan": "${_pekerjaanController.text}",
      "penghasilan":
          "${_penghasilanController.text.replaceAll('Rp', '').replaceAll('.', '')}",
      "no_telp": "${_noTelpController.text}"
    });
  }

  @override
  void initState() {
    _namaController = new TextEditingController(
        text: widget.list[widget.index]["nama_muzakki"]);
    _alamatController =
        new TextEditingController(text: widget.list[widget.index]["alamat"]);
    _ketController = new TextEditingController(
        text: widget.list[widget.index]["ket_muzakki"]);
    _selectedState = widget.list[widget.index]["jns_kel_muz"];
    _selectedDate = DateTime.parse(widget.list[widget.index]["tgl_lahir"]);

    _dateController = TextEditingController(
        text: DateFormat('MMMM d, y').format(_selectedDate));
    _pekerjaanController =
        new TextEditingController(text: widget.list[widget.index]["pekerjaan"]);
    _penghasilanController = new TextEditingController(
        text: CurrencyFormat.convertToIdr(
            int.tryParse(widget.list[widget.index]["penghasilan"]), 0));
    _noTelpController =
        new TextEditingController(text: widget.list[widget.index]["no_telp"]);

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
                    TextFormField(
                      controller: _pekerjaanController,
                      decoration: InputDecoration(labelText: 'Pekerjaan'),
                    ),
                    TextFormField(
                      controller: _penghasilanController,
                      decoration: InputDecoration(labelText: 'Penghasilan'),
                      keyboardType: TextInputType.number,
                      inputFormatters: [CurrencyTextInputFormatter()],
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
                      controller: _noTelpController,
                      decoration: InputDecoration(labelText: 'No.Telp'),
                      keyboardType: TextInputType.number,
                    ),
                    TextFormField(
                      controller: _ketController,
                      decoration:
                          InputDecoration(labelText: 'Keterangan Muzakki'),
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
                                builder: (context) => listMuzakki()));
                          },
                          child: Text("Edit Data Muzakki"),
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
