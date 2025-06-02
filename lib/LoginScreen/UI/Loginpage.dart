import 'package:zakat_mobile/LoginScreen/Widgets/Body.dart';
import 'package:flutter/material.dart';

class LoginpageClass extends StatefulWidget {
  LoginpageClass({
    Key key,
  }) : super(key: key);

  @override
  _LoginpageClassState createState() => _LoginpageClassState();
}

class _LoginpageClassState extends State<LoginpageClass> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
          width: MediaQuery.of(context).size.width,
          height: MediaQuery.of(context).size.height,
          child: Center(child: buildBody(context))),
    );
  }
}
