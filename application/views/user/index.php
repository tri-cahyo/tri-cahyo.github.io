<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&family=Lora&display=swap" rel="stylesheet">

  <!--Import materialize.css-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css" media="screen,projection" />



  <!-- CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- logo tab -->
  <title>Rumah Naung</title>
  <link rel="shortcut icon" type="<?= base_url() ?>assets/image/png" href="<?= base_url() ?>assets/img/favicon.png" />
</head>

<body id="home" class="home scrollspy">


  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="red darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo"><img src="<?= base_url() ?>assets/img/logo.png" style="width: 200px;" alt=""></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#gallery">Menu</a></li>
            <li><a href="<?= base_url('auth') ?>">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- side nav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">
        <p>About</p>
      </a></li>
    <li><a href="#services">
        <p>Services</p>
      </a></li>
    <li><a href="#gallery">
        <p>Menu</p>
      </a></li>
    <li><a href="#contact">
        <p>Contact Us</p>
      </a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?= base_url() ?>assets/img/bgg.jpg">
        <div class="caption left-align">
          <h4>Sajian kopi traditional dan beragam kudapan otentik</h4>
        </div>
      </li>
      <li>
        <img src="<?= base_url() ?>assets/img/head1.jpg">
        <div class="caption center-align">
          <h4>Sajian kopi traditional dan beragam kudapan otentik</h4>

        </div>
      </li>
      <li>
        <img src="<?= base_url() ?>assets/img/crop/3.JPG">
        <div class="caption right-align">
          <h4>Sajian kopi traditional dan beragam kudapan otentik</h4>

        </div>
      </li>
    </ul>
  </div>

  <!-- about us -->
  <section id="about" class="about scrollspy">

    <div class="about container">
      <div class="row">
        <h3 class="center white-text">About Us</h3>
        <div class="col m6 light white-text">
          <p>
            Naung Kopi merupakan sebuah rumah yang nyaman dan tempat kita menikmati kopi kesukaan. Naung digunakan sebagai nama tempat memiliki makna dari sebuah kata naung yaitu tempat yang berada dibawah sesuatu perlindungan, sesuatu yang menaungi – pelindung. Naung juga di buat dengan kenyaman tempat, pelayanan, dan rasa.
            Naung didesain dengan konsep yang menarik agar membuat pengunjung tak hanya menikmati kopi tetapi juga melebar dalam suasana yang melingkupinya. Naung memiliki metode kopi tradisional dengan memasukkan kopi bubuk ke dalam cangkir, lalu menuangkan air panas di atasnya dan biarkan dingin sementara ampasnya tenggelam ke dasar.
          </p>
        </div>
        <div class="col m6 light white-text">
          <p>
            Rumah Naung juga merupakan warung kopi tradisional yang sedikit berbeda dari Coffee Shop pada umumnya, tak hanya soal produk tetapi dari segi konsep yang di gunakan Rumah Naung ini menggabungkan antara desain interior dan eksterior yang dirancang dengan memperhatikan eye cathing sehingga dapat menarik pusat perhatian orang banyak dan terkesan tempat yang nyaman
          </p>
        </div>
      </div>
    </div>

  </section>

  <!-- paralax -->
  <div id="clients" class="parallax-container">
    <div class="parallax"><img src="<?= base_url() ?>assets/img/9.jpg"></div>
    <div class="container clients ">
      <div class="row">
        <div class="col m4 center">
        </div>
      </div>
    </div>
  </div>

  <!-- services -->
  <section id="services" class="services grey lighten-3 scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Our Services</h3>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">all_inclusive</i>
            <h5>Keramahan Tanpa Henti</h5>
            <p>Memberikan keramahan kepada setiap pelanggan tanpa henti</p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">alarm</i>
            <h5>Buka sampai ngantuk</h5>
            <p>Menemani kalian sampai ngantuk <br><br></p>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">directions_run</i>
            <h5>Tidak Lari <br><br></h5>
            <p>kami tidak akan pernah lari dari tanggung jawab <br></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section id="gallery" class="gallery scrollspy">
    <div class="container">
      <h3 class="light center white-text text-darken-3">Gallery Menu</h3>


      <div class="row">
        <?php
        $a = 0;
        foreach ($data as $dt) {
          $a++;
        ?>
          <div class="col m3 s12" style="margin-top: 20px;">
            <img src=" <?= base_url('uploads/' . $dt['gambar']); ?>" class="materialboxed responsive-img">
          </div>


          <?php
          if ($a % 4 == 0) { ?>
      </div>
      <div class="row">
    <?php
          }
        } ?>

      </div>

      <a href="<?= base_url('galeri') ?>" class="btnn waves-effect waves-light btn red ">See More <i class="material-icons left">photo_library</i></a>
    </div>
    </div>
  </section>

  <!--Contact Us-->
  <section id="contact" class="contact scrollspy">
    <div class="contact container">
      <h3 Class="light white-text text-darken-3 center">Contact us</h3>
      <div class="row">
        <div class="col m6 s12">
          <ul class="collection with-header">
            <li class="collection-header center ">
              <h4>Our Office</h4>
            </li>
            <li class="collection-item">Jl. Jend. Sudirman No.47a, Tj. Pandan, Kec. Tj. Pandan, Kab.Belitung, Kepulauan Bangka Belitung, Indonesia, 33412 <br>
              <a href="https://maps.app.goo.gl/aC8mqjiDEpQXigwMA" target="_blank" rel="noopener noreferrer"><i class="material-icons small green-text darken-2">map</i></a>
            </li>
          </ul>
        </div>
        <div class="col m6 s12">
          <ul class="collection with-header">
            <li class="collection-header center ">
              <h4>Social Media</h4>
            </li>
            <li class="collection-item">
              <div class="instagram">
                <img src="<?= base_url() ?>assets/img/ig.webp" style="width: 30px;" alt="">
                <a href="https://www.instagram.com/rumah.naung/?hl=id" target="_blank" rel="noopener noreferrer" class="brand-logo black-text" style="font-size: 25px;">@rumah.naung</a>
              </div>
              <div class="whatsapp" style="margin-top: 31px;">
                <img src="<?= base_url() ?>assets/img/wa.png" style="width: 30px;" alt="">
                <a href="https://api.whatsapp.com/send?phone=+6285703558130" target="_blank" rel="noopener noreferrer" class="brand-logo black-text" style="font-size: 25px;"> 085157131157</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- footer -->
    <p class="footer center"><i class="tiny material-icons">copyright</i> 2020 ROOT</p>
  </section>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="<?= base_url() ?>assets/js/materialize.min.js"></script>
  <script src="<?= base_url() ?>assets/js/index.js"></script>
  <script>
    // window.alert("Selamat Datang di Rumah Naung");
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>
    $(".col").slice(0, 14).show();
    $(".tombol").on("click", function() {
      $(".col:hidden").slice(0, 4).slideDown()
      if ($(".col:hidden").length == 0) {
        $(".tombol").fadeOut('slow')
      }
    })
  </script>
</body>

</html>