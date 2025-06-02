import 'dart:convert';

import 'package:flutter/material.dart';
// import 'package:e_parking/error.dart';
import 'package:webview_flutter/webview_flutter.dart';
import 'package:http/http.dart' as http;

import '../design_course/design_course_app_theme.dart';

class RekapPage extends StatefulWidget {
  @override
  _RekapPageState createState() => _RekapPageState();
}

class _RekapPageState extends State<RekapPage> {
  WebViewController _controller;

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Rekapitulasi Data'),
        backgroundColor: DesignCourseAppTheme.green,
      ),
      body: Center(
        child: WebView(
          initialUrl: 'http://031kota-resto-tambakbayan.ikc.co.id',

          javascriptMode: JavascriptMode.unrestricted,
          // onWebViewCreated: (WebViewController webViewController) {
          //   _controller = webViewController;
          // },
        ),
      ),
    );
  }
}
