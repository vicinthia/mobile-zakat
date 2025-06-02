import 'package:flutter/material.dart';
import 'package:zakat_mobile/Transaksi/transaksi_fidyah.dart';

import '../Custom/rp_format.dart';
import '../design_course/design_course_app_theme.dart';

class ZakatCalculator extends StatefulWidget {
  final selectedZakatType;
  final nominalFidyah;
  final nominalFitrah;
  final nominalEmas;
  ZakatCalculator(
      {this.selectedZakatType,
      this.nominalFidyah,
      this.nominalFitrah,
      this.nominalEmas});
  @override
  _ZakatCalculatorState createState() => _ZakatCalculatorState();
}

class _ZakatCalculatorState extends State<ZakatCalculator> {
  String selectedZakatType;

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    selectedZakatType = widget.selectedZakatType ?? "Fidyah";
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
          'Kalkulator Zakat',
          style: TextStyle(color: Colors.black),
        ),
      ),
      body: Column(
        children: [
          // Icon selection row with padding
          Padding(
            padding:
                const EdgeInsets.symmetric(horizontal: 20.0, vertical: 40.0),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Spacer(flex: 1),
                zakatIcon('Zakat Maal', Icons.account_balance_wallet),
                Spacer(flex: 1),
                zakatIcon('Zakat Fitrah', Icons.money),
                Spacer(flex: 1),
                zakatIcon('Fidyah', Icons.volunteer_activism),
                Spacer(flex: 1),
              ],
            ),
          ),
          SizedBox(height: 20),
          // Display different widget based on selected type
          Expanded(
              child: zakatWidget(selectedZakatType, widget.nominalFidyah,
                  widget.nominalFitrah, widget.nominalEmas)),
        ],
      ),
    );
  }

  Widget zakatIcon(String type, IconData icon) {
    return GestureDetector(
      onTap: () {
        setState(() {
          selectedZakatType = type;
        });
      },
      child: Column(
        children: [
          Icon(
            icon,
            size: 50,
            color: selectedZakatType == type
                ? DesignCourseAppTheme.green
                : Colors.grey,
          ),
          Text(type),
        ],
      ),
    );
  }

  Widget zakatWidget(
      String type, int nominalFidyah, int nominalFitrah, int nominalEmas) {
    switch (type) {
      case 'Zakat Maal':
        return MaalWidget(nominalEmas: nominalEmas);
      case 'Zakat Fitrah':
        return FitrahWidget(nominalFitrah: nominalFitrah);
      case 'Fidyah':
      default:
        return FidyahWidget(
          nominalFidyah: nominalFidyah,
        );
    }
  }
}

class MaalWidget extends StatefulWidget {
  final nominalEmas;
  MaalWidget({this.nominalEmas});
  @override
  State<MaalWidget> createState() => _MaalWidgetState();
}

class _MaalWidgetState extends State<MaalWidget> {
  TextEditingController _Harta = new TextEditingController();
  TextEditingController _HartaBersih = new TextEditingController();
  TextEditingController _Hutang = new TextEditingController();
  TextEditingController _Harga = new TextEditingController();
  TextEditingController totalNisabController = new TextEditingController();

  bool showButton = false;
  bool showCard = false;

  String hitung;
  String hargaberas;
  String beras;
  String Maal;
  String Zakat;
  String minBersih;

  clearValues() {
    setState(() {
      _Harta.text = '';
      _Hutang.text = '';
      _HartaBersih.text = '';
      totalNisabController.text = '';
    });
  }

  @override
  void dispose() {
    _Harta.dispose();
    _Hutang.dispose();
    _HartaBersih.dispose();
    totalNisabController.dispose();
    super.dispose();
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    // _Harga.text = '40000';
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: const EdgeInsets.only(top: 40, left: 20, right: 24),
        child: Form(
          child: Column(
            children: [
              Align(
                alignment: Alignment.centerLeft,
                child: Text(
                  'Maal',
                  style: TextStyle(
                      fontSize: 22,
                      fontWeight: FontWeight.bold,
                      color: DesignCourseAppTheme.green),
                ),
              ),
              SizedBox(height: 50),
              Column(
                children: [
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Total Harta',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    controller: _Harta,
                    decoration: InputDecoration(
                        prefixIcon: Padding(
                          padding: const EdgeInsets.only(
                              left: 8.0, top: 8, bottom: 8),
                        ),
                        hintText: "Masukkan total harta",
                        border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                        ),
                        focusedBorder: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                          borderSide:
                              BorderSide(color: DesignCourseAppTheme.green),
                        )),
                    keyboardType: TextInputType.number,
                    inputFormatters: [CurrencyTextInputFormatter()],
                  ),
                  SizedBox(height: 20),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Total Hutang',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    controller: _Hutang,
                    decoration: InputDecoration(
                        prefixIcon: Padding(
                          padding: const EdgeInsets.only(
                              left: 8.0, top: 8, bottom: 8),
                        ),
                        hintText:
                            "Masukkan hutang/kewajiban yang harus dibayar",
                        border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                        ),
                        focusedBorder: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                          borderSide:
                              BorderSide(color: DesignCourseAppTheme.green),
                        )),
                    keyboardType: TextInputType.number,
                    inputFormatters: [CurrencyTextInputFormatter()],
                  ),
                  SizedBox(
                    height: 30,
                  ),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Nisab (85 gram Emas)',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      '1 gram = ${CurrencyFormat.convertToIdr(widget.nominalEmas, 0)}',
                    ),
                  ),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      '85 gram = 85 x ${CurrencyFormat.convertToIdr(widget.nominalEmas, 0)} = ${CurrencyFormat.convertToIdr(85 * widget.nominalEmas, 0)}',
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    controller: _HartaBersih,
                    decoration: InputDecoration(
                      prefixIcon: RichText(
                        text: TextSpan(
                          children: [
                            TextSpan(
                              text: _Harta.text != ""
                                  ? "Harta Bersih : ${CurrencyFormat.convertToIdr(int.tryParse(_Harta.text.replaceAll('Rp', '').replaceAll('.', '')) - int.tryParse(_Hutang.text.replaceAll('Rp', '').replaceAll('.', '')), 0)}"
                                  : "Nominal Harta/Hutang tidak valid",
                              style: TextStyle(
                                  fontWeight: FontWeight.bold,
                                  color: Colors.black,
                                  fontSize: 20 // Set the color as needed
                                  ),
                            ),
                          ],
                        ),
                      ),
                    ),
                    keyboardType: TextInputType.number,
                    inputFormatters: [CurrencyTextInputFormatter()],
                  ),
                  SizedBox(height: 20),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Cek Nisab',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    decoration: InputDecoration(
                      prefixIcon: RichText(
                        text: TextSpan(
                          children: [
                            TextSpan(
                              text: (minBersih != null &&
                                      int.tryParse(minBersih) != null &&
                                      int.tryParse(minBersih) >=
                                          85 * widget.nominalEmas)
                                  ? "Harta Telah Mencapai / Melebihi Nisab\nZakat maal ini perlu dikeluarkan setelah satu tahun (haul)"
                                  : "Harta Belum Mencapai Nisab\nMaka harta tidak wajib dizakati",
                              style: TextStyle(
                                  fontWeight: FontWeight.bold,
                                  color: Colors.black,
                                  fontSize: 20 // Set the color as needed
                                  ),
                            ),
                          ],
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 20),
                  (minBersih != null &&
                          int.tryParse(minBersih) != null &&
                          int.tryParse(minBersih) >= 85 * widget.nominalEmas)
                      ? Align(
                          alignment: Alignment.centerLeft,
                          child: Text(
                            'Total Zakat',
                            style: TextStyle(
                                fontSize: 22,
                                fontWeight: FontWeight.bold,
                                color: DesignCourseAppTheme.green),
                          ),
                        )
                      : Container(),
                  SizedBox(height: 20),
                  (minBersih != null &&
                          int.tryParse(minBersih) != null &&
                          int.tryParse(minBersih) >= 85 * widget.nominalEmas)
                      ? TextField(
                          controller: totalNisabController,
                          decoration: InputDecoration(
                            prefixIcon: RichText(
                              text: TextSpan(
                                children: [
                                  TextSpan(
                                    text: Zakat != null &&
                                            int.tryParse(Zakat) != null
                                        ? "${CurrencyFormat.convertToIdr(int.tryParse(Zakat), 0)}"
                                        : "Nominal tidak valid",
                                    style: TextStyle(
                                        fontWeight: FontWeight.bold,
                                        color: Colors.black,
                                        fontSize: 20 // Set the color as needed
                                        ),
                                  ),
                                ],
                              ),
                            ),
                          ),
                          keyboardType: TextInputType.number,
                          inputFormatters: [CurrencyTextInputFormatter()],
                        )
                      : Container(),
                ],
              ),
              SizedBox(
                height: 30,
              ),
              showButton
                  ? Row(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: [
                        // SizedBox(
                        //   width: 100,
                        // ),
                        Center(
                          child: Container(
                            width: 100,
                            height: 40,
                            child: ElevatedButton(
                              onPressed: () async {
                                return showDialog(
                                  context: context,
                                  builder: (ctx) => AlertDialog(
                                    title: Text("Rumus Perhitungan"),
                                    content: Text((minBersih != null &&
                                            int.tryParse(minBersih) != null &&
                                            int.tryParse(minBersih) >=
                                                85 * widget.nominalEmas)
                                        ? "Harta Bersih : ${CurrencyFormat.convertToIdr((int.tryParse(_Harta.text.replaceAll('Rp', '').replaceAll('.', '')) ?? 0), 0)} - ${CurrencyFormat.convertToIdr((int.tryParse(_Hutang.text.replaceAll('Rp', '').replaceAll('.', '')) ?? 0), 0)} = ${CurrencyFormat.convertToIdr(int.tryParse(minBersih), 0)} \n\n Zakat : ${CurrencyFormat.convertToIdr(int.tryParse(minBersih), 0)} x 2,5% = ${CurrencyFormat.convertToIdr(int.tryParse(Zakat), 0)}"
                                        : "Harta Belum Mencapai Nisab\nMaka harta tidak wajib dizakati \n\nHarta Bersih dibawah nominal nisab (${CurrencyFormat.convertToIdr(85 * widget.nominalEmas, 0)})"),
                                    actions: <Widget>[
                                      ElevatedButton(
                                        onPressed: () {
                                          Navigator.of(ctx).pop();
                                        },
                                        child: Text("Ok"),
                                      ),
                                    ],
                                  ),
                                );
                              },
                              child: Text(
                                'INFO',
                              ),
                              style: ElevatedButton.styleFrom(
                                  //COLOR OF THE TEXT INSIDE THE BUTTON

                                  onPrimary: Colors.white,
                                  shape: RoundedRectangleBorder(
                                    borderRadius: BorderRadius.circular(20.0),
                                  ),
                                  primary: Colors.amber,
                                  textStyle: TextStyle(
                                    //Text inside button style
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.w600,
                                    fontFamily: 'poppins',
                                  )),
                            ),
                          ),
                        ),
                        SizedBox(
                          width: 8,
                        ),
                        Center(
                          child: Container(
                            width: 100,
                            height: 40,
                            child: ElevatedButton(
                              onPressed: () async {
                                // addData();
                                clearValues();
                              },
                              child: Text(
                                'HAPUS',
                              ),
                              style: ElevatedButton.styleFrom(
                                  //COLOR OF THE TEXT INSIDE THE BUTTON

                                  onPrimary: Colors.white,
                                  shape: RoundedRectangleBorder(
                                    borderRadius: BorderRadius.circular(20.0),
                                  ),
                                  primary: Colors.red,
                                  textStyle: TextStyle(
                                    //Text inside button style
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.w600,
                                    fontFamily: 'poppins',
                                  )),
                            ),
                          ),
                        ),
                        // Text(hitung.replaceAll(regex, ''))
                      ],
                    )
                  : Container(),
              SizedBox(
                height: 20,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Center(
                    child: Container(
                      width: 100,
                      height: 40,
                      child: ElevatedButton(
                        onPressed: () async {
                          setState(() {
                            // if (minBersih != null &&
                            //     int.tryParse(minBersih) != null &&
                            //     int.tryParse(minBersih) >=
                            //         85 * widget.nominalEmas) {

                            // }
                            showCard = !showCard;
                            showButton = !showButton;
                            minBersih =
                                "${CurrencyFormat.convertToIdr((int.tryParse(_Harta.text.replaceAll('Rp', '').replaceAll('.', '')) ?? 0) - (int.tryParse(_Hutang.text.replaceAll('Rp', '').replaceAll('.', '')) ?? 0), 0)}";
                            minBersih = minBersih
                                .replaceAll('Rp', '')
                                .replaceAll('.', '');
                            Zakat =
                                ((int.tryParse(minBersih) * 2.5 / 100).toInt())
                                    .toString();
                          });
                        },
                        child: Text(
                          'HITUNG',
                        ),
                        style: ElevatedButton.styleFrom(
                            //COLOR OF THE TEXT INSIDE THE BUTTON

                            onPrimary: Colors.white,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20.0),
                            ),
                            primary: DesignCourseAppTheme.green,
                            textStyle: TextStyle(
                              //Text inside button style
                              fontSize: 16.0,
                              fontWeight: FontWeight.w600,
                              fontFamily: 'poppins',
                            )),
                      ),
                    ),
                  ),
                ],
              ),
              SizedBox(
                height: 30,
              ),
              showCard
                  ? Center(
                      child: Card(
                        elevation: 50,
                        shadowColor: Colors.black,
                        color: Colors.greenAccent[100],
                        child: SizedBox(
                          width: MediaQuery.of(context).size.width * 0.8,
                          height: MediaQuery.of(context).size.height * 0.3,
                          child: Padding(
                            padding: const EdgeInsets.all(20.0),
                            child: Column(
                              children: [
                                const SizedBox(
                                  height: 10,
                                ),
                                Text(
                                  'Hasil Hitung Zakat Maal :',
                                  style: TextStyle(
                                    fontSize: 20,
                                    color: Colors.green[900],
                                    fontWeight: FontWeight.bold,
                                  ), //Textstyle
                                ), //Text
                                const SizedBox(
                                  height: 15,
                                ), //SizedBox
                                Text(
                                  (minBersih != null &&
                                          int.tryParse(minBersih) != null &&
                                          int.tryParse(minBersih) >=
                                              85 * widget.nominalEmas)
                                      ? 'Zakat yang harus dibayarkan sebesar ${CurrencyFormat.convertToIdr(int.tryParse(Zakat), 0)}'
                                      : "Harta Belum Mencapai Nisab\nMaka harta tidak wajib dizakati (dibawah ${CurrencyFormat.convertToIdr(85 * widget.nominalEmas, 0)})",
                                  style: TextStyle(
                                    fontSize: 18,
                                    color: Colors.green,
                                  ), //Textstyle
                                ), //Text
                                const SizedBox(
                                  height: 20,
                                ), //SizedBox
                                // Text(
                                //   'Bila zakat dengan beras maka dibayarkan sebesar ${beras} kg',
                                //   style: TextStyle(
                                //     fontSize: 18,
                                //     color: Colors.green,
                                //   ), //Textstyle
                                // ),
                              ],
                            ),
                          ),
                        ),
                      ),
                    )
                  : Container()
            ],
          ),
        ),
      ),
    );
  }
}

class FitrahWidget extends StatefulWidget {
  final nominalFitrah;

  FitrahWidget({this.nominalFitrah});
  @override
  State<FitrahWidget> createState() => _FitrahWidgetState();
}

class _FitrahWidgetState extends State<FitrahWidget> {
  TextEditingController _Jiwa = new TextEditingController();
  TextEditingController _Harga = new TextEditingController();
  TextEditingController totalFitrahController = new TextEditingController();

  bool showButton = false;
  bool showCard = false;

  String hitung;
  String hargaberas;
  String beras;

  clearValues() {
    setState(() {
      _Jiwa.text = '';
      _Harga.text = '';
      totalFitrahController.text = '';
    });
  }

  @override
  void dispose() {
    _Jiwa.dispose();
    _Harga.dispose();
    totalFitrahController.dispose();
    super.dispose();
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    _Harga.text = '40000';
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      child: Padding(
        padding: const EdgeInsets.only(top: 40, left: 20, right: 24),
        child: Form(
          child: Column(
            children: [
              Align(
                alignment: Alignment.centerLeft,
                child: Text(
                  'Fitrah',
                  style: TextStyle(
                      fontSize: 22,
                      fontWeight: FontWeight.bold,
                      color: DesignCourseAppTheme.green),
                ),
              ),
              SizedBox(height: 50),
              Column(
                children: [
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Jumlah Jiwa',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    controller: _Jiwa,
                    decoration: InputDecoration(
                        prefixIcon: Padding(
                          padding: const EdgeInsets.only(
                              left: 8.0, top: 8, bottom: 8),
                        ),
                        hintText: "Masukkan jumlah jiwa",
                        border: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                        ),
                        focusedBorder: OutlineInputBorder(
                          borderRadius: BorderRadius.circular(10),
                          borderSide:
                              BorderSide(color: DesignCourseAppTheme.green),
                        )),
                    keyboardType: TextInputType.number,
                  ),
                  SizedBox(
                    height: 30,
                  ),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      'Harga Beras 3 Kg',
                      style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: DesignCourseAppTheme.green),
                    ),
                  ),
                  Align(
                    alignment: Alignment.centerLeft,
                    child: Text(
                      '3 Kg = ${CurrencyFormat.convertToIdr(widget.nominalFitrah, 0)}',
                    ),
                  ),
                  SizedBox(height: 20),
                  TextField(
                    controller: totalFitrahController,
                    decoration: InputDecoration(
                      prefixIcon: RichText(
                        text: TextSpan(
                          children: [
                            TextSpan(
                              text: _Jiwa.text != ""
                                  ? "${CurrencyFormat.convertToIdr(int.tryParse(_Jiwa.text) * widget.nominalFitrah, 0)}"
                                  : _Jiwa.text,
                              style: TextStyle(
                                  fontWeight: FontWeight.bold,
                                  color: Colors.black,
                                  fontSize: 20 // Set the color as needed
                                  ),
                            ),
                          ],
                        ),
                      ),
                    ),
                    keyboardType: TextInputType.number,
                    inputFormatters: [CurrencyTextInputFormatter()],
                  ),
                ],
              ),
              SizedBox(
                height: 30,
              ),
              showButton
                  ? Row(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: [
                        // SizedBox(
                        //   width: 100,
                        // ),
                        Center(
                          child: Container(
                            width: 100,
                            height: 40,
                            child: ElevatedButton(
                              onPressed: () async {
                                return showDialog(
                                  context: context,
                                  builder: (ctx) => AlertDialog(
                                    title: Text("Rumus Perhitungan"),
                                    content: Text(
                                        "Uang = ${CurrencyFormat.convertToIdr(widget.nominalFitrah, 0)}/3kg x ${_Jiwa.text} jiwa = ${CurrencyFormat.convertToIdr(int.tryParse(hitung), 0)} \n\nBeras = 3 kg x ${_Jiwa.text} = ${beras} kg"),
                                    actions: <Widget>[
                                      ElevatedButton(
                                        onPressed: () {
                                          Navigator.of(ctx).pop();
                                        },
                                        child: Text("Ok"),
                                      ),
                                    ],
                                  ),
                                );
                              },
                              child: Text(
                                'INFO',
                              ),
                              style: ElevatedButton.styleFrom(
                                  //COLOR OF THE TEXT INSIDE THE BUTTON

                                  onPrimary: Colors.white,
                                  shape: RoundedRectangleBorder(
                                    borderRadius: BorderRadius.circular(20.0),
                                  ),
                                  primary: Colors.amber,
                                  textStyle: TextStyle(
                                    //Text inside button style
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.w600,
                                    fontFamily: 'poppins',
                                  )),
                            ),
                          ),
                        ),
                        SizedBox(
                          width: 8,
                        ),
                        Center(
                          child: Container(
                            width: 100,
                            height: 40,
                            child: ElevatedButton(
                              onPressed: () async {
                                // addData();
                                clearValues();

                                // Navigator.of(context).push(MaterialPageRoute(
                                //     builder: (context) => homePage()));
                                // await CoolAlert.show(
                                //     context: context,
                                //     type: CoolAlertType.success,
                                //     title: "Data Baru",
                                //     text: "Berhasil ditambahkan!",
                                //     confirmBtnText: "Ok");
                              },
                              child: Text(
                                'HAPUS',
                              ),
                              style: ElevatedButton.styleFrom(
                                  //COLOR OF THE TEXT INSIDE THE BUTTON

                                  onPrimary: Colors.white,
                                  shape: RoundedRectangleBorder(
                                    borderRadius: BorderRadius.circular(20.0),
                                  ),
                                  primary: Colors.red,
                                  textStyle: TextStyle(
                                    //Text inside button style
                                    fontSize: 16.0,
                                    fontWeight: FontWeight.w600,
                                    fontFamily: 'poppins',
                                  )),
                            ),
                          ),
                        ),
                        // Text(hitung.replaceAll(regex, ''))
                      ],
                    )
                  : Container(),
              SizedBox(
                height: 20,
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Center(
                    child: Container(
                      width: 100,
                      height: 40,
                      child: ElevatedButton(
                        onPressed: () async {
                          // addData();
                          hitung =
                              "${int.tryParse(_Jiwa.text) * widget.nominalFitrah}";

                          beras = "${3 * int.tryParse(_Jiwa.text)}";
                          setState(() {
                            showButton = !showButton;
                            showCard = !showCard;
                          });
                        },
                        child: Text(
                          'HITUNG',
                        ),
                        style: ElevatedButton.styleFrom(
                            //COLOR OF THE TEXT INSIDE THE BUTTON

                            onPrimary: Colors.white,
                            shape: RoundedRectangleBorder(
                              borderRadius: BorderRadius.circular(20.0),
                            ),
                            primary: DesignCourseAppTheme.green,
                            textStyle: TextStyle(
                              //Text inside button style
                              fontSize: 16.0,
                              fontWeight: FontWeight.w600,
                              fontFamily: 'poppins',
                            )),
                      ),
                    ),
                  ),
                ],
              ),
              SizedBox(
                height: 30,
              ),
              showCard
                  ? Center(
                      child: Card(
                        elevation: 50,
                        shadowColor: Colors.black,
                        color: Colors.greenAccent[100],
                        child: SizedBox(
                          width: MediaQuery.of(context).size.width * 0.8,
                          height: MediaQuery.of(context).size.height * 0.3,
                          child: Padding(
                            padding: const EdgeInsets.all(20.0),
                            child: Column(
                              children: [
                                const SizedBox(
                                  height: 10,
                                ),
                                Text(
                                  'Hasil Hitung Zakat Fitrah :',
                                  style: TextStyle(
                                    fontSize: 20,
                                    color: Colors.green[900],
                                    fontWeight: FontWeight.bold,
                                  ), //Textstyle
                                ), //Text
                                const SizedBox(
                                  height: 15,
                                ), //SizedBox
                                Text(
                                  'Bila zakat dengan uang maka dibayarkan sebesar ${CurrencyFormat.convertToIdr(int.tryParse(hitung), 0)}',
                                  style: TextStyle(
                                    fontSize: 18,
                                    color: Colors.green,
                                  ), //Textstyle
                                ), //Text
                                const SizedBox(
                                  height: 20,
                                ), //SizedBox
                                Text(
                                  'Bila zakat dengan beras maka dibayarkan sebesar ${beras} kg',
                                  style: TextStyle(
                                    fontSize: 18,
                                    color: Colors.green,
                                  ), //Textstyle
                                ),
                              ],
                            ),
                          ),
                        ),
                      ),
                    )
                  : Container()
            ],
          ),
        ),
      ),
    );
  }
}

class FidyahWidget extends StatefulWidget {
  final nominalFidyah;
  FidyahWidget({this.nominalFidyah});
  @override
  State<FidyahWidget> createState() => _FidyahWidgetState();
}

class _FidyahWidgetState extends State<FidyahWidget> {
  final TextEditingController _nominalController = TextEditingController();

  @override
  void dispose() {
    _nominalController.dispose(); // Dispose the controller when not needed
    super.dispose();
  }

  @override
  void initState() {
    // TODO: implement initState
    super.initState();
    _nominalController.addListener(() {
      setState(() {});
    });
  }

  void hitungUlang() {
    _nominalController.text = "";
  }

  bool showButton = false;
  bool showCard = false;

  @override
  Widget build(BuildContext context) {
    return ListView(
      padding: const EdgeInsets.all(16.0),
      children: [
        // Nominal Input Section
        Text(
          'Fidyah',
          style: TextStyle(
              fontSize: 22,
              fontWeight: FontWeight.bold,
              color: DesignCourseAppTheme.green),
        ),
        SizedBox(height: 12),
        Text('Masukkan jumlah hari tidak puasa'),
        SizedBox(height: 8),
        TextField(
          controller: _nominalController,
          decoration: InputDecoration(
              prefixIcon: Padding(
                padding: const EdgeInsets.only(left: 8.0, top: 8, bottom: 8),
              ),
              hintText: "/ Hari x ${widget.nominalFidyah}",
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

        Text('Nominal'),
        SizedBox(height: 8),
        TextField(
          decoration: InputDecoration(
            prefixIcon: RichText(
              text: TextSpan(
                children: [
                  TextSpan(
                    text: _nominalController.text != ""
                        ? "${CurrencyFormat.convertToIdr(int.tryParse(_nominalController.text) * widget.nominalFidyah, 0)}"
                        : _nominalController.text,
                    style: TextStyle(
                        fontWeight: FontWeight.bold,
                        color: Colors.black,
                        fontSize: 20 // Set the color as needed
                        ),
                  ),
                ],
              ),
            ),
          ),
          keyboardType: TextInputType.number,
          inputFormatters: [CurrencyTextInputFormatter()],
        ),
        SizedBox(height: 50),

        ElevatedButton(
          onPressed: () {
            setState(() {
              showButton = !showButton;
              showCard = !showCard;
            });
          },
          style: ElevatedButton.styleFrom(
            backgroundColor: DesignCourseAppTheme.green,
            minimumSize: Size(double.infinity, 50),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(10),
            ),
          ),
          child: Text(
            'Hitung Fidyah',
            style: TextStyle(fontWeight: FontWeight.bold),
          ),
        ),
        SizedBox(height: 30),
        GestureDetector(
          child: Center(
            child: Text(
              "Hitung Ulang",
              style: TextStyle(
                  color: DesignCourseAppTheme.green,
                  fontSize: 19,
                  fontWeight: FontWeight.bold),
            ),
          ),
          onTap: hitungUlang,
        ),
        SizedBox(
          height: 30,
        ),
        showCard
            ? Center(
                child: Card(
                  elevation: 50,
                  shadowColor: Colors.black,
                  color: Colors.greenAccent[100],
                  child: SizedBox(
                    width: MediaQuery.of(context).size.width * 0.8,
                    height: MediaQuery.of(context).size.height * 0.3,
                    child: Padding(
                      padding: const EdgeInsets.all(20.0),
                      child: Column(
                        children: [
                          const SizedBox(
                            height: 10,
                          ),
                          Text(
                            'Hasil Hitung Fidyah :',
                            style: TextStyle(
                              fontSize: 20,
                              color: Colors.green[900],
                              fontWeight: FontWeight.bold,
                            ), //Textstyle
                          ), //Text
                          const SizedBox(
                            height: 15,
                          ), //SizedBox
                          Text(
                            'Nominal Fidyah/Hari : ${CurrencyFormat.convertToIdr(widget.nominalFidyah, 0)}',
                            style: TextStyle(
                              fontSize: 18,
                              color: Colors.green,
                            ), //Textstyle
                          ), //Te
                          const SizedBox(
                            height: 20,
                          ),
                          Text(
                            'Jumlah hari tidak Puasa Ramadhan : ${_nominalController.text}',
                            style: TextStyle(
                              fontSize: 18,
                              color: Colors.green,
                            ), //Textstyle
                          ), //Text
                          const SizedBox(
                            height: 20,
                          ), //SizedBox
                          Text(
                            'Perhitungan : ${_nominalController.text} x ${CurrencyFormat.convertToIdr(widget.nominalFidyah, 0)} = ${CurrencyFormat.convertToIdr(int.tryParse(_nominalController.text) * widget.nominalFidyah, 0)}',
                            style: TextStyle(
                              fontSize: 18,
                              color: Colors.green,
                            ), //Textstyle
                          ),
                          const SizedBox(
                            height: 20,
                          ), //SizedBox
                          Text(
                            'Maka Besar Fidyah yang harus dibayarkan sebesar ${CurrencyFormat.convertToIdr(int.tryParse(_nominalController.text) * widget.nominalFidyah, 0)} ',
                            style: TextStyle(
                                fontSize: 18,
                                color: Colors.green,
                                fontWeight: FontWeight.bold), //Textstyle
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
              )
            : Container()
      ],
    );
  }
}
