<?php
require 'bases.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Comment CSS -->
    <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles">

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animasi.loading.css">

    <!-- Browser Component -->
    <title>CATFF@<?= $versi ?></title>
    <meta name="description" content="Config Antena Tangan (CAT) Untuk game FreeFire dan FreeFire MAX versi Terbaru" />
    <link rel="icon" href="assets/img/icon.jpeg" />
  </head>
  <body oncontextmenu="return false;" onselectstart="return false;" id="#home">
    <!-- Load Page -->
    <div class="animasi-loading">
      <div class="loading-play"></div>
    </div>
    <!-- Akhir Load Page -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="">BeerdeMods</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#comment">Comment</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <section id="config">
      <div class="container">
        <div class="row">
          <?php foreach ($bases as $base): ?>
            <div class="col-md-6">
              <div class="text-center mb-3">
                <img id="gambar" src="<?= $base["gambar"] ?>" alt="gambar"  />
              </div>
              <div id="ganjil">Game : <?= $base["apk"] ?></div>
              <div id="genap">Versi : <a class="text-primary" id="versi"><?= $base["versi"] ?></a></div>
              <div id="ganjil">Status : <img src="<?= $base["status"] ?>" alt="update" height="22px" /></div>
              <div id="genap">Developer : <?= $base["developer"] ?></div>
              <div id="ganjil">Kategori : <?= $base["kategori"] ?></div>
              <div id="genap">Item : <?= $base["item"] ?></div>
              <div id="ganjil">Ukuran : <?= $base["ukuran"] ?></div>
              <div id="genap">Jalur : <?= $base["jalur"] ?></div>
              <div class="text-center mt-4 bawah-3">
                <a href="<?= $base["href"] ?>" class="dwn" id="<?= $base["button"] ?>"><img src="assets/img/download.png" alt="download" width="25px" /> Unduh</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e8e8e8" fill-opacity="1">
        <animate attributeName="d"
          dur="10000ms"
          repeatCount="indefinite"
          values="M0,160L34.3,170.7C68.6,181,137,203,206,208C274.3,213,343,203,411,181.3C480,160,549,128,617,144C685.7,160,754,224,823,224C891.4,224,960,160,1029,144C1097.1,128,1166,160,1234,149.3C1302.9,139,1371,85,1406,58.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,160L34.3,149.3C68.6,139,137,117,206,138.7C274.3,160,343,224,411,213.3C480,203,549,117,617,74.7C685.7,32,754,32,823,53.3C891.4,75,960,117,1029,128C1097.1,139,1166,117,1234,101.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,128L34.3,128C68.6,128,137,128,206,117.3C274.3,107,343,85,411,101.3C480,117,549,171,617,197.3C685.7,224,754,224,823,202.7C891.4,181,960,139,1029,149.3C1097.1,160,1166,224,1234,245.3C1302.9,267,1371,245,1406,234.7L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,160L34.3,133.3C68.6,107,137,53,206,80C274.3,107,343,213,411,245.3C480,277,549,235,617,192C685.7,149,754,107,823,122.7C891.4,139,960,213,1029,234.7C1097.1,256,1166,224,1234,202.7C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,160L34.3,170.7C68.6,181,137,203,206,208C274.3,213,343,203,411,181.3C480,160,549,128,617,144C685.7,160,754,224,823,224C891.4,224,960,160,1029,144C1097.1,128,1166,160,1234,149.3C1302.9,139,1371,85,1406,58.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;">
        </animate>
      </path></svg>
    </section>
    <!-- Akhir Content -->

    <!-- About -->
    <section class="bg-abuabu" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-6 bawah-3">
            <h2 id="judul">Konfigurasi (Config)</h2>
            <p id="isi">
              Dalam sistem komunikasi atau komputer, konfigurasi sistem mengacu pada pengaturan masing-masing unit fungsionalnya, sesuai dengan sifat, jumlah, dan karakteristik utamanya. Seringkali, konfigurasi berkaitan dengan pilihan perangkat keras, perangkat lunak, firmware, dan dokumentasi.
            </p>
          </div>
          <div class="col-md-6 bawah-3">
            <h2 id="judul">Kecurangan (Cheat)</h2>
            <p id="isi">
              Kecurangan dalam permainan video melibatkan pemain permainan video yang menggunakan metode di luar kewajaran untuk menciptakan keuntungan atau kerugian terhadap alur permainan normal sehingga membuat permainan video tersebut makin mudah atau sulit dimainkan.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1">
        <animate attributeName="d"
          dur="10000ms"
          repeatCount="indefinite"
          values="M0,32L34.3,37.3C68.6,43,137,53,206,85.3C274.3,117,343,171,411,165.3C480,160,549,96,617,90.7C685.7,85,754,139,823,138.7C891.4,139,960,85,1029,85.3C1097.1,85,1166,139,1234,154.7C1302.9,171,1371,149,1406,138.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,224L34.3,218.7C68.6,213,137,203,206,213.3C274.3,224,343,256,411,234.7C480,213,549,139,617,106.7C685.7,75,754,85,823,117.3C891.4,149,960,203,1029,192C1097.1,181,1166,107,1234,101.3C1302.9,96,1371,160,1406,192L1440,224L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,224L34.3,202.7C68.6,181,137,139,206,133.3C274.3,128,343,160,411,197.3C480,235,549,277,617,250.7C685.7,224,754,128,823,117.3C891.4,107,960,181,1029,197.3C1097.1,213,1166,171,1234,149.3C1302.9,128,1371,128,1406,128L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,64L34.3,96C68.6,128,137,192,206,202.7C274.3,213,343,171,411,170.7C480,171,549,213,617,208C685.7,203,754,149,823,106.7C891.4,64,960,32,1029,37.3C1097.1,43,1166,85,1234,106.7C1302.9,128,1371,128,1406,128L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,32L34.3,37.3C68.6,43,137,53,206,85.3C274.3,117,343,171,411,165.3C480,160,549,96,617,90.7C685.7,85,754,139,823,138.7C891.4,139,960,85,1029,85.3C1097.1,85,1166,139,1234,154.7C1302.9,171,1371,149,1406,138.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;">
        </animate>
      </path></svg>
    </section>
    <!-- Akhir About -->

    <!-- Comment -->
    <section id="comment">
      <div class="container">
        <div class="row text-center bawah-3">
          <div class="col">
            <?= '<a href="https://wa.me/6287736465194?text=Assalamualaikum+Bang,+*CAT+v'.$versi.'*" target="_blank" class="btn btn-light btn-outline-dark mb-3">Help</a>' ?>
            <span id="slash">/</span>
            <a href="https://chat.whatsapp.com/Ks5hwhJ7iTf6mObes4QX9a" target="_blank" class="btn btn-light btn-outline-dark mb-3">Join GC</a>
          </div>
        </div>
        <div class="row bawah-3">
          <div class="col">
            <div id="HCB_comment_box"></div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1">
        <animate attributeName="d"
          dur="10000ms"
          repeatCount="indefinite"
          values="M0,32L34.3,58.7C68.6,85,137,139,206,144C274.3,149,343,107,411,96C480,85,549,107,617,144C685.7,181,754,235,823,240C891.4,245,960,203,1029,181.3C1097.1,160,1166,160,1234,160C1302.9,160,1371,160,1406,160L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,32L34.3,42.7C68.6,53,137,75,206,117.3C274.3,160,343,224,411,224C480,224,549,160,617,138.7C685.7,117,754,139,823,122.7C891.4,107,960,53,1029,53.3C1097.1,53,1166,107,1234,133.3C1302.9,160,1371,160,1406,160L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,32L34.3,53.3C68.6,75,137,117,206,112C274.3,107,343,53,411,53.3C480,53,549,107,617,160C685.7,213,754,267,823,245.3C891.4,224,960,128,1029,112C1097.1,96,1166,160,1234,197.3C1302.9,235,1371,245,1406,250.7L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,224L34.3,208C68.6,192,137,160,206,160C274.3,160,343,192,411,213.3C480,235,549,245,617,218.7C685.7,192,754,128,823,112C891.4,96,960,128,1029,165.3C1097.1,203,1166,245,1234,229.3C1302.9,213,1371,139,1406,101.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;
          
          M0,32L34.3,58.7C68.6,85,137,139,206,144C274.3,149,343,107,411,96C480,85,549,107,617,144C685.7,181,754,235,823,240C891.4,245,960,203,1029,181.3C1097.1,160,1166,160,1234,160C1302.9,160,1371,160,1406,160L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z;">
        </animate>
      </path></svg>
    </section>
    <!-- Akhir Comment -->

    <!-- Copyright -->
    <footer class="bg-primary">
      <div class="container text-center pb-4 text-light">
        Copyright <span class="text-danger">&copy;</span> 2021 by <a href="https://raw.githubusercontent.com/P677hl/cph-license/Tools/LICENSE" target="_blank" class="link-danger">PrayogaBRD</a>
      </div>
    </footer>
    <!-- Akhir Copyright -->
  </body>
  <!-- Loading JS -->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script>
		$(document).ready(function(){
			$(".animasi-loading").fadeOut();
		})
  </script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Comment JS -->
  <script type="text/javascript" id="hcb">
    /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%244LDBmVtTmSNVpxUE%2FbY0x0"+"&opts=16798&num=10&ts=1636885269924");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/
  </script>

  <!-- SweetAlert2 JS -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <script src="assets/js/myscript.sweetalert2.js"></script>
</html>