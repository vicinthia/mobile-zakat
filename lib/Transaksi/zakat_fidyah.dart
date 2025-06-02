import 'package:flutter/material.dart';
import 'package:zakat_mobile/Kalkulator/KalkulatorZakatPage.dart';
import 'package:zakat_mobile/Model/nominal.dart';
import 'package:zakat_mobile/Transaksi/transaksi_fidyah.dart';
import 'package:zakat_mobile/Transaksi/transaksi_maal.dart';

import '../design_course/design_course_app_theme.dart';

class ZakatFidyahScreen extends StatelessWidget {
  m_Harga m_harga = null;
  @override
  Widget build(BuildContext context) {
    final Size size = MediaQuery.of(context).size;
    final double width = size.width;
    final double height = size.height;
    return Scaffold(
      backgroundColor: Colors.white,
      appBar: AppBar(
        backgroundColor: Colors.transparent,
        elevation: 0,
        leading: IconButton(
          icon: Icon(Icons.arrow_back, color: Colors.black),
          onPressed: () => Navigator.of(context).pop(),
        ),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Center(
                child: SizedBox(
                  // width: MediaQuery.of(context).size.width *
                  //     0.5, // 50% of screen width
                  // height: MediaQuery.of(context).size.width * 0.5,
                  child: Image.asset('assets/baznas-fidyah.jpg',
                      fit: BoxFit.cover),
                ),
              ),
              SizedBox(height: 20),
              // Image.asset('assets/zakat_maal.png'),
              Text(
                "Zakat Fidyah",
                style: TextStyle(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 10),
              Text(
                "Fidyah adalah sejumlah harta benda dalam kadar tertentu yang wajib diberikan kepda fakir miskin sebagai ganti suatu ibadah yang telah ditinggalkan",
                style: TextStyle(
                  fontSize: 18,
                ),
              ),
              SizedBox(height: 16),
              Divider(),
              Text(
                "Niat Fidyah",
                style: TextStyle(
                    fontSize: 20,
                    fontWeight: FontWeight.bold,
                    color: DesignCourseAppTheme.green),
              ),
              SizedBox(height: 8),
              Container(
                padding: EdgeInsets.all(16),
                color: Colors.green.shade50,
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Text(
                      "Niat fidyah bagi orang sakit keras dan orang tua renta",
                      style: TextStyle(fontSize: 16),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "نَوَيْتُ أَنْ أُخْرِجَ هَذِهِ الْفِدْيَةَ لإِفْطَارِ صَوْمِ رَمَضَانَ فَرْضًا لِلهِ تَعَالَى",
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      '" Nawaitu an ukhrija hadzihil fidyatal iftah haumi ramadhana fardha lillahi ta’ala"',
                      style: TextStyle(
                        fontSize: 16,
                        fontStyle: FontStyle.italic,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "Aku niat mengeluarkan fidyah ini karena berbuka puasa di bulan Ramadhan, fardhu karena Allah",
                      style: TextStyle(fontSize: 16),
                    ),
                    SizedBox(height: 20),
                    Text(
                      "Niat fidyah bagi wanita hamil atau menyusui",
                      style: TextStyle(fontSize: 16),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "نَوَيْتُ أَنْ أُخْرِجَ هَذِهِ الْفِدْيَةَ عَنْ إِفْطَارِ صَوْمِ رَمَضَانَ لِلْخَوْفِ عَلَى وَلَدِيْ على فَرْضًا لِلهِ تَعَالَى",
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      '"Nawaitu an ukhrija hadzihil fidyata’an iftari shaumi ramadhana lilkhawfi a’la waladii’alal fardha lillahi  ta’ala"',
                      style: TextStyle(
                        fontSize: 16,
                        fontStyle: FontStyle.italic,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "Aku niat mengeluarkan fidyah ini dari tanggungan berbuka puasa Ramadhan karena khawatir keselamatan anakku, fardhu karena Allah",
                      style: TextStyle(fontSize: 16),
                    ),
                  ],
                ),
              ),
              SizedBox(height: 16),
              ListTile(
                leading: Icon(Icons.calculate),
                title: Text('Kalkulator Fidyah'),
                trailing: Icon(Icons.arrow_forward_ios),
                onTap: () {
                  // Navigate to the calculator page
                  m_Harga.connectToAPI().then((value) {
                    m_harga = value;
                    Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => ZakatCalculator(
                            selectedZakatType: "Fidyah",
                            nominalFidyah: int.tryParse(m_harga.fidyah) ?? 0)));
                  });
                },
              ),

              SizedBox(height: 16),
              Divider(),
              SizedBox(height: 16),
              ElevatedButton(
                onPressed: () {
                  m_Harga.connectToAPI().then((value) {
                    m_harga = value;
                    Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => transaksiFidyah(
                            nominalFidyah: int.tryParse(m_harga.fidyah) ?? 0)));
                  });
                },
                style: ElevatedButton.styleFrom(
                  primary: DesignCourseAppTheme.green, // background
                  minimumSize: Size(double.infinity, 50), // set button size
                ),
                child: Text("Bayar Fidyah Sekarang"),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
