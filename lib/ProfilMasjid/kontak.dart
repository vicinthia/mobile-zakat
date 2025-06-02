import 'package:flutter/material.dart';

import '../design_course/design_course_app_theme.dart';

class kontakMasjid extends StatefulWidget {
  @override
  _kontakMasjidState createState() => _kontakMasjidState();
}

class _kontakMasjidState extends State<kontakMasjid> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromARGB(255, 240, 240, 240),
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Text("Kontak Masjid"),
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
                      "KONTAK",
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
                            "assets/agenda6.jpeg",
                            // width: 300,
                            // height: 300,
                          ),
                        ),
                        SizedBox(
                          height: 40,
                        ),
                        Text(
                          'Kontak Humas Masjid Al-Iklhas\n',
                          textAlign: TextAlign.left,
                          style: TextStyle(
                              fontSize: 20.0, fontWeight: FontWeight.bold),
                        ),
                        Center(
                          child: Text(
                            'Alamat : JL Brigjend Katamso, Waru, Perumahan Makarya Binangun, Wadungasri, Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61256',
                            textAlign: TextAlign.left,
                            style: TextStyle(fontSize: 18.0),
                          ),
                        ),
                        SizedBox(
                          height: 20,
                        ),
                        Text(
                          'Phone : 031.8557504, +62813-3002-5707',
                          textAlign: TextAlign.left,
                          style: TextStyle(fontSize: 18.0),
                        ),
                        SizedBox(
                          height: 20,
                        ),
                        Text(
                          'Website : al-iklhas.ikc.co.id\nInstagram : @alikhlashmakarya',
                          textAlign: TextAlign.left,
                          style: TextStyle(fontSize: 18.0),
                        ),
                        SizedBox(
                          height: 20,
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
