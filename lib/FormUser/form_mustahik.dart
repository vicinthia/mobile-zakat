import 'package:cool_alert/cool_alert.dart';
import 'package:flutter/material.dart';
import 'package:intl/intl.dart';
import 'package:shared_preferences/shared_preferences.dart';
import 'package:zakat_mobile/FormUser/list_mustahik.dart';

import '../api/link.dart';
import '../design_course/design_course_app_theme.dart';
import 'package:http/http.dart' as http;
import 'package:image/image.dart' as img;

import '../design_course/home_design_course.dart';
import 'list_muzakki.dart';
import 'package:image_picker/image_picker.dart';

import 'dart:convert';
import 'dart:io';

class formMustahik extends StatefulWidget {
  @override
  _formMustahikState createState() => _formMustahikState();
}

class _formMustahikState extends State<formMustahik> {
  final _formKey = GlobalKey<FormState>();
  String _selectedState;
  String _selectedKategori;
  DateTime _selectedDate;
  TextEditingController _dateController = TextEditingController();
  TextEditingController _namaController = TextEditingController();
  TextEditingController _alamatController = TextEditingController();
  TextEditingController _ketController = TextEditingController();
  TextEditingController _ktpController = TextEditingController();
  TextEditingController _kkController = TextEditingController();

  bool apiCallMade = false;
  @override
  void dispose() {
    _dateController.dispose();
    super.dispose();
  }

//192.168.3.233

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

    var url = http
        .post(Uri.parse(ApiConstants.baseUrl + "api/zakat/mustahik"), body: {
      "kode_mustahik": "Mus-${pluslastId}",
      "nama_mustahik": "${_namaController.text}",
      "jns_kel_mus": "${_selectedState}",
      "tgl_lahir_mus": "${_selectedDate}",
      "alamat_mus": "${alamat}",
      "ket_mustahik": "${_selectedKategori}",
    });
    setState(() {
      apiCallMade = true;
    });
  }

  Future<int> _getLast() async {
    try {
      final response = await http.get(
          Uri.parse(ApiConstants.baseUrl + 'api/zakat/lastIdMustahik/last'));

      if (response.statusCode == 200) {
        final data = jsonDecode(response.body);
        String kodeMus = data['kode_mustahik'].toString();

        // Menghapus "Aml-" menggunakan replaceAll
        String numericPart = kodeMus.replaceAll("Mus-", "");

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
  //     _transactionId = prefs.getInt('transactionIdMus') ?? 0;
  //   });
  // }

  // void _saveTransactionId(int newId) async {
  //   SharedPreferences prefs = await SharedPreferences.getInstance();
  //   await prefs.setInt('transactionIdMus', newId);
  // }

  // void _generateTransactionId() {
  //   setState(() {
  //     _transactionId++;
  //     _saveTransactionId(_transactionId);
  //   });
  // }

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

  File imagepath;
  File imagepathKK;
  String imagename;
  String imagedata;
  String imagenameKK;
  String imagedataKK;
  String kodeMustahik;

  ImagePicker imagePicker = new ImagePicker();

  Future<void> KirimGambar() async {
    if (pluslastId == null) {
      print('Error: pluslastId is null. Please run testGetLast() first.');
      return;
    }

    await Future.delayed(Duration(seconds: 1));
    kodeMustahik = "Mus-${pluslastId}"; // Set nilai kode_bagi
    try {
      String uri = ApiConstants.baseUrl + "api/zakat/uploadMustahik/save_data";
      var res = await http.post(
        Uri.parse(uri),
        body: {
          "kode_mustahik": kodeMustahik,
          "data": imagedata,
          "name": imagename,
          "data_kk": imagedataKK,
          "name_kk": imagenameKK,
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

  // Future<void> KirimGambar() async {
  //   try {
  //     String uri = ApiConstants.baseUrl + "imgupload_mustahik.php";
  //     var res = await http.post(Uri.parse(uri), body: {
  //       "kode_mustahik": "Muz-000${_transactionId + 1}",
  //       "data": imagedata,
  //       "name": imagename,
  //       "data_kk": imagedataKK,
  //       "name_kk": imagenameKK,
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

  DateTime tgl = new DateTime.now();
  // Future<void> getImage() async {
  //   var getimage = await imagePicker.pickImage(source: ImageSource.gallery);

  //   setState(() {
  //     imagepath = File(getimage.path);
  //     // imagename = getimage.path.split("/").last;
  //     String fileExtension = getimage.path.split('.').last;
  //     imagename = '${_namaController.text}_ktp.$fileExtension';
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
            'compressed_${_namaController.text}_ktp.${getimage.path.split('.').last}';

        print(compressedFile);
        print("Nama file: $imagename");
        print("Base64 Data: $imagedata");
      }
    }
  }

  // Future<void> getImageKK() async {
  //   var getimageKK = await imagePicker.pickImage(source: ImageSource.gallery);

  //   setState(() {
  //     imagepathKK = File(getimageKK.path);
  //     // imagenameKK = getimageKK.path.split("/").last;
  //     String fileExtensionKK = getimageKK.path.split('.').last;
  //     imagenameKK = '${_namaController.text}_kk.$fileExtensionKK';
  //     imagedataKK = base64Encode(imagepathKK.readAsBytesSync());
  //     print(imagepath);
  //     print(imagenameKK);
  //     print(imagedataKK);
  //   });
  // }

  Future<void> getImageKK() async {
    var getimageKK = await imagePicker.pickImage(source: ImageSource.gallery);

    if (getimageKK != null) {
      setState(() {
        imagepathKK = File(getimageKK.path);
      });

      // Membaca file gambar dan mengompres
      List<int> originalBytes = await imagepathKK.readAsBytes();
      img.Image image = img.decodeImage(originalBytes);

      if (image != null) {
        // Mengompres gambar
        img.Image resizedImage =
            img.copyResize(image, width: 800); // Ganti sesuai kebutuhan
        List<int> compressedBytes =
            img.encodeJpg(resizedImage, quality: 85); // Kualitas 85

        // Simpan gambar yang dikompres ke file baru
        File compressedFile = File(
            '${imagepathKK.parent.path}/compressed_${imagepathKK.uri.pathSegments.last}');
        compressedFile.writeAsBytesSync(compressedBytes);

        // Konversi ke base64
        imagedataKK = base64Encode(compressedFile.readAsBytesSync());
        imagenameKK =
            'compressed_${_namaController.text}_kk.${getimageKK.path.split('.').last}';

        print(compressedFile);
        print("Nama file: $imagenameKK");
        print("Base64 Data: $imagedataKK");
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Form Mustahik"),
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
                // TextFormField(
                //   controller: _ktpController,
                //   decoration: InputDecoration(labelText: 'Nomor KTP'),
                //   keyboardType: TextInputType.number,
                // ),
                SizedBox(
                  height: 20,
                ),
                SizedBox(
                  // height: 20,
                  height: 200,
                  width: 250,
                  child: imagepath == null
                      ? Text("Foto KTP Belum dipilih")
                      : Image.file(imagepath),
                ),

                SizedBox(
                  height: 20,
                ),
                ElevatedButton(
                  onPressed: () {
                    getImage();
                  },
                  child: Text("Pilih Foto KTP"),
                  style: ElevatedButton.styleFrom(
                    shadowColor: Colors.black,
                    primary: DesignCourseAppTheme.green,
                  ),
                ),

                // TextFormField(
                //   controller: _kkController,
                //   decoration: InputDecoration(labelText: 'Nomor KK'),
                //   keyboardType: TextInputType.number,
                // ),

                SizedBox(
                  height: 20,
                ),
                SizedBox(
                  // height: 20,
                  height: 200,
                  width: 250,
                  child: imagepathKK == null
                      ? Text("Foto KK Belum dipilih")
                      : Image.file(imagepathKK),
                ),

                SizedBox(
                  height: 20,
                ),
                ElevatedButton(
                  onPressed: () {
                    getImageKK();
                  },
                  child: Text("Pilih Foto KK"),
                  style: ElevatedButton.styleFrom(
                    shadowColor: Colors.black,
                    primary: DesignCourseAppTheme.green,
                  ),
                ),
                // ElevatedButton(
                //     onPressed: () {
                //       KirimGambar();
                //       CoolAlert.show(
                //           context: context,
                //           type: CoolAlertType.success,
                //           title: "Berhasil Upload",
                //           text: "Foto Terupload!",
                //           confirmBtnText: "Ok");
                //       // Navigator.of(context).push(MaterialPageRoute(
                //       //     builder: (BuildContext context) => wpKabBlitar()));
                //     },
                //     child: Text("Upload Foto")),
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
                // TextFormField(
                //   controller: _ketController,
                //   decoration: InputDecoration(labelText: 'Keterangan Muzakki'),
                // ),

                DropdownButtonFormField<String>(
                  decoration:
                      InputDecoration(labelText: 'Kategori Penerima Zakat'),
                  items: _buildDropDownItems([
                    'Fakir',
                    'Miskin',
                    'Amil',
                    'Mualaf',
                    'Budak',
                    'Orang yang Berhutang',
                    'Orang yang Berjihad',
                    'Anak Jalanan'
                  ]),
                  onChanged: (value) {
                    setState(() {
                      _selectedKategori = value;
                    });
                  },
                ),

                SizedBox(height: 50),

                Center(
                  child: Container(
                    height: 60,
                    width: 200,
                    child: ElevatedButton(
                      onPressed: () async {
                        if (!apiCallMade) {
                          showLoadingDialog(
                              context); // Menampilkan dialog loading
                          try {
                            await testGetLast();
                            await addPost();
                            await KirimGambar();
                            // _generateTransactionId();
                          } finally {
                            Navigator.of(context)
                                .pop(); // Menutup dialog setelah KirimGambar selesai
                          }
                        } else {
                          print("data tidak masuk");
                        }
                        Navigator.of(context).push(MaterialPageRoute(
                            builder: (context) => formMustahik()));
                        await CoolAlert.show(
                            context: context,
                            type: CoolAlertType.success,
                            title: "Berhasil Mendata",
                            text: "Data Mustahik Tersimpan!",
                            confirmBtnText: "Ok");
                      },
                      child: Text("Simpan Data Mustahik"),
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
                SizedBox(height: 50),
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
              MaterialPageRoute(builder: (context) => listMustahik()));
        },
        label: Text("List Mustahik"),
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
