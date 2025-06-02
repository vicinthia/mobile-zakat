import 'package:flutter/material.dart';
import 'package:zakat_mobile/Transaksi/shadaqah.dart';
import 'package:zakat_mobile/Transaksi/zakat_fitrah.dart';
import 'package:zakat_mobile/Transaksi/zakat_maal.dart';
import 'package:zakat_mobile/Transaksi/zakat_fidyah.dart';

import '../design_course/design_course_app_theme.dart';

class selectZakat extends StatefulWidget {
  final nominalFidyah;
  final nominalFitrah;

  selectZakat({this.nominalFitrah, this.nominalFidyah});
  @override
  State<selectZakat> createState() => _selectZakatState();
}

class _selectZakatState extends State<selectZakat> {
  @override
  Widget build(BuildContext context) {
    return DraggableScrollableSheet(
      expand: false,
      builder: (context, scrollController) {
        return Container(
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.only(
              topLeft: Radius.circular(20),
              topRight: Radius.circular(20),
            ),
          ),
          child: ListView(
            controller: scrollController,
            children: [
              SizedBox(height: 10),
              Center(
                child: Container(
                  width: 40,
                  height: 5,
                  decoration: BoxDecoration(
                    color: Colors.grey,
                    borderRadius: BorderRadius.circular(10),
                  ),
                ),
              ),
              SizedBox(height: 10),
              Padding(
                padding: const EdgeInsets.all(16.0),
                child: Text(
                  'Kategori Zakat',
                  style: TextStyle(
                    fontWeight: FontWeight.w600,
                    fontSize: 22,
                    letterSpacing: 0.27,
                    color: DesignCourseAppTheme.darkerText,
                  ),
                ),
              ),
              ListTile(
                leading: Icon(Icons.attach_money),
                title: Text('Zakat Fitrah'),
                onTap: () {
                  Navigator.of(context).push(
                    MaterialPageRoute(
                        builder: (context) => ZakatFitrahScreen()),
                  );
                },
              ),
              ListTile(
                leading: Icon(Icons.attach_money),
                title: Text('Zakat Maal'),
                onTap: () {
                  Navigator.of(context).push(
                    MaterialPageRoute(builder: (context) => ZakatMaalScreen()),
                  );
                },
              ),
              ListTile(
                leading: Icon(Icons.attach_money),
                title: Text('Fidyah'),
                onTap: () {
                  Navigator.of(context).push(
                    MaterialPageRoute(
                        builder: (context) => ZakatFidyahScreen()),
                  );
                },
              ),
              ListTile(
                leading: Icon(Icons.attach_money),
                title: Text('Shadaqah'),
                onTap: () {
                  Navigator.of(context).push(
                    MaterialPageRoute(builder: (context) => ShadaqahScreen()),
                  );
                },
              ),
            ],
          ),
        );
      },
    );
  }
}
