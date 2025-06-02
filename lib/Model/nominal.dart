import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import '../api/link.dart';

class m_Harga {
  String id;
  String fidyah;
  String fitrah;
  String maal;
  String emas;

  m_Harga({this.id, this.fidyah, this.fitrah, this.maal, this.emas});

  factory m_Harga.createm_Harga(Map<String, dynamic> object) {
    return m_Harga(
        id: object['id'].toString(),
        fidyah: object['fidyah'].toString(),
        fitrah: object['fitrah'].toString(),
        maal: object['maal'].toString(),
        emas: object['emas'].toString());
  }

  static Future<m_Harga> connectToAPI() async {
    // String apiURL = "http://192.168.1.172/server_ticket/api/harga" + id;

    var apiResult = await http
        .get(Uri.parse(ApiConstants.baseUrl + "api/zakat/masternominal"));
    var jsonObject = json.decode(apiResult.body);
    var userHarga = (jsonObject as Map<String, dynamic>)['data'];

    return m_Harga.createm_Harga(userHarga[0]);
  }
}
