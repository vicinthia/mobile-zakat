import 'package:cool_alert/cool_alert.dart';
import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import 'package:shared_preferences/shared_preferences.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;

import '../design_course/home_design_course.dart';
import 'list_amil.dart';
import 'list_muzakki.dart';
import 'dart:convert';

class formAmil extends StatefulWidget {
  @override
  _formAmilState createState() => _formAmilState();
}

class _formAmilState extends State<formAmil> {
  final _formKey = GlobalKey<FormState>();
  String _selectedState;
  DateTime _selectedDate;
  TextEditingController _dateController = TextEditingController();
  TextEditingController _namaController = TextEditingController();
  TextEditingController _alamatController = TextEditingController();
  TextEditingController _ketController = TextEditingController();

  bool apiCallMade = false;

//192.168.3.233
  @override
  void dispose() {
    _dateController.dispose();
    super.dispose();
  }

  void addPost() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    var url =
        http.post(Uri.parse(ApiConstants.baseUrl + "api/zakat/amil"), body: {
      "kode_amil": "Aml-${pluslastId}",
      "nama_amil": "${_namaController.text}",
      "jns_kel_amil": "${_selectedState}",
      "tgl_lahir_amil": "${_selectedDate}",
      "alamat_amil": "${_alamatController.text}",
      "ket_amil": "${_ketController.text}"
    });
    setState(() {
      apiCallMade = true;
    });
  }

  Future<int> _getLast() async {
    try {
      final response = await http
          .get(Uri.parse(ApiConstants.baseUrl + 'api/zakat/lastIdAmil/last'));

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        String kodeAmil = data['kode_amil'].toString();

        // Menghapus "Aml-" menggunakan replaceAll
        String numericPart = kodeAmil.replaceAll("Aml-", "");

        return int.parse(numericPart); // Mengubah string angka menjadi int
      } else {
        // Mengembalikan 0 jika status code tidak 200
        return 0;
      }
    } catch (e) {
      print('Error fetching last ID: $e');
      return 0; // Kembalikan 0 jika terjadi error
    }
  }

  int lastId;
  int pluslastId;
  void testGetLast() async {
    try {
      lastId = await _getLast();
      pluslastId = lastId + 1;
      print('Last transaction ID: $lastId');
      print('Last transaction ID: $pluslastId');
    } catch (e) {
      print('Error: $e');
    }
  }

  int _transactionId = 0;

  void _saveTransactionId(int newId) async {
    SharedPreferences prefs = await SharedPreferences.getInstance();
    await prefs.setInt('transactionIdAml', newId);
  }

  void _generateTransactionId() {
    setState(() {
      _transactionId++;
      _saveTransactionId(_transactionId);
    });
  }

  @override
  void initState() {
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Form Amil"),
        backgroundColor: DesignCourseAppTheme.green,
        leading: IconButton(
          icon: Icon(Icons.arrow_back),
          onPressed: () {
            Navigator.push(
                context,
                MaterialPageRoute(
                    builder: (context) => DesignCourseHomeScreen()));
          },
        ),
      ),
      body: Form(
        key: _formKey,
        child: SingleChildScrollView(
          child: Padding(
            padding: const EdgeInsets.only(top: 50, left: 20, right: 20),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: <Widget>[
                Text('Personal',
                    style:
                        TextStyle(fontSize: 18, fontWeight: FontWeight.bold)),
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
                // TextFormField(
                //   decoration: InputDecoration(labelText: 'Jenis Kel Muzakki'),
                //   obscureText: true,
                // ),
                DropdownButtonFormField<String>(
                  decoration: InputDecoration(labelText: 'Jenis Kelamin'),
                  items: _buildDropDownItems(['Laki-Laki', 'Perempuan']),
                  onChanged: (value) {
                    setState(() {
                      _selectedState = value;
                    });
                  },
                ),
                SizedBox(height: 50),
                // Text('Account',
                //     style:
                //         TextStyle(fontSize: 18, fontWeight: FontWeight.bold)),
                // TextFormField(
                //   decoration: InputDecoration(labelText: 'Email'),
                // ),
                // TextFormField(
                //   decoration: InputDecoration(labelText: 'Password'),
                //   obscureText: true,
                // ),
                // TextFormField(
                //   decoration: InputDecoration(labelText: 'Verify Password'),
                //   obscureText: true,
                // ),
                // SizedBox(height: 16),
                Text('Contact',
                    style:
                        TextStyle(fontSize: 18, fontWeight: FontWeight.bold)),
                TextFormField(
                  controller: _alamatController,
                  decoration: InputDecoration(labelText: 'Alamat'),
                ),
                TextFormField(
                  controller: _ketController,
                  decoration: InputDecoration(labelText: 'Keterangan Amil'),
                ),

                SizedBox(height: 50),

                Center(
                  child: Container(
                    height: 60,
                    width: 200,
                    child: ElevatedButton(
                      onPressed: () async {
                        if (!apiCallMade) {
                          // Make the API call
                          await testGetLast();
                          await addPost();

                          // _generateTransactionId();
                        } else {
                          // Show a message or perform a different action
                          print("data tidak masuk");
                        }
                        Navigator.of(context).push(MaterialPageRoute(
                            builder: (context) => formAmil()));
                        await CoolAlert.show(
                            context: context,
                            type: CoolAlertType.success,
                            title: "Berhasil Mendata",
                            text: "Data Amil Tersimpan!",
                            confirmBtnText: "Ok");
                      },
                      child: Text("Simpan Data Amil"),
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
                // TextFormField(
                //   decoration: InputDecoration(labelText: 'City'),
                // ),

                // TextFormField(
                //   decoration: InputDecoration(labelText: 'Phone'),
                // ),
              ],
            ),
          ),
        ),
      ),
      floatingActionButton: ElevatedButton.icon(
        icon: Icon(
          Icons.arrow_right,
          color: Colors.white,
          size: 30.0,
        ),
        onPressed: () {
          Navigator.of(context).pushReplacement(
              MaterialPageRoute(builder: (context) => listAmil()));
        },
        label: Text("List Amil"),
        style: ElevatedButton.styleFrom(
          shadowColor: Colors.black,
          primary: DesignCourseAppTheme.green,
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(20),
          ),
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
