import 'dart:convert';
import 'dart:ffi';

import 'package:flutter/material.dart';
import 'package:flutter/rendering.dart';
import 'package:zakat_mobile/config.dart';
import 'package:http/http.dart' as http;
import 'package:cool_alert/cool_alert.dart';

import '../api/link.dart';
import '../design_course/home_design_course.dart';

class LayerThree extends StatefulWidget {
  @override
  State<LayerThree> createState() => _LayerThreeState();
}

class _LayerThreeState extends State<LayerThree> {
  TextEditingController usernameInput = new TextEditingController();
  TextEditingController passwordInput = new TextEditingController();
  String alert = "Siap Login";
  bool passenable = true;
  String username, password, name;

  void prosesLogin() async {
    // buat sebuah variable untuk menampung proses request
    final dataLogin = await http.post(
        Uri.parse(ApiConstants.baseUrl + "api/admin/mylogin"),
        body: {"username": usernameInput.text, "password": passwordInput.text});

    var dataAdmin = json.decode(dataLogin.body);

    if (dataAdmin.length < 1) {
      // jika user tidak ada, tampilkan alert data user tidak ada
      setState(() {
        alert = "Data User Tidak Dikenali";
      });
      CoolAlert.show(
          context: context,
          type: CoolAlertType.error,
          title: "Gagal Masuk ",
          text:
              "Username / Password Anda Salah!\n(Jika lupa bisa hubungi admin IKC)",
          confirmBtnText: "Ok");
      clearValues();
    } else {
      // jika data user ada set username dan password

      setState(() {
        username = dataAdmin[0]["username"];
        password = dataAdmin[0]["password"];
      });

      Navigator.of(context).push(
          MaterialPageRoute(builder: (builder) => DesignCourseHomeScreen()));
    }
  }

  clearValues() {
    usernameInput.text = '';
    passwordInput.text = '';
  }

  @override
  Widget build(BuildContext context) {
    bool isChecked = false;

    // return Container(
    //   height: 584,
    //   width: MediaQuery.of(context).size.width * 0.9,
    //   child: Stack(
    //     children: <Widget>[
    //       Positioned(
    //         left: 59,
    //         top: 99,
    //         child: Text(
    //           'Username',
    //           style: TextStyle(
    //               fontFamily: 'Poppins-Medium',
    //               fontSize: 24,
    //               fontWeight: FontWeight.w500),
    //         ),
    //       ),
    //       Positioned(
    //           left: 59,
    //           top: 129,
    //           child: Container(
    //             width: 310,
    //             child: TextFormField(
    //               controller: usernameInput,
    //               decoration: InputDecoration(
    //                 border: UnderlineInputBorder(),
    //                 hintText: 'Enter User ID or Email',
    //                 hintStyle: TextStyle(color: hintText),
    //               ),
    //             ),
    //           )),
    //       Positioned(
    //         left: 59,
    //         top: 199,
    //         child: Text(
    //           'Password',
    //           style: TextStyle(
    //               fontFamily: 'Poppins-Medium',
    //               fontSize: 24,
    //               fontWeight: FontWeight.w500),
    //         ),
    //       ),
    //       Positioned(
    //           left: 59,
    //           top: 229,
    //           child: Container(
    //             width: 310,
    //             child: TextFormField(
    //               controller: passwordInput,
    //               obscureText: passenable,
    //               decoration: InputDecoration(
    //                 border: UnderlineInputBorder(),
    //                 hintText: 'Enter Password',
    //                 hintStyle: TextStyle(color: hintText),
    //                 suffix: IconButton(
    //                   onPressed: () {
    //                     //add Icon button at end of TextField
    //                     setState(() {
    //                       //refresh UI
    //                       if (passenable) {
    //                         //if passenable == true, make it false
    //                         passenable = false;
    //                       } else {
    //                         passenable =
    //                             true; //if passenable == false, make it true
    //                       }
    //                     });
    //                   },
    //                   icon: Icon(passenable == true
    //                       ? Icons.remove_red_eye
    //                       : Icons.password),
    //                 ),
    //               ),
    //             ),
    //           )),
    //       Positioned(
    //           right: 60,
    //           top: 296,
    //           child: Text(
    //             'Masuk Aplikasi',
    //             style: TextStyle(
    //                 color: forgotPasswordText,
    //                 fontSize: 16,
    //                 fontFamily: 'Poppins-Medium',
    //                 fontWeight: FontWeight.w600),
    //           )),
    //       Positioned(
    //           top: 365,
    //           right: 60,
    //           child: GestureDetector(
    //             onTap: () {
    //               prosesLogin();
    //             },
    //             child: Container(
    //               width: 99,
    //               height: 35,
    //               decoration: BoxDecoration(
    //                 color: signInButton,
    //                 borderRadius: BorderRadius.only(
    //                     topLeft: Radius.circular(20),
    //                     bottomRight: Radius.circular(20)),
    //               ),
    //               child: Padding(
    //                 padding: const EdgeInsets.only(top: 6.0),
    //                 child: Text(
    //                   'Sign In',
    //                   textAlign: TextAlign.center,
    //                   style: TextStyle(
    //                       color: Colors.white,
    //                       fontSize: 18,
    //                       fontFamily: 'Poppins-Medium',
    //                       fontWeight: FontWeight.w400),
    //                 ),
    //               ),
    //             ),
    //           )),
    //     ],
    //   ),
    // );

    return Container(
      height: 584,
      width: MediaQuery.of(context).size.width * 0.9,
      child: SingleChildScrollView(
        child: Column(
          children: <Widget>[
            SizedBox(height: 50), // Add some space at the top
            Padding(
              padding: const EdgeInsets.only(left: 30),
              child: Align(
                alignment: Alignment.topLeft,
                child: Text(
                  'Username',
                  style: TextStyle(
                    fontFamily: 'Poppins-Medium',
                    fontSize: 24,
                    fontWeight: FontWeight.w500,
                  ),
                ),
              ),
            ),
            SizedBox(height: 8), // Space between label and input
            Container(
              width:
                  MediaQuery.of(context).size.width * 0.8, // Responsive width
              child: TextFormField(
                controller: usernameInput,
                decoration: InputDecoration(
                  border: UnderlineInputBorder(),
                  hintText: 'Enter User ID or Email',
                  hintStyle: TextStyle(color: hintText),
                ),
              ),
            ),
            SizedBox(height: 20), // Space before password label
            Padding(
              padding: const EdgeInsets.only(left: 30),
              child: Align(
                alignment: Alignment.topLeft,
                child: Text(
                  'Password',
                  style: TextStyle(
                    fontFamily: 'Poppins-Medium',
                    fontSize: 24,
                    fontWeight: FontWeight.w500,
                  ),
                ),
              ),
            ),
            SizedBox(height: 8), // Space between label and input
            Container(
              width:
                  MediaQuery.of(context).size.width * 0.8, // Responsive width
              child: TextFormField(
                controller: passwordInput,
                obscureText: passenable,
                decoration: InputDecoration(
                  border: UnderlineInputBorder(),
                  hintText: 'Enter Password',
                  hintStyle: TextStyle(color: hintText),
                  suffixIcon: IconButton(
                    onPressed: () {
                      setState(() {
                        passenable = !passenable; // Toggle password visibility
                      });
                    },
                    icon: Icon(
                        passenable ? Icons.remove_red_eye : Icons.password),
                  ),
                ),
              ),
            ),
            SizedBox(height: 50), // Space before button
            Padding(
              padding: const EdgeInsets.only(right: 40),
              child: Align(
                alignment: Alignment.bottomRight,
                child: GestureDetector(
                  onTap: () {
                    prosesLogin();
                  },
                  child: Container(
                    width: 150, // Responsive width
                    height: 45,
                    decoration: BoxDecoration(
                      color: signInButton,
                      borderRadius: BorderRadius.only(
                          topLeft: Radius.circular(20),
                          bottomRight: Radius.circular(20)),
                    ),
                    child: Center(
                      child: Text(
                        'Sign In',
                        style: TextStyle(
                          color: Colors.white,
                          fontSize: 18,
                          fontFamily: 'Poppins-Medium',
                          fontWeight: FontWeight.w400,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            SizedBox(height: 20), // Space before password label
            Padding(
              padding: const EdgeInsets.only(left: 30),
              child: Align(
                alignment: Alignment.topLeft,
                child: Text(
                  'Supported by',
                  style: TextStyle(
                    fontFamily: 'Poppins-Medium',
                    fontSize: 16,
                  ),
                ),
              ),
            ),
            SizedBox(height: 40),
            Center(
              child: Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Align(
                    alignment: Alignment.topCenter,
                    child: Container(
                      height: 150.0, // Atur tinggi gambar
                      width: 180.0, // Atur lebar gambar
                      child:
                          Image.asset('assets/mbkm.jpg'), // Space after button
                    ),
                  ),
                  // SizedBox(width: 10),
                  Align(
                    alignment: Alignment.topCenter,
                    child: Container(
                      height: 150.0, // Atur tinggi gambar
                      width: 180.0, // Atur lebar gambar
                      child: Image.asset(
                          'assets/ubhara.png'), // Space after button
                    ),
                  ),
                  // Align(
                  //   alignment: Alignment.topCenter,
                  //   child: Container(
                  //     height: 150.0, // Atur tinggi gambar
                  //     width: 180.0, // Atur lebar gambar
                  //     child:
                  //         Image.asset('assets/vicin.png'), // Space after button
                  //   ),
                  // ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
