import 'dart:convert';
import 'dart:io';

import 'package:cool_alert/cool_alert.dart';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:zakat_mobile/Transaksi/pop_muzakki.dart';
import 'package:zakat_mobile/Transaksi/pop_amil.dart';

import '../Custom/rp_format.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;
import 'package:image/image.dart' as img;

import '../design_course/home_design_course.dart';
import '../printTransaksi/printFidyah.dart';

class transaksiFidyah extends StatefulWidget {
  final nominalFidyah;
  transaksiFidyah({this.nominalFidyah});
  @override
  State<transaksiFidyah> createState() => _transaksiFidyahState();
}

class _transaksiFidyahState extends State<transaksiFidyah> {
  final TextEditingController _nominalController = TextEditingController();
  final TextEditingController _selectMuzakki = TextEditingController();
  final TextEditingController _selectAmil = TextEditingController();
  String _selectedNominal = ''; // Track selected nominal value

  String namaMuz;
  String alamat;
  String namaAmil;
  String alamatAmil;
  String kodeMuz;
  String kodeAmil;

  void _showDialog() async {
    final result = await showDataDialog(context);
    if (result != null) {
      setState(() {
        namaMuz = result['nama_muzakki'];
        alamat = result['alamat'];
        kodeMuz = result['kode_muzakki'];
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
      _selectedNominal = value;
    });
  }

  @override
  void dispose() {
    _nominalController.dispose(); // Dispose the controller when not needed
    super.dispose();
  }

  String formatted;
  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    _nominalController.addListener(() {
      setState(() {});
    });
    // _loadTransactionId();
    _loadTransactionTf();
    // Ambil tanggal, jam, menit, dan detik
    int year = tglTransaksi.year;
    int month = tglTransaksi.month;
    int day = tglTransaksi.day;
    int hour = tglTransaksi.hour;
    int minute = tglTransaksi.minute;
    int second = tglTransaksi.second;

// Untuk output dalam format tertentu, Anda bisa menggunakan toString() atau String interpolation
    String formatted = "$year-$month-$day $hour:$minute:$second";
  }

  DateTime tglTransaksi = DateTime.now();
  DateTime tgl_transaksi = new DateTime.now();

  TextEditingController _controller = TextEditingController();
  List<dynamic> _results = []; // Use dynamic for flexibility

  void addDataZakat() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    var url = http.post(
        Uri.parse(ApiConstants.baseUrl + "api/zakat/transaksizakat"),
        body: {
          "kode_zakat": "Zkt-${pluslastId}",
          "kode_muzakki": kodeMuz,
          "total_zakat":
              "${int.tryParse(_nominalController.text) * widget.nominalFidyah}",
          "kode_amil": kodeAmil,
          "tgl_zakat": "$tgl_transaksi",
          "kode_kategori": "CAT-05"
        });
  }

  Future<int> _getLast() async {
    try {
      final response = await http
          .get(Uri.parse(ApiConstants.baseUrl + 'api/zakat/lastIdZakat/last'));

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        String kodeZakat = data['kode_zakat'].toString();

        // Menghapus "Aml-" menggunakan replaceAll
        String numericPart = kodeZakat.replaceAll("Zkt-", "");

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

  int _transactionTf = 0;

  void _loadTransactionTf() async {
    SharedPreferences prefs = await SharedPreferences.getInstance();
    setState(() {
      _transactionTf = prefs.getInt('buktiTf') ?? 0;
    });
  }

  void _saveTransactionTf(int newId) async {
    SharedPreferences prefs = await SharedPreferences.getInstance();
    await prefs.setInt('buktiTf', newId);
  }

  void _generateTransactionTf() {
    setState(() {
      _transactionTf++;
      _saveTransactionTf(_transactionTf);
    });
  }

  Future qrisimage() async {
    var url = ApiConstants.baseUrl + "viewfoto_qris.php";
    var response = await http.get(Uri.parse(url));
    return json.decode(response.body);
  }

  File imagepath;
  String imagename;
  String imagedata;
  ImagePicker imagePicker = new ImagePicker();

  // Future<void> KirimGambar() async {
  //   try {
  //     String uri = ApiConstants.baseUrl + "imgupload_buktitf.php";
  //     var res = await http.post(Uri.parse(uri), body: {
  //       "kode_muzakki": kodeMuz,
  //       "data": imagedata,
  //       "name": imagename,
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
  // }

  Future<void> KirimGambar() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    try {
      String uri = ApiConstants.baseUrl + "api/zakat/uploadTransfer/save_data";
      var res = await http.post(
        Uri.parse(uri),
        body: {
          "kode_muzakki": kodeMuz,
          "data": imagedata,
          "name": imagename,
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
  //   var getimage = await imagePicker.pickImage(source: ImageSource.camera);

  //   setState(() {
  //     imagepath = File(getimage.path);
  //     // imagename = getimage.path.split("/").last;
  //     String fileExtension = getimage.path.split('.').last;
  //     imagename = '${kodeMuz + alamat}_qrisFidyah.$fileExtension';
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
            'Zkt-${pluslastId}_${kodeMuz + alamat}_qrisFidyah.${getimage.path.split('.').last}';

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
          'Zakat Fidyah',
          style: TextStyle(color: Colors.black),
        ),
      ),
      body: ListView(
        padding: const EdgeInsets.all(16.0),
        children: [
          // Nominal Input Section
          Text('Masukkan jumlah hari tidak puasa'),
          SizedBox(height: 8),
          TextField(
            controller: _nominalController,
            decoration: InputDecoration(
                prefixIcon: Padding(
                  padding: const EdgeInsets.only(left: 8.0, top: 8, bottom: 8),
                ),
                hintText:
                    "/ Hari x ${CurrencyFormat.convertToIdr(widget.nominalFidyah, 0)}",
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                )),
            keyboardType: TextInputType.number,
          ),

          SizedBox(height: 50),

          // Muzakki Search Section
          Text('Profil Muzakki (Orang Yang Berzakat)'),
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
            child: Text('Tetapkan Muzakki'),
          ),
          SizedBox(height: 16),

          TextField(
            enabled: false,
            controller: _selectMuzakki,
            decoration: InputDecoration(
                label: namaMuz != null
                    ? Text.rich(
                        TextSpan(
                          children: [
                            TextSpan(
                              text: "Muzakki : ",
                              style: TextStyle(
                                  color: Colors
                                      .grey), // Optional: Customize the default style
                            ),
                            TextSpan(
                              text: "${namaMuz}",
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
                              text: "${alamat}",
                              style: TextStyle(
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green,
                              ), // Bold style for selectedValue
                            ),
                          ],
                        ),
                      )
                    : Text("Muzakki belum ditetapkan"),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
                focusedBorder: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                  borderSide: BorderSide(color: DesignCourseAppTheme.green),
                )),
          ),
          // Muzakki Search Section
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

          SizedBox(height: 50), // Add space here to avoid using Spacer

          Text("Metode Pembayaran :"),
          SizedBox(height: 20),
          Row(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Column(
                children: [
                  _buildNominalButton('CASH'),
                ],
              ),
              SizedBox(
                width: 50,
              ),
              Column(
                children: [
                  _buildNominalButton('QRIS'),
                ],
              ),
            ],
          ),

          SizedBox(height: 20),
          _selectedNominal == "QRIS"
              ? SizedBox(
                  height: 400,
                  child: FutureBuilder(
                    future: qrisimage(),
                    builder: ((context, snapshot) {
                      return snapshot.hasData
                          ? ListView.builder(
                              itemCount: snapshot.data.length,
                              itemBuilder: (context, index) {
                                List list = snapshot.data;
                                return Card(
                                  child: ListTile(
                                    title: Container(
                                        width: 300,
                                        height: 350,
                                        child: Image.network(
                                          ApiConstants.baseUrl +
                                              "${list[index]['qris']}",
                                        )),
                                  ),
                                );
                              })
                          : Center(
                              child: CircularProgressIndicator(),
                            );
                    }),
                  ),
                )
              : Container(),
          SizedBox(height: 20),
          _selectedNominal == "QRIS"
              ? SizedBox(
                  // height: 20,
                  height: 200,
                  width: 250,
                  child: imagepath == null
                      ? Text("Foto Bukti Belum dipilih")
                      : Image.file(imagepath),
                )
              : Container(),
          SizedBox(height: 20),
          _selectedNominal == "QRIS"
              ? ElevatedButton(
                  onPressed: () {
                    getImage();
                  },
                  child: Text("Ambil Foto Bukti Transfer"),
                  style: ElevatedButton.styleFrom(
                    shadowColor: Colors.black,
                    primary: DesignCourseAppTheme.green,
                  ),
                )
              : Container(),
          SizedBox(height: 50),
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Flexible(
                child: Text('Total Fidyah',
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
              Flexible(
                child: Text(
                    _nominalController.text != ""
                        ? "${CurrencyFormat.convertToIdr(int.tryParse(_nominalController.text) * widget.nominalFidyah, 0)}"
                        : _nominalController.text,
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
              // CurrencyTextInputFormatter();
            ],
          ),
          SizedBox(height: 50),
          SizedBox(height: 50),
          ElevatedButton(
            onPressed: () async {
              if (_selectedNominal == "QRIS") {
                KirimGambar();

                setState(() {});
              }
              if (addDataZakat == null) {
                print("No Input");
              } else {
                await testGetLast();
                await addDataZakat();

                // _generateTransactionId();
                setState(() {});
              }

              Navigator.of(context).pushReplacement(MaterialPageRoute(
                  builder: (context) => PrintFidyah(
                        kode_zakat: "Zkt-${pluslastId}",
                        nama_muz: namaMuz,
                        alamat_muz: alamat,
                        nama_amil: namaAmil,
                        tgl_zakat: "${tgl_transaksi}",
                        total_zakat:
                            "${int.tryParse(_nominalController.text) * widget.nominalFidyah}",
                        nominal_fidyah: widget.nominalFidyah,
                        hari_fidyah: _nominalController.text,
                      )));
              await CoolAlert.show(
                context: context,
                type: CoolAlertType.success,
                title: "Transaksi Zakat",
                text: "Berhasil dizakatkan!",
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
            child: Text('Bayar Sekarang'),
          ),
          SizedBox(height: 50),
        ],
      ),
    );
  }

  Widget _buildNominalButton(String text) {
    final bool isSelected = _selectedNominal == text;
    return ElevatedButton(
      onPressed: () {
        _updateNominal(text);
      },
      style: ElevatedButton.styleFrom(
        fixedSize: Size(
          MediaQuery.of(context).size.width * 0.3, // 40% dari lebar layar
          MediaQuery.of(context).size.height * 0.08, // 8% dari tinggi layar
        ),
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
    );
  }
}
