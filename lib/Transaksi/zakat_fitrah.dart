import 'package:flutter/material.dart';
import 'package:zakat_mobile/Kalkulator/KalkulatorZakatPage.dart';
import 'package:zakat_mobile/Model/nominal.dart';
import 'package:zakat_mobile/Transaksi/transaksi_fitrah.dart';
import 'package:zakat_mobile/Transaksi/transaksi_maal.dart';

import '../design_course/design_course_app_theme.dart';

class ZakatFitrahScreen extends StatelessWidget {
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
                  child:
                      Image.asset('assets/zakat_fitrah.jpg', fit: BoxFit.cover),
                ),
              ),
              SizedBox(height: 20),
              // Image.asset('assets/zakat_maal.png'),
              Text(
                "Zakat Fitrah",
                style: TextStyle(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 10),
              Text(
                "Zakat yang diwajibkan atas setiap jiwa baik lelaki dan perempuan muslim yang dilakukan pada bulan Ramadhan pada Idul Fitri",
                style: TextStyle(
                  fontSize: 18,
                ),
              ),
              SizedBox(height: 16),
              Divider(),
              Text(
                "Niat Zakat Fitrah untuk Diri Sendiri dan Keluarga",
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
                      "ﻧَﻮَﻳْﺖُ ﺃَﻥْ ﺃُﺧْﺮِﺝَ ﺯَﻛَﺎﺓَ ﺍﻟْﻔِﻄْﺮِ ﻋَنِّيْ ﻭَﻋَﻦْ ﺟَﻤِﻴْﻊِ ﻣَﺎ ﻳَﻠْﺰَﻣُنِيْ ﻧَﻔَﻘَﺎﺗُﻬُﻢْ ﺷَﺮْﻋًﺎ ﻓَﺮْﺿًﺎ ِﻟﻠﻪِ ﺗَﻌَﺎﻟَﻰ",
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      '"Nawaitu an ukhrija zakaatal fithri ‘anni wa ‘an jamii’i ma yalzamunii nafaqaatuhum syar’an fardhan lillaahi ta’aalaa"',
                      style: TextStyle(
                        fontSize: 16,
                        fontStyle: FontStyle.italic,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "Aku niat mengeluarkan zakat fitrah untuk diriku dan seluruh orang yang nafkahnya menjadi tanggunganku, fardu karena Allah Ta‘âlâ",
                      style: TextStyle(fontSize: 16),
                    ),
                  ],
                ),
              ),
              SizedBox(height: 16),
              ListTile(
                leading: Icon(Icons.calculate),
                title: Text('Kalkulator Zakat Fitrah'),
                trailing: Icon(Icons.arrow_forward_ios),
                onTap: () {
                  // Navigate to the calculator page
                  m_Harga.connectToAPI().then((value) {
                    m_harga = value;
                    Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => ZakatCalculator(
                            selectedZakatType: "Zakat Fitrah",
                            nominalFitrah: int.tryParse(m_harga.fitrah) ?? 0)));
                  });
                },
              ),

              SizedBox(height: 16),
              Divider(),
              SizedBox(height: 16),
              ElevatedButton(
                onPressed: () {
                  Navigator.of(context).push(MaterialPageRoute(
                      builder: (context) => transaksiFitrah()));
                },
                style: ElevatedButton.styleFrom(
                  primary: DesignCourseAppTheme.green, // background
                  minimumSize: Size(double.infinity, 50), // set button size
                ),
                child: Text("Bayar Zakat Sekarang"),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
