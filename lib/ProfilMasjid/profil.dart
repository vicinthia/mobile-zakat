import 'package:flutter/material.dart';

import '../design_course/design_course_app_theme.dart';

class profilMasjid extends StatefulWidget {
  @override
  _profilMasjidState createState() => _profilMasjidState();
}

class _profilMasjidState extends State<profilMasjid> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromARGB(255, 240, 240, 240),
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Text("Profil Masjid"),
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Padding(
              padding: const EdgeInsets.all(15.0),
              child: Center(
                child: Container(
                  // color: Colors.pink,
                  margin: EdgeInsets.only(top: 5, bottom: 10),
                  // width: 200,
                  width: MediaQuery.of(context).size.width,
                  height: 100,
                  alignment: Alignment.center,
                  decoration: BoxDecoration(
                      color: Colors.white,
                      borderRadius: BorderRadius.circular(10)),
                  child: Padding(
                    padding: const EdgeInsets.only(left: 10, right: 10),
                    child: Text(
                      "VISI DAN MISI",
                      textAlign: TextAlign.left,
                      style:
                          TextStyle(fontWeight: FontWeight.bold, fontSize: 22),
                    ),
                  ),
                ),
              ),
            ),
            SizedBox(
              height: 20,
            ),
            Padding(
                padding: const EdgeInsets.all(15.0),
                child: Container(
                  color: Colors.white,
                  // width: MediaQuery.of(context).size.width,
                  // height: MediaQuery.of(context).size.height,
                  padding: EdgeInsets.all(20.0),
                  child: Center(
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Center(
                          child: Image.asset(
                            "assets/alikhlas.png",
                            // width: 300,
                            // height: 300,
                          ),
                        ),
                        SizedBox(
                          height: 40,
                        ),
                        Text(
                          'Visi Masjid Al-Iklhas\n',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        Center(
                          child: Text(
                            '"Dari Masjid Membangun Ummat.."',
                            textAlign: TextAlign.left,
                            style: TextStyle(fontSize: 20.0),
                          ),
                        ),
                        SizedBox(
                          height: 40,
                        ),
                        Text(
                          'Misi Masjid Al-Iklhas\n',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        Center(
                          child: Text(
                            '1. Memelihara dan meningkatkan kualitas Pelayanan Ibadah\n2. Menerapkan Pengelolaan Masjid yang Modern dan berwawasan Lingkungan\n3. Menyelenggarakan Manajemen Masjid yang Modern, Amanah, Akuntabel dan Profesional\n4. Berusaha membangun Ummat dan Mensejahterakan Masyarakat',
                            textAlign: TextAlign.left,
                            style: TextStyle(fontSize: 20.0),
                          ),
                        ),
                      ],
                    ),
                  ),
                )),
          ],
        ),
      ),
    );
  }
}
