import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:intl/intl.dart';

import '../Custom/rp_format.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;
import 'package:shared_preferences/shared_preferences.dart';
import 'package:cool_alert/cool_alert.dart';

import '../design_course/home_design_course.dart';
import 'list_muzakki.dart';

class formMuzakki extends StatefulWidget {
  @override
  _formMuzakkiState createState() => _formMuzakkiState();
}

class _formMuzakkiState extends State<formMuzakki> {
  final _formKey = GlobalKey<FormState>();
  String _selectedState;
  DateTime _selectedDate;
  TextEditingController _dateController = TextEditingController();
  TextEditingController _namaController = TextEditingController();
  TextEditingController _alamatController = TextEditingController();
  TextEditingController _ketController = TextEditingController();
  TextEditingController _pekerjaanController = TextEditingController();
  TextEditingController _penghasilanController = TextEditingController();
  TextEditingController _noTelpController = TextEditingController();

  bool apiCallMade = false;
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
    String alamat = selectedCategory ?? '';

    if (selectedCategory != 'Lain-lain') {
      alamat += selectedRw != null ? ', ' + selectedRw : '';
      alamat += selectedArea != null ? ', ' + selectedArea : '';
      alamat += selectedRt != null ? ', ' + selectedRt : '';
    } else {
      alamat += _alamatController != null ? ', ' + _alamatController.text : '';
    }

    var url =
        http.post(Uri.parse(ApiConstants.baseUrl + "api/zakat/muzakki"), body: {
      "kode_muzakki": "Muz-${pluslastId}",
      "nama_muzakki": "${_namaController.text}",
      "jns_kel_muz": "${_selectedState}",
      "tgl_lahir": "${_selectedDate}",
      "alamat": "${alamat}",
      "ket_muzakki": "${_ketController.text}",
      "pekerjaan": "${_pekerjaanController.text}",
      "penghasilan":
          "${_penghasilanController.text.replaceAll('Rp', '').replaceAll('.', '')}",
      "no_telp": "${_noTelpController.text}",
    });
    setState(() {
      apiCallMade = true;
    });
  }

  Future<int> _getLast() async {
    try {
      final response = await http.get(
          Uri.parse(ApiConstants.baseUrl + 'api/zakat/lastIdMuzakki/last'));

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        String kodeMuz = data['kode_muzakki'].toString();

        // Menghapus "Aml-" menggunakan replaceAll
        String numericPart = kodeMuz.replaceAll("Muz-", "");

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

  @override
  void initState() {
    super.initState();
    // _loadTransactionId();
    // ppn = widget.total + widget.intotal;
  }

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

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
          title: Text("Form Muzakki"),
          backgroundColor: DesignCourseAppTheme.green,
          leading: IconButton(
              icon: Icon(Icons.arrow_back),
              onPressed: () {
                Navigator.push(
                    context,
                    MaterialPageRoute(
                        builder: (context) => DesignCourseHomeScreen()));
              })),
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
                    style:
                        TextStyle(fontSize: 18, fontWeight: FontWeight.bold)),
                // TextFormField(
                //   controller: _alamatController,
                //   decoration: InputDecoration(labelText: 'Alamat'),
                // ),
                DropdownButtonFormField<String>(
                  decoration: InputDecoration(labelText: 'Alamat'),
                  value: selectedCategory,
                  items: ['Makarya', 'Sekitar Makarya', 'Lain-lain']
                      .map((category) => DropdownMenuItem(
                            value: category,
                            child: Text(category),
                          ))
                      .toList(),
                  onChanged: (value) {
                    setState(() {
                      selectedCategory = value;
                      selectedRw = null;
                      selectedArea = null;
                      selectedRt = null;
                    });
                  },
                ),
                if (selectedCategory != null && selectedCategory != 'Lain-lain')
                  DropdownButtonFormField<String>(
                    decoration: InputDecoration(
                        labelText: selectedCategory == 'Sekitar Makarya'
                            ? 'Daerah'
                            : 'RW'),
                    value: selectedRw,
                    items: rwOptions[selectedCategory]
                        .map((rw) => DropdownMenuItem(
                              value: rw,
                              child: Text(rw),
                            ))
                        .toList(),
                    onChanged: (value) {
                      setState(() {
                        selectedRw = value;
                        selectedArea = null;
                        selectedRt = null;
                      });
                    },
                  ),
                if (selectedRw != null && areaOptions.containsKey(selectedRw))
                  DropdownButtonFormField<String>(
                    decoration: InputDecoration(labelText: 'Area'),
                    value: selectedArea,
                    items: areaOptions[selectedRw]
                        .map((area) => DropdownMenuItem(
                              value: area,
                              child: Text(area),
                            ))
                        .toList(),
                    onChanged: (value) {
                      setState(() {
                        selectedArea = value;
                        selectedRt = null;
                      });
                    },
                  ),
                if (selectedArea != null && rtOptions.containsKey(selectedArea))
                  DropdownButtonFormField<String>(
                    decoration: InputDecoration(labelText: 'RT'),
                    value: selectedRt,
                    items: rtOptions[selectedArea]
                        .map((rt) => DropdownMenuItem(
                              value: rt,
                              child: Text(rt),
                            ))
                        .toList(),
                    onChanged: (value) {
                      setState(() {
                        selectedRt = value;
                      });
                    },
                  ),
                if (selectedCategory == 'Lain-lain')
                  TextFormField(
                    controller: _alamatController,
                    decoration:
                        InputDecoration(labelText: 'Deskripsi Lain-lain'),
                    onChanged: (value) {
                      // Logika untuk menyimpan deskripsi Lain-lain jika diperlukan
                    },
                  ),
                TextFormField(
                  controller: _noTelpController,
                  decoration: InputDecoration(labelText: 'No.Telp'),
                  keyboardType: TextInputType.number,
                ),
                TextFormField(
                  controller: _ketController,
                  decoration: InputDecoration(labelText: 'Keterangan Muzakki'),
                ),

                SizedBox(height: 50),

                Center(
                  child: Container(
                    height: 60,
                    width: 188,
                    child: ElevatedButton(
                      onPressed: () async {
                        if (!apiCallMade) {
                          showLoadingDialog(
                              context); // Menampilkan dialog loading
                          // Make the API call

                          try {
                            await testGetLast();
                            await addPost();
                            // _generateTransactionId();
                          } finally {
                            Navigator.of(context)
                                .pop(); // Menutup dialog setelah KirimGambar selesai
                          }
                        } else {
                          // Show a message or perform a different action
                          print("data tidak masuk");
                        }
                        Navigator.of(context).push(MaterialPageRoute(
                            builder: (context) => formMuzakki()));
                        await CoolAlert.show(
                            context: context,
                            type: CoolAlertType.success,
                            title: "Berhasil Mendata",
                            text: "Data Muzakki Tersimpan!",
                            confirmBtnText: "Ok");
                      },
                      child: Text("Simpan Data Muzakki"),
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
              MaterialPageRoute(builder: (context) => listMuzakki()));
        },
        label: Text("List Muzakki"),
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

void showLoadingDialog(BuildContext context) {
  showDialog(
    context: context,
    barrierDismissible:
        false, // Dialog tidak bisa ditutup dengan mengklik di luar
    builder: (BuildContext context) {
      return Dialog(
        child: Container(
          padding: EdgeInsets.all(16.0),
          child: Row(
            mainAxisSize: MainAxisSize.min,
            children: [
              CircularProgressIndicator(),
              SizedBox(width: 16.0),
              Text("Loading..."),
            ],
          ),
        ),
      );
    },
  );
}
