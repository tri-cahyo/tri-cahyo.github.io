<!DOCTYPE html>
<html>

<head>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css" media="screen,projection" />

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/gallery.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- logo tab -->
  <title>Rumah Naung</title>
  <link rel="shortcut icon" type="<?= base_url(); ?>assets/image/png" href="<?= base_url(); ?>assets/img/favicon.png" />


  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
</head>

<body id="home" class="scrollspy">

  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="red darken-4">
      <div class="container">
        <div class="nav-wrapper">
          <a href="<?= base_url(); ?>" class="brand-logo"><img src="<?= base_url(); ?>assets/img/logo.png" style="width: 200px;"></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <!-- <li><a href="sass.html">Promo</a></li> -->
            <li><a href="<?= base_url(); ?>">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- side nav -->
  <ul class="sidenav grey darken-2" id="mobile-nav">
    <li><a href="home.html">Home</a></li>
    <li><a href="events.html">Events</a></li>
    <li><a href="provision.html">Provision</a></li>
  </ul>

  <!-- gallery -->
  <h3 class="light center white-text text-darken-3">Gallery Menu</h3>
  <main class="page-content">
    <style>
      <?php
      $a = 2;
      foreach ($data1 as $d) {
        $b = base_url('uploads/' . $d['gambar']); ?>.card:nth-child(<?= $a++ ?>):before {
        background-image: url("<?= $b ?>");
      }

      <?php
      } ?>
    </style>
    <?php
    foreach ($data as $data) {

    ?>



      <div class="card">
        <div class="content">
          <h2 class="title"><?= $data['nama'] ?> </h2>
          <p class="copy"><?= $data['deskripsi'] ?></p>
        </div>
      </div>
    <?php
    } ?>

  </main>

  <p class="footer white-text center"><i class="tiny material-icons">copyright</i> 2020 ROOT</p>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/index.js"></script>
</body>

</html>