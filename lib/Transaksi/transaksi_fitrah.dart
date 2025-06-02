import 'dart:convert';
import 'dart:io';

import 'package:cool_alert/cool_alert.dart';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:zakat_mobile/Transaksi/pop_muzakki.dart';
import 'package:zakat_mobile/Transaksi/pop_amil.dart';
import 'package:zakat_mobile/printTransaksi/printFitrah.dart';

import '../Custom/rp_format.dart';
import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;
import 'package:image/image.dart' as img;

import '../design_course/home_design_course.dart';

class transaksiFitrah extends StatefulWidget {
  final nominalFitrah;
  transaksiFitrah({this.nominalFitrah});
  @override
  State<transaksiFitrah> createState() => _transaksiFitrahState();
}

class _transaksiFitrahState extends State<transaksiFitrah> {
  final TextEditingController _nominalController = TextEditingController();
  final TextEditingController _kiloController = TextEditingController();
  final TextEditingController _selectMuzakki = TextEditingController();
  final TextEditingController _selectAmil = TextEditingController();
  String _selectedNominal = ''; // Track selected nominal value
  String _selectedPembayaran = '';

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
      _selectedNominal = value; // Set the selected value
      // String cleanedValue = value.replaceAll('Rp', '');
      _nominalController.text = _selectedNominal;
    });
  }

  void _updatePembayaran(String value) {
    setState(() {
      _selectedPembayaran = value;
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
    // testGetLast();
  }

  DateTime tgl_transaksi = new DateTime.now();
  TextEditingController _controller = TextEditingController();
  List<dynamic> _results = []; // Use dynamic for flexibility
  String kkategori;

  Future<void> addDataZakat() async {
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
              "${_nominalController.text.replaceAll('Rp', '').replaceAll('.', '')}",
          "kode_amil": kodeAmil,
          "tgl_zakat": "$tgl_transaksi",
          "kode_kategori": "CAT-02"
        });
  }

  void addDataZakatBeras() async {
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
          "total_zakat": "${_kiloController.text}",
          "kode_amil": kodeAmil,
          "tgl_zakat": "$tgl_transaksi",
          "kode_kategori": "CAT-01"
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
  Future<void> testGetLast() async {
    try {
      lastId = await _getLast();
      pluslastId = lastId + 1;
      print('Last transaction ID: $lastId');
      print('Last transaction ID: $pluslastId');
    } catch (e) {
      print('Error: $e');
    }
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
            'Zkt-${pluslastId}_${kodeMuz + alamat}_qrisFitrah.${getimage.path.split('.').last}';

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
          'Zakat Fitrah',
          style: TextStyle(color: Colors.black),
        ),
      ),
      body: ListView(
        padding: const EdgeInsets.all(16.0),
        children: [
          // Nominal Input Section
          Text('Masukkan Besaran Kg Beras'),
          SizedBox(height: 8),
          TextField(
            controller: _kiloController,
            decoration: InputDecoration(
              prefixIcon: Padding(
                padding: const EdgeInsets.only(left: 8.0, top: 8, bottom: 8),
                child: Text('Kg'),
              ),
              hintText: "0",
              border: OutlineInputBorder(
                borderRadius: BorderRadius.circular(10),
              ),
              focusedBorder: OutlineInputBorder(
                borderRadius: BorderRadius.circular(10),
                borderSide: BorderSide(color: DesignCourseAppTheme.green),
              ),
            ),
            keyboardType: TextInputType.number,
            // inputFormatters: [CurrencyTextInputFormatter()],
          ),
          SizedBox(height: 8),
          Text(
            'Atau',
            style: TextStyle(
                color: DesignCourseAppTheme.green, fontWeight: FontWeight.bold),
          ),
          SizedBox(height: 8),
          Text('Masukkan Nominal Tunai Zakat'),
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
                  _buildPembayaranButton('CASH'),
                ],
              ),
              SizedBox(
                width: 50,
              ),
              Column(
                children: [
                  _buildPembayaranButton('QRIS'),
                ],
              ),
            ],
          ),

          SizedBox(height: 20),
          _selectedPembayaran == "QRIS"
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
          _selectedPembayaran == "QRIS"
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
          _selectedPembayaran == "QRIS"
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
          SizedBox(height: 50), // Add space here to avoid using Spacer

          // Total Price and Pay Button
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Flexible(
                child: Text('Total Berzakat Fitrah(Tunai)',
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
          Row(
            mainAxisAlignment: MainAxisAlignment.spaceBetween,
            children: [
              Flexible(
                child: Text('Total Berzakat Fitrah(Beras)',
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
              Flexible(
                child: Text(
                    _kiloController.text != ""
                        ? _kiloController.text + " Kg"
                        : "0 Kg",
                    style:
                        TextStyle(fontWeight: FontWeight.bold, fontSize: 20)),
              ),
            ],
          ),

          SizedBox(height: 50),

          SizedBox(height: 50),
          ElevatedButton(
            onPressed: () async {
              if (_selectedPembayaran == "QRIS") {
                KirimGambar();
                setState(() {});
              }
              if (addDataZakatBeras == null) {
                print("No Input");
              } else {
                if (_kiloController.text != "0" &&
                    _kiloController.text != "" &&
                    _nominalController.text != "Rp 0" &&
                    _nominalController.text != "" &&
                    _nominalController.text.isNotEmpty) {
                  await testGetLast();
                  await addDataZakatBeras();

                  // int currentLastId = pluslastId;

                  // pluslastId = currentLastId + 1;
                  // print("id akhir ${pluslastId}");
                  await testGetLast();
                  await addDataZakat();
                } else if (_kiloController.text != "0" &&
                    _kiloController.text != "") {
                  await testGetLast();
                  await addDataZakatBeras();
                }
              }

              if (addDataZakat == null) {
                print("No Input");
              } else {
                if (_nominalController.text != "Rp 0" &&
                    _nominalController.text != "") {
                  await testGetLast();
                  await addDataZakat();
                }
              }

              Navigator.of(context).pushReplacement(MaterialPageRoute(
                  builder: (context) => PrintFitrah(
                        kode_zakat: "Zkt-${pluslastId}",
                        nama_muz: namaMuz,
                        alamat_muz: alamat,
                        nama_amil: namaAmil,
                        tgl_zakat: "${tgl_transaksi}",
                        total_zakatUang:
                            "${int.tryParse(_nominalController.text.replaceAll('Rp', '').replaceAll('.', ''))}",
                        total_zakatBeras: _kiloController.text,
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
          SizedBox(
            height: 50,
          )
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

  Widget _buildPembayaranButton(String text) {
    final bool isSelected = _selectedPembayaran == text;

    return ElevatedButton(
      onPressed: () {
        _updatePembayaran(text);
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
