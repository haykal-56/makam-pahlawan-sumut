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
        <img src="https://sumutprov.go.id/images/untukmasyarakat/FLTobing.jpg" width="250" height="250" alt="...">
    </div>
    <br>
    <div class="container">
      <h3 class="col-sm-4" >Sejarah singkat</h3>
      <p class="col-sm-12 text-justify">
          School tot Opleiding van Inlandsche Artsen (STOVIA) selain menjadi salah satu sekolah kedokteran yang meluluskan pahlawan-pahlawan wabah penyakit di Jawa, STOVIA juga meluluskan dokter-dokter yang mempunyai peran besar dalam sejarah bangsa, salah satunya adalah Dr. Ferdinand Lumban Tobing. F.L. Tobing merupakan orang Batak kedua yang ditetapkan sebagai pahlawan nasional oleh pemerintah RI setelah Sisingamangaraja XII. Dr. F.L. Tobing merupakan dokter lulusan STOVIA asli putra Tapanuli yang dicintai rakyat Sumatera Utara.
      </p>
      <p class="col-sm-12 text-justify">
          F.L. Tobing lahir di Sibuluan, Tapanuli Tengah, Sumatera Utara, 19 Februari 1899. Ia adalah anak keempat dari sembilan bersaudara. Ayahnya bernama Herman Lumban Tobing dan ibunya bernama Laura Sitanggang. Pada usia 5 tahun, F.L. Tobing dibawa oleh ayah angkatnya yang bernama Jonathan Pasanea ke Depok dan disekolahkan di Sekolah Dasar Belanda (Europesche Lagere School). F.L. Tobing kemudian melanjutkan pendidikannya ke STOVIA. Semasa menempuh pendidikan di STOVIA, ia bergabung di organisasi Jong Batak, yang anggotanya merupakan siswa-siswa STOVIA yang berasal dari Sumatera Utara. Setelah lulus dari STOVIA pada tahun 1924, ia bekerja sebagai dokter bagian penyakit menular di Centrale Burgelijke Ziekenhuis (sekarang Rumah Sakit Tjipto Mangoenkoesoemo) Jakarta.
      </p>
      <p class="col-sm-12 text-justify">
          Dr. F.L. Tobing meninggal di Jakarta, 7 Oktober 1962 pada usia 63 tahun.
      </p>
      <h3 class="col-sm-4" >Lokasi pemakaman</h3>
      <p class="">
          Ia dimakamkan di Desa Kolang, Kabupaten Tapanuli Tengah, Sumatera Utara.
      </p>
      <div class="" id="map"></div>
    </div>
    <script>
    var map = L.map('map').setView([1.8914507,98.6556752], 15);
    var marker = L.marker([1.8914507,98.6556752]).addTo(map);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);
    </script>   
  </body>
</html>