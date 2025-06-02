import 'package:flutter/material.dart';
import '../design_course/design_course_app_theme.dart';

class agendaMasjid extends StatefulWidget {
  @override
  _agendaMasjidState createState() => _agendaMasjidState();
}

class _agendaMasjidState extends State<agendaMasjid> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color.fromARGB(255, 240, 240, 240),
      appBar: AppBar(
        backgroundColor: DesignCourseAppTheme.green,
        title: Text("Agenda Masjid"),
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
                      "AGENDA",
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
                        // Row(
                        //   children: [
                        //     Column(
                        //       children: [
                        //         Image.asset(
                        //           "assets/agenda8.jpeg",
                        //           width: 330,
                        //           height: 370,
                        //         ),
                        //       ],
                        //     ),
                        //     Column(
                        //       mainAxisAlignment: MainAxisAlignment.start,
                        //       children: [
                        //         Text(
                        //           " Kegiatan Taman\n Pendidikan Al-qur'an\n (TPQ)\n",
                        //           textAlign: TextAlign.left,
                        //           style: TextStyle(
                        //               fontSize: 18.0,
                        //               fontWeight: FontWeight.bold),
                        //         ),
                        //         Text(
                        //           "  Kegiatan mengaji\n anak-anak rutin\n setiap hari Senin-Jum'at",
                        //           textAlign: TextAlign.center,
                        //           style: TextStyle(
                        //             fontSize: 18.0,
                        //           ),
                        //         ),
                        //       ],
                        //     ),
                        //   ],
                        // ),

                        Row(
                          children: [
                            // Bagian gambar
                            Flexible(
                              flex:
                                  1, // Atur rasio fleksibilitas sesuai kebutuhan
                              child: Image.asset(
                                "assets/agenda8.jpeg",
                                width: MediaQuery.of(context).size.width *
                                    0.4, // 40% dari lebar layar
                                height: MediaQuery.of(context).size.height *
                                    0.3, // 30% dari tinggi layar
                                fit: BoxFit
                                    .cover, // Agar gambar menyesuaikan kontainer
                              ),
                            ),

                            // Bagian teks
                            Flexible(
                              flex:
                                  1, // Atur rasio fleksibilitas sesuai kebutuhan
                              child: Column(
                                mainAxisAlignment: MainAxisAlignment.start,
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: [
                                  Text(
                                    " Kegiatan Taman\n Pendidikan Al-qur'an\n (TPQ)\n",
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontSize:
                                          MediaQuery.of(context).size.width *
                                              0.045, // Sesuaikan ukuran font
                                      fontWeight: FontWeight.bold,
                                    ),
                                  ),
                                  Text(
                                    "  Kegiatan mengaji\n anak-anak rutin\n setiap hari Senin-Jum'at",
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontSize:
                                          MediaQuery.of(context).size.width *
                                              0.045, // Sesuaikan ukuran font
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ],
                        ),
                        // Row(
                        //   children: [
                        //     Column(
                        //       children: [
                        //         Image.asset(
                        //           "assets/agenda10.jpg",
                        //           width: 330,
                        //           height: 370,
                        //         ),
                        //       ],
                        //     ),
                        //     Column(
                        //       mainAxisAlignment: MainAxisAlignment.start,
                        //       children: [
                        //         Text(
                        //           " Kegiatan Musyawarah\n Pengurus Masjid\n",
                        //           textAlign: TextAlign.left,
                        //           style: TextStyle(
                        //               fontSize: 18.0,
                        //               fontWeight: FontWeight.bold),
                        //         ),
                        //         Text(
                        //           "  Kegiatan musyawarah\n mengenai penerapan\n manajemen masjid\n dengan aplikasi dizaman\n modern dan lebih inovatif",
                        //           textAlign: TextAlign.center,
                        //           style: TextStyle(
                        //             fontSize: 18.0,
                        //           ),
                        //         ),
                        //       ],
                        //     ),
                        //   ],
                        // ),
                        SizedBox(
                          height: 30,
                        ),
                        Row(
                          children: [
                            // Bagian gambar
                            Flexible(
                              flex:
                                  1, // Atur rasio fleksibilitas sesuai kebutuhan
                              child: Image.asset(
                                "assets/agenda10.jpg",
                                width: MediaQuery.of(context).size.width *
                                    0.4, // 40% dari lebar layar
                                height: MediaQuery.of(context).size.height *
                                    0.3, // 30% dari tinggi layar
                                fit: BoxFit
                                    .cover, // Agar gambar menyesuaikan kontainer
                              ),
                            ),

                            // Bagian teks
                            Flexible(
                              flex:
                                  1, // Atur rasio fleksibilitas sesuai kebutuhan
                              child: Column(
                                mainAxisAlignment: MainAxisAlignment.start,
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: [
                                  Text(
                                    " Kegiatan Musyawarah\n Pengurus Masjid\n",
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontSize:
                                          MediaQuery.of(context).size.width *
                                              0.045, // Sesuaikan ukuran font
                                      fontWeight: FontWeight.bold,
                                    ),
                                  ),
                                  Text(
                                    "  Kegiatan musyawarah\n mengenai penerapan\n manajemen masjid\n dengan aplikasi dizaman\n modern dan lebih inovatif",
                                    textAlign: TextAlign.center,
                                    style: TextStyle(
                                      fontSize:
                                          MediaQuery.of(context).size.width *
                                              0.045, // Sesuaikan ukuran font
                                    ),
                                  ),
                                ],
                              ),
                            ),
                          ],
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
