import 'package:flutter/material.dart';
import 'package:zakat_mobile/config.dart';

class LayerTwo extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Container(
      // width: 399,
      width: MediaQuery.of(context).size.width * 0.9,
      height: 584,
      // height: MediaQuery.of(context).size.height * 0.9,
      decoration: BoxDecoration(
        color: layerTwoBg,
        borderRadius: BorderRadius.only(
          topLeft: Radius.circular(60.0),
          bottomRight: Radius.circular(60.0),
          bottomLeft: Radius.circular(60.0),
        ),
      ),
    );
  }
}
