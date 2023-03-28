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
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <?php
      include('logo.php');
      ?>
      <div class="sidebar-wrapper">
      <?php include('sidebar.php')?>      
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Kelas</a>
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
              <div class="card">
              <div style="background-color: #16affb;" class="card-header">
                  <h4 class="card-title text-white">Tabel Kelas</h4>
                  <p class="card-category text-white"> Data Siswa berdasarkan nomor urut</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Kelas
                        </th>
                        <th>
                          Kompetensi keahlian
                        </th>
                       
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from kelas");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                          <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['nama_kelas']; ?></td>
                            <td><?php echo $d['kompetensi_keahlian']; ?></td>
                            <td>
                            <a href="kelas_edit.php?id=<?php echo $d['id_kelas']; ?>"> <i class="material-icons text-white">mode_edit</i></a>
                              <a style="margin-left:20px;" href="kelashapus.php?id=<?php echo $d['id_kelas']; ?>"><i class="material-icons text-white">delete</i></a>
                            </td>
                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <a href="print_kelas.php" target="_blank"><button style="background-color: #16affb;" class="btn btn-primary pull-right">Print</button></a>
            </div>
            <div class="col-md-12">
              <div class="card ">
              <div style="background-color: #16affb;" class="card-header">
                  <div class="card-text">
                    <h4 class="card-title" style="color: white;">Tambah Kelas Baru</h4>
                  </div>
                </div>
                <div class="card-body ">
                  <form method="POST" action="kelasinput.php" class="form-horizontal" autocomplete="off">

                    <div class="row">
                      <label class="col-sm-2 col-form-label">Nama Kelas</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="nama_kelas" class="form-control" placeholder="Ketikan Nama">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" name="kompetensi_keahlian" class="form-control" placeholder="Ketikan Username">
                        </div>
                      </div>
                    </div>
                    

                    
                    <button style="background-color: #16affb;" type="submit" class="btn btn-primary pull-right">Kirim Data</button>
                  </form>
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

</body>

</html>