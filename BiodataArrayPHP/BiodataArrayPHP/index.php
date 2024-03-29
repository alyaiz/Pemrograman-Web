<?php require('function.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zalfa.</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&family=Roboto:wght@300&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="style/reset.css" />
  <link rel="stylesheet" href="style/style.css" />
  <!-- Icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <nav>
    <div class="logo">
      <img src="image/logo.png" alt="logo" />
    </div>
    <div class="menu">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#family">family</a>
      <a href="#contact">contact</a>
    </div>
  </nav>
  <!-- PAGE 1 -->
  <section id="home" class="section-1">
    <div class="container-1">
      <img src="image/foto1.jpeg" alt="" />
      <h1>Zalfa Nirwana.</h1>
      <p>Mahasiswa Universitas Pembangunan Nasional “Veteran” Jawa Timur</p>
    </div>
  </section>
  <!-- PAGE 2 -->
  <section id="about" class="section-2">
    <div class="container-2">
      <div class="box-1">
        <img src="image/foto2.png" alt="" />
      </div>
      <div class="box-2">
        <h2>Discover</h2>
        <h1>About Me.</h1>
        <p>
          Hai! Nama saya Zalfa, saya mahasiswa Universitas Pembangunan
          Nasional “Veteran” Jawa Timur, Fakultas Ilmu Komputer, Jurusan
          Teknik Informatika. Saya anak kedua dari tiga bersaudara.
        </p>
        <div class="box-table">
          <table class="tabel-1">
            <tr>
              <td><b>Nama : </b><?php echo $array["nama"] ?></td>
            </tr>
            <tr>
              <td><b>No.HP : </b><?php echo $array["nohp"] ?></td>
            </tr>
            <tr>
              <td><b>Hobi : </b><?php echo $array["hobi"] ?></td>
            </tr>
            <tr>
              <td><b>Suku : </b><?php echo $array["suku"] ?></td>
            </tr>
          </table>
          <table class="tabel-2">
            <tr>
              <td><b>Umur : </b><?php age(); ?></td>
            </tr>
            <tr>
              <td><b>Alamat : </b><?php echo $array["alamat"] ?></td>
            </tr>
            <tr>
              <td><b>Agama : </b><?php echo $array["agama"] ?></td>
            </tr>
            <tr>
              <td><b>Status : </b><?php echo $array["status"] ?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- PAGE 3 -->
  <section id="family" class="section-3">
    <div class="container-3">
      <h1>Fam<span>ily.</span></h1>
      <div class="box-family">
        <div class="box-fml">
          <div class="box-content">
            <i class="bx bx-male"></i>
            <h2>AYAH</h2>
            <h3>Martum Angka Nirwana</h3>
          </div>
          <div class="box-content">
            <i class="bx bx-female"></i>
            <h2>BUNDA</h2>
            <h3>Erni Murtini Asih</h3>
          </div>
          <div class="box-content">
            <i class="bx bx-female"></i>
            <h2>KAKAK</h2>
            <h3>Aidah Qothrun N N N P</h3>
          </div>
          <div class="box-content">
            <i class="bx bx-female"></i>
            <h2>AKU</h2>
            <h3>Alya Izzah Zalfa R R N P</h3>
          </div>
          <div class="box-content">
            <i class="bx bx-child"></i>
            <h2>ADIK</h2>
            <h3>Almeera Qaireen A N</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- PAGE 4 -->
  <section id="contact" class="section-4">
    <div class="container-4">
      <h1>Con<span>tact.</span></h1>
      <div class="box-sm">
        <div class="box-sosmed">
          <a href="mailto:alyaizzahzalfa@gmail.com" type="button" class="button-contact email" target="_blank"><i class="bx bx-envelope"></i>
            <p>Email</p>
          </a>
          <a href="https://instagram.com/zalfanirwana" type="button" class="button-contact instagram" target="_blank"><i class="bx bxl-instagram"></i>
            <p>Instagram</p>
          </a>
          <a href="https://github.com/alyaiz" type="button" class="button-contact github" target="_blank"><i class="bx bxl-github"></i>
            <p>Github</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer>
    <p>copyright by <i class="bx bx-copyright"></i>zalfa 2023.</p>
  </footer>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>