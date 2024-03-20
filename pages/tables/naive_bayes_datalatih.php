<?php require '../../function.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proses/hitung naive bayes data latih | Statistika Komputasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light position-fixed w-100">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <span class="brand-text font-weight-light">Sistem Pendukung <br>Keputusan Seleksi Ujian <br>Masuk Perguruan Tinggi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/yanuar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Moch. Yanuar Fitroni</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/tampilan_datalatih.php" class="nav-link">
                  <i class="fas fa-play nav-icon"></i>
                  <p>Data Latih</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/naive_bayes_datalatih.php" class="nav-link active">
                  <i class="fas fa-play nav-icon"></i>
                  <p>Hitung Data Latih</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/datauji.php" class="nav-link">
                  <i class="fas fa-play nav-icon"></i>
                  <p>Input Kasus/Data Uji</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Proses/hitung naive bayes data latih</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Notif-->
    <?php
    //data kelas
      //rekomendasi
    $rekom=mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi'");
    $totalrekom=mysqli_num_rows($rekom);
      //kurang
    $kurang=mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang'");
    $totalkurang=mysqli_num_rows($kurang);
      //total data
    $seldat=mysqli_query($conn,"SELECT * FROM datalatih");
    $totaldat=mysqli_num_rows($seldat);

    //Atribut
    // NILAI PMP
      //Nilai PMP rekomendasi
    $pmp1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_PMP='Kecil'");
    $totalpmp1=mysqli_num_rows($pmp1);

    $pmp2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_PMP='Cukup'");
    $totalpmp2=mysqli_num_rows($pmp2);

    $pmp3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_PMP='Sedang'");
    $totalpmp3=mysqli_num_rows($pmp3);

    $pmp4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_PMP='Besar'");
    $totalpmp4=mysqli_num_rows($pmp4);

      //Nilai PMP kurang
    $pmp5= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_PMP='Kecil'");
    $totalpmp5=mysqli_num_rows($pmp5);

    $pmp6= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_PMP='Cukup'");
    $totalpmp6=mysqli_num_rows($pmp6);

    $pmp7= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_PMP='Sedang'");
    $totalpmp7=mysqli_num_rows($pmp7);

    $pmp8= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_PMP='Besar'");
    $totalpmp8=mysqli_num_rows($pmp8);

    //NILAI B.INDO
      //Nilai B.Indo rekomendasi
    $indo1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ind='Kecil'");
    $totalindo1=mysqli_num_rows($indo1);

    $indo2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ind='Cukup'");
    $totalindo2=mysqli_num_rows($indo2);

    $indo3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ind='Sedang'");
    $totalindo3=mysqli_num_rows($indo3);

    $indo4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ind='Besar'");
    $totalindo4=mysqli_num_rows($indo4);

      //Nilai B.Indo kurang
    $indo5= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ind='Kecil'");
    $totalindo5=mysqli_num_rows($indo5);

    $indo6= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ind='Cukup'");
    $totalindo6=mysqli_num_rows($indo6);

    $indo7= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ind='Sedang'");
    $totalindo7=mysqli_num_rows($indo7);

    $indo8= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ind='Besar'");
    $totalindo8=mysqli_num_rows($indo8);

    //NILAI B.ING
      //Nilai B.Ing rekomendasi
    $ing1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ing='Kecil'");
    $totaling1=mysqli_num_rows($ing1);

    $ing2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ing='Cukup'");
    $totaling2=mysqli_num_rows($ing2);

    $ing3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ing='Sedang'");
    $totaling3=mysqli_num_rows($ing3);

    $ing4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ing='Besar'");
    $totaling4=mysqli_num_rows($ing4);

      //Nilai B.Indo kurang
    $ing5= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ing='Kecil'");
    $totaling5=mysqli_num_rows($ing5);

    $ing6= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ing='Cukup'");
    $totaling6=mysqli_num_rows($ing6);

    $ing7= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ing='Sedang'");
    $totaling7=mysqli_num_rows($ing7);

    $ing8= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ing='Besar'");
    $totaling8=mysqli_num_rows($ing8);

    //NILAI B.MAT
      //Nilai B.MAT rekomendasi
    $mat1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Mat='Kecil'");
    $totalmat1=mysqli_num_rows($mat1);

    $mat2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Mat='Cukup'");
    $totalmat2=mysqli_num_rows($mat2);

    $mat3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Mat='Sedang'");
    $totalmat3=mysqli_num_rows($mat3);

    $mat4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Mat='Besar'");
    $totalmat4=mysqli_num_rows($mat4);

      //Nilai B.Mat kurang
    $mat5= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Mat='Kecil'");
    $totalmat5=mysqli_num_rows($mat5);

    $mat6= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Mat='Cukup'");
    $totalmat6=mysqli_num_rows($mat6);

    $mat7= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Mat='Sedang'");
    $totalmat7=mysqli_num_rows($mat7);

    $mat8= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Mat='Besar'");
    $totalmat8=mysqli_num_rows($mat8);

    //Bekerja
      //bekerja rekomendasi
    $bek1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Bekerja='Ya'");
    $totalbek1=mysqli_num_rows($bek1);

    $bek2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Bekerja='Tidak'");
    $totalbek2=mysqli_num_rows($bek2);

      //bekerja kurang
    $bek3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Bekerja='Ya'");
    $totalbek3=mysqli_num_rows($bek3);

    $bek4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Bekerja='Tidak'");
    $totalbek4=mysqli_num_rows($bek4);

    //Organisasi
      //organisasi rekomendasi
    $org1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Organisasi='Ya'");
    $totalorg1=mysqli_num_rows($org1);

    $org2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Organisasi='Tidak'");
    $totalorg2=mysqli_num_rows($org2);

      //organisasi kurang
    $org3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Organisasi='Ya'");
    $totalorg3=mysqli_num_rows($org3);

    $org4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Organisasi='Tidak'");
    $totalorg4=mysqli_num_rows($org4);

    //Jarak rumah
      //jarak rekomendasi
    $Jark1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Jarak_Rumah='Jauh'");
    $totalJark1=mysqli_num_rows($Jark1);

    $Jark2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Jarak_Rumah='Dekat'");
    $totalJark2=mysqli_num_rows($Jark2);

      //jarak kurang
    $Jark3= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Jarak_Rumah='Jauh'");
    $totalJark3=mysqli_num_rows($Jark3);

    $Jark4= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Jarak_Rumah='Dekat'");
    $totalJark4=mysqli_num_rows($Jark4);

    //Probabilitas
      //kelas
    $porbrekom=($totalrekom/$totaldat);
    $porbkurang=($totalkurang/$totaldat);

      //PMP rekomendasi
    $probpmp1=($totalpmp1/$totalrekom);
    $probpmp2=($totalpmp2/$totalrekom);
    $probpmp3=($totalpmp3/$totalrekom);
    $probpmp4=($totalpmp4/$totalrekom);
      //PMP kurang
    $probpmp5=($totalpmp5/$totalkurang);
    $probpmp6=($totalpmp6/$totalkurang);
    $probpmp7=($totalpmp7/$totalkurang);
    $probpmp8=($totalpmp8/$totalkurang);

      //Ind rekomendasi
    $probind1=($totalindo1/$totalrekom);
    $probind2=($totalindo2/$totalrekom);
    $probind3=($totalindo3/$totalrekom);
    $probind4=($totalindo4/$totalrekom);
      //Ind kurang
    $probind5=($totalindo5/$totalkurang);
    $probind6=($totalindo6/$totalkurang);
    $probind7=($totalindo7/$totalkurang);
    $probind8=($totalindo8/$totalkurang);

      //Ing rekomendasi
    $probing1=($totaling1/$totalrekom);
    $probing2=($totaling2/$totalrekom);
    $probing3=($totaling3/$totalrekom);
    $probing4=($totaling4/$totalrekom);
      //Ing kurang
    $probing5=($totaling5/$totalkurang);
    $probing6=($totaling6/$totalkurang);
    $probing7=($totaling7/$totalkurang);
    $probing8=($totaling8/$totalkurang);

      //Mat rekomendasi
    $probmat1=($totalmat1/$totalrekom);
    $probmat2=($totalmat2/$totalrekom);
    $probmat3=($totalmat3/$totalrekom);
    $probmat4=($totalmat4/$totalrekom);
      //Mat kurang
    $probmat5=($totalmat5/$totalkurang);
    $probmat6=($totalmat6/$totalkurang);
    $probmat7=($totalmat7/$totalkurang);
    $probmat8=($totalmat8/$totalkurang);

      //Bekerja rekomendasi
    $probbek1=($totalbek1/$totalrekom);
    $probbek2=($totalbek2/$totalrekom);
      //Bekerja kurang
    $probbek3=($totalbek3/$totalkurang);
    $probbek4=($totalbek4/$totalkurang);

      //Bekerja rekomendasi
    $proborg1=($totalorg1/$totalrekom);
    $proborg2=($totalorg2/$totalrekom);
      //Bekerja kurang
    $proborg3=($totalorg3/$totalkurang);
    $proborg4=($totalorg4/$totalkurang);

      //Bekerja rekomendasi
    $probJark1=($totalJark1/$totalrekom);
    $probJark2=($totalJark2/$totalrekom);
      //Bekerja kurang
    $probJark3=($totalJark3/$totalkurang);
    $probJark4=($totalJark4/$totalkurang);
    ?>
    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">  
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Hasil</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2">Kelas</th>
                      <th colspan="2">Datanya</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rekomendasi: </td>
                      <th><?php echo number_format($porbrekom,4); ?></th>
                    </tr>
                    <tr>
                      <td>Kurang: </td>
                      <th><?php echo number_format($porbkurang,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Bekerja</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ya</td>
                      <th><?php echo number_format($probbek1,4); ?></th>
                      <th><?php echo number_format($probbek3,4); ?></th>
                    </tr>
                    <tr>
                      <td>Tidak</td>
                      <th><?php echo number_format($probbek2,4); ?></th>
                      <th><?php echo number_format($probbek4,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Organisaasi</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ya</td>
                      <th><?php echo number_format($proborg1,4); ?></th>
                      <th><?php echo number_format($proborg3,4); ?></th>
                    </tr>
                    <tr>
                      <td>Tidak</td>
                      <th><?php echo number_format($proborg2,4); ?></th>
                      <th><?php echo number_format($proborg4,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Jarak Rumah</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jauh</td>
                      <th><?php echo number_format($probJark1,4); ?></th>
                      <th><?php echo number_format($probJark3,4); ?></th>
                    </tr>
                    <tr>
                      <td>Dekat</td>
                      <th><?php echo number_format($probJark2,4); ?></th>
                      <th><?php echo number_format($probJark4,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Nilai PMP</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kecil</td>
                      <th><?php echo number_format($probpmp1,4); ?></th>
                      <th><?php echo number_format($probpmp5,4); ?></th>
                    </tr>
                    <tr>
                      <td>Cukup</td>
                      <th><?php echo number_format($probpmp2,4); ?></th>
                      <th><?php echo number_format($probpmp6,4); ?></th>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <th><?php echo number_format($probpmp3,4); ?></th>
                      <th><?php echo number_format($probpmp7,4); ?></th>
                    </tr>
                    <tr>
                      <td>Besar</td>
                      <th><?php echo number_format($probpmp4,4); ?></th>
                      <th><?php echo number_format($probpmp8,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Nilai B.Indo</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kecil</td>
                      <th><?php echo number_format($probind1,4); ?></th>
                      <th><?php echo number_format($probind5,4); ?></th>
                    </tr>
                    <tr>
                      <td>Cukup</td>
                      <th><?php echo number_format($probind2,4); ?></th>
                      <th><?php echo number_format($probind6,4); ?></th>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <th><?php echo number_format($probind3,4); ?></th>
                      <th><?php echo number_format($probind7,4); ?></th>
                    </tr>
                    <tr>
                      <td>Besar</td>
                      <th><?php echo number_format($probind4,4); ?></th>
                      <th><?php echo number_format($probind8,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Nilai B.Ing</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kecil</td>
                      <th><?php echo number_format($probing1,4); ?></th>
                      <th><?php echo number_format($probing5,4); ?></th>
                    </tr>
                    <tr>
                      <td>Cukup</td>
                      <th><?php echo number_format($probing2,4); ?></th>
                      <th><?php echo number_format($probing6,4); ?></th>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <th><?php echo number_format($probing3,4); ?></th>
                      <th><?php echo number_format($probing7,4); ?></th>
                    </tr>
                    <tr>
                      <td>Besar</td>
                      <th><?php echo number_format($probing4,4); ?></th>
                      <th><?php echo number_format($probing8,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <h4 class="card-title"><b>Probabilitas Nilai Matematika</b></h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">Atribut</th>
                      <th colspan="2" class="text-center">Datanya</th>
                    </tr>
                    <tr>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Kecil</td>
                      <th><?php echo number_format($probmat1,4); ?></th>
                      <th><?php echo number_format($probmat5,4); ?></th>
                    </tr>
                    <tr>
                      <td>Cukup</td>
                      <th><?php echo number_format($probmat2,4); ?></th>
                      <th><?php echo number_format($probmat6,4); ?></th>
                    </tr>
                    <tr>
                      <td>Sedang</td>
                      <th><?php echo number_format($probmat3,4); ?></th>
                      <th><?php echo number_format($probmat7,4); ?></th>
                    </tr>
                    <tr>
                      <td>Besar</td>
                      <th><?php echo number_format($probpmp4,4); ?></th>
                      <th><?php echo number_format($probpmp8,4); ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function() {
    $('#example').DataTable({
      "lengthMenu": [[5,10,15,20,25,-1],[5,10,15,20,25,"All"]]
    });
} );
</script>
</body>
</html>