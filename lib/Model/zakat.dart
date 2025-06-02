class Zakat {
  final String imageUrl;
  final String nama_mustahik;
  final String alamat_mus;
  final String kode_bagi;
  final String ket_mustahik;
  final String tgl_bagi;
  final String total_bagi;

  Zakat(
      {this.imageUrl,
      this.nama_mustahik,
      this.alamat_mus,
      this.kode_bagi,
      this.ket_mustahik,
      this.tgl_bagi,
      this.total_bagi});

  factory Zakat.fromJson(Map<String, dynamic> json) {
    return Zakat(
      imageUrl: json['foto_bukti'],
      nama_mustahik: json['nama_mustahik'],
      alamat_mus: json['alamat_mus'],
      kode_bagi: json['kode_bagi'],
      ket_mustahik: json['ket_mustahik'],
      tgl_bagi: json['tgl_bagi'],
      total_bagi: json['total_bagi'],
    );
  }
}
