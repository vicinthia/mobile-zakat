import 'package:flutter/material.dart';
import '../design_course/design_course_app_theme.dart';

class bidangMasjid extends StatefulWidget {
  @override
  _bidangMasjidState createState() => _bidangMasjidState();
}

class _bidangMasjidState extends State<bidangMasjid> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromARGB(255, 240, 240, 240),
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Text("Susunan"),
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
                      "SUSUNAN TAKMIR MASJID AL-IKHLAS",
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
                          'Pengurus Inti\n',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        Text(
                          'Ketua  : H.Wiwik Sudiyanto, ST\nWakil Ketua : H.M. Uman ST\nBendahara  : H.Onni Syahroni',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        SizedBox(
                          height: 40,
                        ),
                        Text(
                          'Anggota \n',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        Center(
                          child: Text(
                            "Koordinator  : H.Supi'l Miskan\nAnggota : H.Nurhadjil, Drs.Soegiono, Kardi",
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
