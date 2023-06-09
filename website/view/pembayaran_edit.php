<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://lms.smkmerdekabdg.sch.id/assets/images/logo_sekolah.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboards.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>


<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <?php
      include('logo.php');
      ?>
      <div class="sidebar-wrapper">
        <?php include('sidebar.php') ?>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Pembayaran</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                
              </li>
      
              <li class="">
                <a class="nav-link" href="../../login/login.php">
                  <button style="background-color: #16affb;" class="btn btn-primary btn-round">Log Out</button>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card ">
              <div style="background-color: #16affb;" class="card-header">
                  <div class="card-text">
                    <h4 class="card-title" style="color: white;">Tambah Pembayaran Baru</h4>
                  </div>
                  <?php
                  include "koneksi.php";
                  $id = $_GET['id'];
                  $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                  $nomor = 1;
                  while ($data = mysqli_fetch_array($query_mysql)) {
                  ?>
                </div>
                <div class="card-body ">
                  <form method="POST" action="pembayaranupdate.php" class="form-horizontal" autocomplete="off">

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Petugas</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="id_pembayaran" value="<?php echo $data['id_pembayaran'] ?>">
                        <div class="form-group">
                          <select class="form-control" name="id_petugas" id="exampleFormControlSelect1">

                            <option style="color: black;" value="<?php echo $data['id_petugas'] ?>">Pilih Petugas</option>
                            <?php
                            include('koneksi.php');
                            $sql = mysqli_query($koneksi, "SELECT * FROM petugas");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                              <option style="color: black;" value="<?= $data['id'] ?>"><?= $data['nama_petugas'] ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">NISN</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <select class="form-control" name="nisn" id="exampleFormControlSelect1">
                            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                              <option style="color: black;" value="<?= $data['nisn'] ?>"><?= $data['nisn'] ?></option>
                            <?php } ?>
                            <?php
                            include('koneksi.php');
                            $sql = mysqli_query($koneksi, "SELECT * FROM siswa");
                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                              <option style="color: black;" value="<?= $data['nisn'] ?>"><?= $data['nisn'] ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <select class="form-control" name="tgl_bayar" id="exampleFormControlSelect1">
                            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                              <option style="color: black;" value="<?php echo $data['tgl_bayar'] ?>"><?php echo $data['tgl_bayar'] ?></option>
                            <?php } ?>
                            <?php
                            for ($a = 1; $a <= 31; $a += 1) {
                              echo "<option style='color: black;' value=$a> $a </option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Bulan Bayar</label>
                      <div class="col-sm-10">
                        <div class="form-group">

                          <select class="form-control" name="bulan_dibayar" id="exampleFormControlSelect1">
                            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                              <option style="color: black;" selected="selected" value="<?php echo $data['bulan_dibayar'] ?>"><?php echo $data['bulan_dibayar'] ?></option>
                            <?php } ?>
                            <?php
                            $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                            $jlh_bln = count($bulan);
                            for ($c = 0; $c < $jlh_bln; $c += 1) {
                              echo "<option style='color: black;' value=$bulan[$c]> $bulan[$c] </option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Tahun Bayar</label>
                      <div class="col-sm-10">
                        <div class="form-group">

                          <select class="form-control" name="tahun_bayar" id="exampleFormControlSelect1">
                            <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                              <option style='color: black;' selected="selected" value='<?php echo $data['tahun_bayar'] ?>'>Pilih Tahun</option>
                            <?php } ?>
                            <?php
                            $now = date('Y');

                            for ($a = $now; $a <= $now; $a++) {

                              echo "<option  style='color: black;' value='$a'>$a</option>";
                            }

                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">SPP</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="id_spp" id="exampleFormControlSelect1">
                        <?php
                            include "koneksi.php";
                            $id = $_GET['id'];
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                            $nomor = 1;
                            while ($data = mysqli_fetch_array($query_mysql)) {
                            ?>
                        <option style='color: black;' selected="selected" value='<?php echo $data['id_spp'] ?>'>Pilih SPP</option>
                        <?php } ?>
                          <?php
                          include "koneksi.php";
                          $id = $_GET['id'];
                          $query_mysql = mysqli_query($koneksi, "SELECT * FROM spp");
                          $nomor = 1;
                          while ($data = mysqli_fetch_array($query_mysql)) {
                          ?>
                            

                            <option style="color: black;" value="<?= $data['id_spp'] ?>"><?= $data['nominal'] ?> / <?= $data['tahun'] ?></option>
                          <?php
                          }
                          ?>
                        </select>


                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Jumlah Bayar</label>
                      <div class="col-sm-10">
                        <?php
                        include "koneksi.php";
                        $id = $_GET['id'];
                        $query_mysql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id'");
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($query_mysql)) {
                        ?>
                          <div class="form-group">
                            <input type="text" value="<?= $data['jumlah_bayar'] ?>" class="form-control" name="jumlah_bayar">
                          </div>
                        <?php } ?>
                      </div>
                    </div>



                    <button style="background-color: #16affb;" type="submit" class="btn btn-primary pull-right">Kirim Data</button>
                  </form>
                <?php } ?>
                </div>
              </div>

            </div>
           
          </div>
        </div>
      </div>
      <?php include ('footer.php')?>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
     
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>