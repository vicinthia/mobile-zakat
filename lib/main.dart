import 'package:flutter/material.dart';
import 'package:zakat_mobile/ProfilMasjid/profil.dart';
import 'package:zakat_mobile/design_course/home_design_course.dart';
import 'package:zakat_mobile/layers/layer_one.dart';
import 'package:zakat_mobile/layers/layer_three.dart';
import 'package:zakat_mobile/layers/layer_two.dart';

import 'ProfilMasjid/agenda.dart';
import 'ProfilMasjid/bidang.dart';
import 'ProfilMasjid/kontak.dart';

void main() {
  runApp(MaterialApp(
    title: 'Login',
    theme: ThemeData(
      fontFamily: 'Poppins',
    ),
    debugShowCheckedModeBanner: false,
    // home: DesignCourseHomeScreen(),
    initialRoute: '/',
    routes: {
      '/': (context) => LoginPage(),
      '/profilmasjid': (context) => profilMasjid(),
      '/agendamasjid': (context) => agendaMasjid(),
      '/bidangmasjid': (context) => bidangMasjid(),
      '/kontakmasjid': (context) => kontakMasjid(),
    },
  ));
}

class LoginPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        decoration: BoxDecoration(
            image: DecorationImage(
          image: AssetImage('assets/primaryBg.png'),
          fit: BoxFit.cover,
        )),
        child: SingleChildScrollView(
          child: ConstrainedBox(
            constraints: BoxConstraints(
              minHeight: MediaQuery.of(context).size.height,
            ),
            child: IntrinsicHeight(
              child: Stack(
                children: <Widget>[
                  Positioned(
                    top: 100,
                    left: 59,
                    child: Container(
                      child: Text(
                        'Mobile Zakat',
                        style: TextStyle(
                            fontSize: 48,
                            fontFamily: 'Poppins-Medium',
                            fontWeight: FontWeight.bold,
                            color: Colors.white),
                      ),
                    ),
                  ),
                  Positioned(
                    top: 190,
                    left: 59,
                    child: Container(
                      child: Text(
                        'Login',
                        style: TextStyle(
                            fontSize: 40,
                            fontFamily: 'Poppins-Medium',
                            fontWeight: FontWeight.w500,
                            color: Colors.white),
                      ),
                    ),
                  ),
                  Positioned(
                      top: 290, right: 0, bottom: -35, child: LayerOne()),
                  Positioned(
                      top: 318, right: 0, bottom: -35, child: LayerTwo()),
                  Positioned(
                      top: 320, right: 0, bottom: 48, child: LayerThree()),
                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}

class HexColor extends Color {
  HexColor(final String hexColor) : super(_getColorFromHex(hexColor));

  static int _getColorFromHex(String hexColor) {
    hexColor = hexColor.toUpperCase().replaceAll('#', '');
    if (hexColor.length == 6) {
      hexColor = 'FF' + hexColor;
    }
    return int.parse(hexColor, radix: 16);
  }
}
