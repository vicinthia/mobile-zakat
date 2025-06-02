class Category {
  Category({
    this.title = '',
    this.imagePath = '',
    this.lessonCount = '',
    this.money = 0,
    this.rating = 0.0,
    this.route = '',
  });

  String title;
  String lessonCount;
  int money;
  double rating;
  String imagePath;
  String route;

  static List<Category> categoryList = <Category>[
    Category(
      imagePath: 'assets/design_course/pic.jpg',
      title: 'Profil Masjid',
      lessonCount: 'visi & misi',
      money: 25,
      rating: 4.3,
      route: '/profilmasjid',
    ),
    Category(
      imagePath: 'assets/design_course/pic3.jpeg',
      title: 'Agenda Masjid',
      lessonCount: "kegiatan",
      money: 18,
      rating: 4.6,
      route: '/agendamasjid',
    ),
    Category(
      imagePath: 'assets/design_course/pic6.jpg',
      title: 'Bidang Masjid',
      lessonCount: 'Sekretariat',
      money: 25,
      rating: 4.3,
      route: '/bidangmasjid',
    ),
    Category(
      imagePath: 'assets/design_course/pic2.jpg',
      title: 'Kontak Masjid',
      lessonCount: "kontak kami",
      money: 18,
      rating: 4.6,
      route: '/kontakmasjid',
    ),
  ];

  static List<Category> popularCourseList = <Category>[
    Category(
      imagePath: 'assets/design_course/zakat.png',
      title: 'Transaksi Zakat',
      lessonCount: '',
      money: 25,
      rating: 4.8,
    ),
    Category(
      imagePath: 'assets/design_course/kalkulator.png',
      title: 'Kalkulator Zakat',
      lessonCount: '',
      money: 208,
      rating: 4.9,
    ),
    Category(
      imagePath: 'assets/design_course/riwayat.png',
      title: 'Riwayat Transaksi',
      lessonCount: '',
      money: 25,
      rating: 4.8,
    ),
    Category(
      imagePath: 'assets/design_course/bagi.png',
      title: 'Pembagian Zakat',
      lessonCount: '',
      money: 208,
      rating: 4.9,
    ),
    Category(
      imagePath: 'assets/design_course/bagi_zakat.png',
      title: 'Riwayat Pembagian Zakat',
      lessonCount: '',
      money: 208,
      rating: 4.9,
    ),
    Category(
      imagePath: 'assets/design_course/rekapan.png',
      title: 'Rekapitulasi Zakat',
      lessonCount: '',
      money: 208,
      rating: 4.9,
    ),
  ];
}
