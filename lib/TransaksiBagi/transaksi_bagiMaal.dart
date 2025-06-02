import 'dart:convert';
import 'dart:io';

import 'package:cool_alert/cool_alert.dart';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';
import 'package:intl/intl.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:zakat_mobile/Transaksi/pop_mustahik.dart';
import 'package:zakat_mobile/Transaksi/pop_amil.dart';

import '../Custom/rp_format.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;

import '../design_course/home_design_course.dart';
import 'package:image/image.dart' as img;

class TransaksiBagiMaal extends StatefulWidget {
  @override
  State<TransaksiBagiMaal> createState() => _TransaksiBagiMaalState();
}

class _TransaksiBagiMaalState extends State<TransaksiBagiMaal> {
  final TextEditingController _nominalController = TextEditingController();
  final TextEditingController _kiloController = TextEditingController();
  final TextEditingController _selectMustahik = TextEditingController();
  final TextEditingController _selectAmil = TextEditingController();
  String _selectedNominal = ''; // Track selected nominal value

  String namaMus;
  String alamat_mus;
  String namaAmil;
  String alamatAmil;
  String kodeMus;
  String kodeAmil;

  void _showDialog() async {
    final result = await showDataDialog(context);
    if (result != null) {
      setState(() {
        namaMus = result['nama_mustahik'];
        alamat_mus = result['alamat_mus'];
        kodeMus = result['kode_mustahik'];
      });
    }
  }

  void _showDialogAmil() async {
    final result = await showDataDialogAmil(context);
    if (result != null) {
      setState(() {
        namaAmil = result['nama_amil'];
        alamatAmil = result['alamat_amil'];
        kodeAmil = result['kode_amil'];
      });
    }
  }

  void _updateNominal(String value) {
    setState(() {
      _selectedNominal = value; // Set the selected value
      // String cleanedValue = value.replaceAll('Rp', '');
      _nominalController.text = _selectedNominal;
    });
  }

  @override
  void dispose() {
    _nominalController.dispose(); // Dispose the controller when not needed
    _kiloController.dispose();
    super.dispose();
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    _nominalController.addListener(() {
      setState(() {});
    });
    _kiloController.addListener(() {
      setState(() {});
    });
    // _loadTransactionId();
  }

  DateTime tgl_transaksi = new DateTime.now();
  TextEditingController _controller = TextEditingController();
  List<dynamic> _results = []; // Use dynamic for flexibility
  TextEditingController _dateController = TextEditingController();
  String _selectedState;
  DateTime _selectedDate;

  void addDataZakat() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    var url = http.post(
        Uri.parse(ApiConstants.baseUrl + "api/zakat/Transaksibagi"),
        body: {
          "kode_bagi": "M-${pluslastId}",
          "kode_mustahik": kodeMus,
          "total_bagi":
              "${_nominalController.text.replaceAll('Rp', '').replaceAll('.', '')}",
          "kode_amil": kodeAmil,
          "tgl_bagi": "${_selectedDate}",
        });
  }

  Future<int> _getLast() async {
    try {
      final response = await http
          .get(Uri.parse(ApiConstants.baseUrl + 'api/zakat/lastIdBagi/last'));

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        String kodeBagi = data['kode_bagi'].toString();

        // Menghapus "Aml-" menggunakan replaceAll
        String numericPart = kodeBagi.replaceAll(RegExp(r'^(F-|M-)'), '');

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

  // int _transactionId = 0;

  // void _loadTransactionId() async {
  //   SharedPreferences prefs = await SharedPreferences.getInstance();
  //   setState(() {
  //     _transactionId = prefs.getInt('transactionBagi') ?? 0;
  //   });
  // }

  // void _saveTransactionId(int newId) async {
  //   SharedPreferences prefs = await SharedPreferences.getInstance();
  //   await prefs.setInt('transactionBagi', newId);
  // }

  // void _generateTransactionId() {
  //   setState(() {
  //     _transactionId++;
  //     _saveTransactionId(_transactionId);
  //   });
  // }

  File imagepath;
  String imagename;
  String imagedata;
  ImagePicker imagePicker = new ImagePicker();

  // Future<void> KirimGambar() async {
  //   try {
  //     String uri = ApiConstants.baseUrl + "imgupload_buktibagi.php";
  //     var res = await http.post(Uri.parse(uri), body: {
  //       "kode_mustahik": kodeMus,
  //       "data": imagedata,
  //       "name": imagename,
  //       "kode_bagi": "M-000${_transactionId + 1}",
  //     });
  //     var response = jsonDecode(res.body);
  //     if (response["success"] == "true") {
  //       print("Uploaded");
  //     } else {
  //       print("Gagal Upload");
  //     }
  //   } catch (e) {
  //     print(e);
  //   }
  //}

  String kodeBagi;
  Future<void> KirimGambar() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    kodeBagi = "M-${pluslastId}"; // Set nilai kode_bagi
    try {
      String uri = ApiConstants.baseUrl + "api/zakat/uploadBagi/save_data";
      var res = await http.post(
        Uri.parse(uri),
        body: {
          "kode_mustahik": kodeMus,
          "data": imagedata,
          "name": imagename,
          "kode_bagi": kodeBagi,
        },
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
      );

      var response = jsonDecode(res.body);
      if (response["success"] == true) {
        print("Uploaded");
      } else {
        print("Gagal Upload: ${response['message']}");
      }
    } catch (e) {
      print(e);
    }
  }

  DateTime tgl = new DateTime.now();
  // Future<void> getImage() async {
  //   var getimage = await imagePicker.pickImage(source: ImageSource.gallery);

  //   setState(() {
  //     imagepath = File(getimage.path);
  //     // imagename = getimage.path.split("/").last;
  //     String fileExtension = getimage.path.split('.').last;
  //     imagename = '${namaMus}_MaalMustahik.$fileExtension';
  //     imagedata = base64Encode(imagepath.readAsBytesSync());
  //     print(imagepath);
  //     print("nama file " + imagename);
  //     print(imagedata);
  //   });
  // }

  Future<void> getImage() async {
    var getimage = await imagePicker.pickImage(source: ImageSource.gallery);

    if (getimage != null) {
      setState(() {
        imagepath = File(getimage.path);
      });

      // Membaca file gambar dan mengompres
      List<int> originalBytes = await imagepath.readAsBytes();
      img.Image image = img.decodeImage(originalBytes);

      if (image != null) {
        // Mengompres gambar
        img.Image resizedImage =
            img.copyResize(image, width: 800); // Ganti sesuai kebutuhan
        List<int> compressedBytes =
            img.encodeJpg(resizedImage, quality: 85); // Kualitas 85

        // Simpan gambar yang dikompres ke file baru
        File compressedFile = File(
            '${imagepath.parent.path}/compressed_${imagepath.uri.pathSegments.last}');
        compressedFile.writeAsBytesSync(compressedBytes);

        // Konversi ke base64
        imagedata = base64Encode(compressedFile.readAsBytesSync());
        imagename =
            'compressed_${namaMus}_MaalMustahik.${getimage.path.split('.').last}';

        print(compressedFile);
        print("Nama file: $imagename");
        print("Base64 Data: $imagedata");
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0,
        leading: IconButton(
          icon: Icon(Icons.arrow_back, color: Colors.black),
          onPressed: () {
            Navigator.of(context).pop();
          },
        ),
        title: Text(
          'Pembagian Zakat Maal',
          style: TextStyle(color: Colors.black),
        ),
      ),
      body: ListView(
        padding: const EdgeInsets.all(16.0),
        children: [
          // Nominal Input Section
          Text('Masukkan Nominal Tunai Zakat\nyang dibagikan'),
          SizedBox(height: 8),
          TextField(
            controller: _nominalController,
            decoration: InputDecoration(
                prefixIcon: Padding(
                  padding: const EdgeInsets.only(left: 8.0, top: 8, bottom: 8),
                  child: Text('Rp'),
                ),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                )),
            keyboardType: TextInputType.number,
            inputFormatters: [CurrencyTextInputFormatter()],
          ),
          SizedBox(height: 8),
          Text('Mohon isi nominal zakat'),
          SizedBox(height: 16),

          // Nominal Buttons Section
          GridView.count(
            crossAxisCount: 3,
            shrinkWrap: true,
            crossAxisSpacing: 8,
            mainAxisSpacing: 8,
            childAspectRatio: 2,
            physics: NeverScrollableScrollPhysics(),
            children: [
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("40000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("80000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("120000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("160000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("200000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("250000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("300000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("500000"), 0)}'),
              _buildNominalButton(
                  '${CurrencyFormat.convertToIdr(int.tryParse("1000000"), 0)}'),
            ],
          ),
          SizedBox(height: 50),

          // Mustahik Search Section
          Text('Profil Mustahik (Orang yang diberi)'),
          SizedBox(height: 16), // Adjust the spacing as needed

          ElevatedButton(
            onPressed: () {
              _showDialog();
            },
            style: ElevatedButton.styleFrom(
              backgroundColor: DesignCourseAppTheme.green,
              minimumSize: Size(double.infinity, 50),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(10),
              ),
            ),
            child: Text('Tetapkan Mustahik'),
          ),
          SizedBox(height: 16),

          TextField(
            enabled: false,
            controller: _selectMustahik,
            decoration: InputDecoration(
                label: namaMus != null
                    ? Text.rich(
                        TextSpan(
                          children: [
                            TextSpan(
                              text: "Mustahik : ",
                              style: TextStyle(
                                  color: Colors
                                      .grey), // Optional: Customize the default style
                            ),
                            TextSpan(
                              text: "${namaMus}",
                              style: TextStyle(
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green,
                              ), // Bold style for selectedValue
                            ),
                            TextSpan(text: "\n"),
                            TextSpan(
                              text: "\nAlamat : ",
                              style: TextStyle(
                                  color: Colors
                                      .grey), // Optional: Customize the default style
                            ),
                            TextSpan(
                              text: "${alamat_mus}",
                              style: TextStyle(
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green,
                              ), // Bold style for selectedValue
                            ),
                          ],
                        ),
                      )
                    : Text("Mustahik belum ditetapkan"),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                )),
          ),
          // Mustahik Search Section
          SizedBox(height: 50),
          Text('Profil Amil (Petugas Zakat)'),
          SizedBox(height: 16), // Adjust the spacing as needed

          ElevatedButton(
            onPressed: () {
              _showDialogAmil();
            },
            style: ElevatedButton.styleFrom(
              backgroundColor: DesignCourseAppTheme.green,
              minimumSize: Size(double.infinity, 50),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(10),
              ),
            ),
            child: Text('Tetapkan Amil'),
          ),
          SizedBox(height: 16),

          TextField(
            enabled: false,
            controller: _selectAmil,
            decoration: InputDecoration(
                label: namaAmil != null
                    ? Text.rich(
                        TextSpan(
                          children: [
                            TextSpan(
                              text: "Amil : ",
                              style: TextStyle(
                                  color: Colors
                                      .grey), // Optional: Customize the default style
                            ),
                            TextSpan(
                              text: "${namaAmil}",
                              style: TextStyle(
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green,
                              ), // Bold style for selectedValue
                            ),
                            TextSpan(text: "\n"),
                            TextSpan(
                              text: "\nAlamat : ",
                              style: TextStyle(
                                  color: Colors
                                      .grey), // Optional: Customize the default style
                            ),
                            TextSpan(
                              text: "${alamatAmil}",
                              style: TextStyle(
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green,
                              ), // Bold style for selectedValue
                            ),
                          ],
                        ),
                      )
                    : Text("Amil belum ditetapkan"),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                )),
          ),
          SizedBox(
            height: 20,
          ),
          SizedBox(
            // height: 20,
            height: 200,
            width: 250,
            child: imagepath == null
                ? Text("Foto Bukti Belum dipilih")
                : Image.file(imagepath),
          ),

          SizedBox(
            height: 20,
          ),
          ElevatedButton(
            onPressed: () {
              getImage();
            },
            child: Text("Pilih Foto Bukti Pembagian Zakat"),
            style: ElevatedButton.styleFrom(
              shadowColor: Colors.black,
              primary: DesignCourseAppTheme.green,
            ),
          ),

          SizedBox(height: 50), // Add space here to avoid using Spacer

          // Total Price and Pay Button
          // Row(
          //   mainAxisAlignment: MainAxisAlignment.spaceBetween,
          //   children: [
          //     Text('Total Berzakat Fitrah(Tunai)',
          //         style: TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
          //     Text(_nominalController.text,
          //         style: TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
          //   ],
          // ),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Flexible(
                child: Text('Total Bagi Zakat Maal(Uang)',
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
              Flexible(
                child: Text(_nominalController.text,
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
            ],
          ),
          SizedBox(height: 16),
          TextFormField(
            controller: _dateController,
            decoration: InputDecoration(labelText: 'Tanggal Pembagian'),
            readOnly: true,
            onTap: () async {
              DateTime pickedDate = await showDatePicker(
                context: context,
                initialDate: DateTime.now(),
                firstDate: DateTime(2023),
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
          SizedBox(height: 50),
          ElevatedButton(
            onPressed: () async {
              if (addDataZakat == null) {
                print("No Input");
              } else {
                if (_nominalController.text != "Rp 0" &&
                    _nominalController.text != "") {
                  await testGetLast();
                  await addDataZakat();
                  KirimGambar();

                  // _generateTransactionId();
                  setState(() {});
                }
              }

              Navigator.of(context).pushReplacement(MaterialPageRoute(
                  builder: (context) => DesignCourseHomeScreen()));
              await CoolAlert.show(
                context: context,
                type: CoolAlertType.success,
                title: "Bagi Zakat",
                text: "Berhasil didata!",
                confirmBtnText: "Ok",
                confirmBtnColor: DesignCourseAppTheme.green,
              );
            },
            style: ElevatedButton.styleFrom(
              backgroundColor: DesignCourseAppTheme.green,
              minimumSize: Size(double.infinity, 50),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(10),
              ),
            ),
            child: Text('Data Pembagian'),
          ),
          SizedBox(height: 50),
        ],
      ),
    );
  }

  Widget _buildNominalButton(String text) {
    final bool isSelected = _selectedNominal == text;
    return Container(
      width: double.infinity,
      child: ElevatedButton(
        onPressed: () {
          _updateNominal(text);
        },
        style: ElevatedButton.styleFrom(
          primary: isSelected
              ? DesignCourseAppTheme.green
              : Colors.white, // Blue if selected, white otherwise
          onPrimary: isSelected
              ? Colors.white
              : Colors.black, // White text if selected, black otherwise
          side: BorderSide(color: DesignCourseAppTheme.green), // Border color
          padding: EdgeInsets.symmetric(vertical: 12),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(10),
          ),
        ),
        child: Text(text),
      ),
    );
  }
}
