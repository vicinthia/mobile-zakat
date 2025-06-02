import 'package:flutter/material.dart';
import 'package:zakat_mobile/Transaksi/transaksi_maal.dart';
import 'package:zakat_mobile/Model/nominal.dart';

import '../Kalkulator/KalkulatorZakatPage.dart';
import '../design_course/design_course_app_theme.dart';

class ZakatMaalScreen extends StatelessWidget {
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
                  child:
                      Image.asset('assets/zakat_maal.png', fit: BoxFit.cover),
                ),
              ),
              SizedBox(height: 20),
              // Image.asset('assets/zakat_maal.png'),
              Text(
                "Zakat Maal",
                style: TextStyle(
                  fontSize: 24,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 10),
              Text(
                "Zakat yang dikeluarkan individu maupun lembaga atas harta atau penghasilan yang diperolehnya dengan syarat dan ketentuan yang sudah ditetapkan",
                style: TextStyle(
                  fontSize: 18,
                ),
              ),
              SizedBox(height: 16),
              Divider(),
              Text(
                "Niat Zakat Maal",
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
                      "نَوَيْتُ أَنْ أُخْرِجَ زَكاَةَ اْلمَالِ عَنْ نَفْسِيْ فَرْضًا لِلهِ تَعَالَى",
                      style: TextStyle(
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      '"Nawaitu an ukhrija zakatal maali’an nafsi fardan lillahi ta’ala"',
                      style: TextStyle(
                        fontSize: 16,
                        fontStyle: FontStyle.italic,
                      ),
                    ),
                    SizedBox(height: 8),
                    Text(
                      "Saya berniat mengeluarkan zakat harta dari diri sendiri karena Allah Ta'ala",
                      style: TextStyle(fontSize: 16),
                    ),
                  ],
                ),
              ),
              SizedBox(height: 16),
              ListTile(
                leading: Icon(Icons.calculate),
                title: Text('Kalkulator Zakat Maal'),
                trailing: Icon(Icons.arrow_forward_ios),
                onTap: () {
                  m_Harga.connectToAPI().then((value) {
                    m_harga = value;
                    Navigator.of(context).push(MaterialPageRoute(
                        builder: (context) => ZakatCalculator(
                            selectedZakatType: "Zakat Maal",
                            nominalEmas: int.tryParse(m_harga.emas) ?? 0)));
                  });
                },
              ),

              SizedBox(height: 16),
              Divider(),
              SizedBox(height: 16),
              ElevatedButton(
                onPressed: () {
                  Navigator.of(context).push(
                    MaterialPageRoute(builder: (context) => transaksiMaal()),
                  );
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

void main() {
  runApp(MaterialApp(
    home: ZakatMaalScreen(),
  ));
}
