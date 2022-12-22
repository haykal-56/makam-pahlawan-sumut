<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
    
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
  </head>
  <style>
    #map{
      height: 80vh;
    }
  </style>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Makam Pahlawan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Daftar Pahlawan
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item text-dark" href="sisingamangaraja.php">1. Sisingamangaraja XII</a></li>
                <li><a class="dropdown-item text-dark" href="tengku.php">2. Tengku Amir Hamzah</a></li>
                <li><a class="dropdown-item text-dark" href="ferdinand.php">3. Dr. Ferdinand Lumban Tobing</a></li>
                <li><a class="dropdown-item text-dark" href="zainul.php">4. K. H. Zainul Arifin</a></li>
                <li><a class="dropdown-item text-dark" href="pandjaitan.php">5. Mayjen TNI Anm. D. I. Pandjaitan</a></li>
              </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <br>
    <div class="text-center">
        <img src="https://sumutprov.go.id/images/untukmasyarakat/DIPanjaitan.jpg" width="250" height="250" alt="...">
    </div>
    <br>
    <div class="container">
      <h3 class="col-sm-4" >Sejarah singkat</h3>
      <p class="col-sm-12 text-justify">
          Mayor Jenderal TNI Anumerta Donald Isaac Panjaitan lahir di Balige, Tapanuli, 9 Juni 1925. Pendidikan formal diawali dari Sekolah Dasar, kemudian masuk Sekolah Menengah Pertama, dan terakhir di Sekolah Menengah Atas. Ketika ia tamat Sekolah Menengah Atas, Indonesia sedang dalam pendudukan Jepang. Sehingga ketika masuk menjadi anggota militer ia harus mengikuti latihan Gyugun. Selesai latihan, ia ditugaskan sebagai anggota Gyugun di Pekanbaru, Riau hingga Indonesia memproklamasikan kemerdekaannya. Ketika Indonesia sudah meraih kemerdekaan, ia bersama para pemuda lainnya membentuk Tentara Keamanan Rakyat (TKR) yang kemudian menjadi TNI.
      </p>
      <p class="col-sm-12 text-justify">
          Di TKR, ia pertama kali ditugaskan menjadi komandan batalyon, kemudian menjadi Komandan Pendidikan Divisi IX/Banteng di Bukittinggi pada tahun 1948. Seterusnya menjadi Kepala Staf Umum IV (Supplay) Komandemen Tentara Sumatera. Dan ketika Pasukan Belanda melakukan Agresi Militernya yang Ke II, ia diangkat menjadi Pimpinan Perbekalan Perjuangan Pemerintah Darurat Republik Indonesia (PDRI).
      </p>
      <p class="col-sm-12 text-justify">
          Seiring dengan berakhirnya Agresi Militer Belanda ke II, Indonesia pun memperoleh pengakuan kedaulatan. Panjaitan sendiri kemudian diangkat menjadi Kepala Staf Operasi Tentara dan Teritorium (T&T) I Bukit Barisan di Medan. Selanjutnya dipindahkan lagi ke Palembang menjadi Kepala Staf T & T II/Sriwijaya.
      </p>
      <p class="col-sm-12 text-justify">
          Dia kemudian mencoba melarikan diri dan ditembak mati. mayatnya dimasukkan ke dalam truk dan dibawa kembali ke markas gerakan itu di Lubang Buaya. Kemudian, tubuh dan orang-orang dari rekan-rekannya dibunuh tersembunyi di sebuah sumur tua. Mayat ditemukan pada tanggal 4 Oktober, dan semua diberi pemakaman kenegaraan pada hari berikutnya. Panjaitan mendapat promosi anumerta kepada Jenderal Mayor dan diberi gelar Pahlawan Revolusi.	
      </p>
      <h3 class="col-sm-12 text-justify" >Lokasi pemakaman</h3>
      <p class="">
          Ia dimakamkan di Taman Makam Pahlawan (TMP) Kalibata, Jakarta.
      </p>
      <div id="map"></div>
    </div>
    <script>
    var map = L.map('map').setView([-6.256917, 106.845412], 15);
    var marker = L.marker([-6.256917, 106.845412]).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
</script>
</body>
</html>