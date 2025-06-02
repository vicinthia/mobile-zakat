import 'dart:convert';
import 'dart:typed_data';

import 'package:blue_thermal_printer/blue_thermal_printer.dart';
import 'package:intl/intl.dart';

// import 'package:e_ticket/pages/master/kasir_weekend/input.dart';
import 'package:flutter/material.dart';

import 'package:http/http.dart' as http;
import 'package:zakat_mobile/Custom/rp_format.dart';

import '../design_course/design_course_app_theme.dart';
import '../design_course/home_design_course.dart';

// import 'package:e_ticket/pages/master/model_kasir/result.dart';
// import 'package:e_ticket/pages/master/kasir_weekdays/input.dart';

//void main() => runApp(PrintShadaqah());

class PrintShadaqah extends StatefulWidget {
  final kode_zakat;
  final nama_muz;
  final alamat_muz;
  final nama_amil;
  final total_zakat;
  final tgl_zakat;

  PrintShadaqah({
    this.kode_zakat,
    this.nama_amil,
    this.nama_muz,
    this.alamat_muz,
    this.tgl_zakat,
    this.total_zakat,
  });
  @override
  State<PrintShadaqah> createState() => _PrintShadaqahState();
}

class _PrintShadaqahState extends State<PrintShadaqah> {
  List<BluetoothDevice> devices = [];

  BluetoothDevice selectedDevices;
  BlueThermalPrinter printer = BlueThermalPrinter.instance;

  // var quantity = controller.menumodels.values.toList()[index]

  String notNotes;

  DateTime tgl = new DateTime.now();
  String formattedDate;

  String formattedTime;

  int realPpn;
  int Pb;
  @override
  void initState() {
    formattedDate = DateFormat.yMMMEd().format(tgl);
    formattedTime = DateFormat('kk:mm').format(tgl);

    getDevices();

    // Pb = widget.controller.total * 10 / 100.toInt();
  }

  void getDevices() async {
    devices = await printer.getBondedDevices();
    setState(() {});
  }

  RegExp regex = RegExp(r'([.]*0)(?!.*\d)');
  Uint8List command = Uint8List.fromList([27, 112, 0, 50, 250]);
  //sample(String jumlah, total);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
            backgroundColor: DesignCourseAppTheme.green,
            title: Text('Print Bukti Shadaqah'),
            leading: IconButton(
                icon: Icon(Icons.arrow_back),
                onPressed: () {
                  Navigator.push(
                      context,
                      MaterialPageRoute(
                          builder: (context) => DesignCourseHomeScreen()));
                })),
        body: ListView.builder(
            itemCount: devices.length,
            itemBuilder: (c, i) {
              return ListTile(
                leading: Icon(Icons.print),
                title: Text(devices[i].name),
                subtitle: Text(devices[i].address),
                onTap: () async {
                  //delete;
                  printer.connect(devices[i]);
                  if ((await printer.isConnected)) {
                    printer.printCustom('Mobile Zakat', 1, 1);
                    printer.printCustom('PANITIA PENERIMAAN DAN', 1, 1);
                    printer.printCustom('PENYALURAN ZAKAT', 1, 1);
                    printer.printCustom('Masjid Al-Ikhlas', 1, 1);
                    // printer.printNewLine();
                    printer.printNewLine();
                    printer.printCustom('TANDA TERIMA', 1, 1);

                    printer.print3Column(
                        'ID Zakat :', '', '${widget.kode_zakat}', 1,
                        format: "%-3s %-1s %8s %n");

                    printer.printCustom('================', 2, 1);
                    printer.printCustom('Telah kami terima dari', 1, 0);
                    printer.printCustom(
                        'Nama/Keluarga : ${widget.nama_muz}', 1, 0);
                    printer.printCustom('Alamat : ${widget.alamat_muz}', 1, 0);
                    printer.printCustom(
                        '--------------------------------', 1, 1);
                    printer.printCustom('Berupa', 1, 0);

                    printer.printLeftRight(
                      'Shadaqah :',
                      '${CurrencyFormat.convertToIdr(int.tryParse(widget.total_zakat), 0)}',
                      1,
                    );
                    printer.printCustom('================', 2, 1);
                    printer.printCustom('Sidoarjo, ${widget.tgl_zakat}', 1, 0);
                    printer.printCustom(
                        'Panitia Amil, ${widget.nama_amil}', 1, 1);

                    printer.printNewLine();
                    printer.printNewLine();
                    printer.printNewLine();
                    printer.printNewLine();
                  }
                },
              );
            }));
  }
}
