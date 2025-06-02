import 'package:zakat_mobile/Declarations/Images/ImagesFiles.dart';
import 'package:zakat_mobile/GeneralWidgets/GWidgets.dart';
import 'package:flutter/material.dart';

Widget buildLogoField() => Container(
      // height: MediaQuery.of(context).size.height * 0.1,

      child: Center(
        child: Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            buildLogoImage(4),
            widthSpacer(10.00),
            buildLogoText("Aplikasi Zakat Mobile")
          ],
        ),
      ),
    );
Widget buildLogoImage(int imageIndex) => Container(
      width: 45,
      height: 45,
      child: Image.asset(
        loginPageImages[imageIndex],
        fit: BoxFit.contain,
      ),
    );
Widget buildLogoText(String logoText) => Text(
      logoText,
      style: TextStyle(fontSize: 25.00),
    );
