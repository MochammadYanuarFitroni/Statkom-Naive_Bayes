<?php require '../../function.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Latih | Statistika Komputasi</title>
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
                <a href="../tables/naive_bayes_datalatih.php" class="nav-link">
                  <i class="fas fa-play nav-icon"></i>
                  <p>Hitung Data Latih</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/datauji.php" class="nav-link active">
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
            <h1>Data Uji/Inputan Kasus</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Notif-->
    <?php
    if (isset($_POST["submit"])) {
      $nama_calon = $_POST['nama_calon'];
      $PMP = $_POST['PMP'];
      $ind = $_POST['Indo'];
      $ing = $_POST['Ing'];
      $mat = $_POST['Mat'];
      $bekerja = $_POST['Bekerja'];
      $organisasi = $_POST['Organisasi'];
      $jarak_rumah = $_POST['Jarak_Rumah'];

    //Hasil
      //Rekomendasi
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
    $pmp1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_PMP='$PMP'");
    $totalpmp1=mysqli_num_rows($pmp1);
      //Nilai PMP kurang
    $pmp2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_PMP='$PMP'");
    $totalpmp2=mysqli_num_rows($pmp2);

    // NILAI B.Indo
      //Nilai B.Indo rekomendasi
    $ind1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ind='$ind'");
    $totalind1=mysqli_num_rows($ind1);
      //Nilai B.Indo kurang
    $ind2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ind='$ind'");
    $totalind2=mysqli_num_rows($ind2);

     // NILAI B.Ing
      //Nilai B.Ing rekomendasi
    $ing1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Ing='$ing'");
    $totaling1=mysqli_num_rows($ing1);
      //Nilai B.Ing kurang
    $ing2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Ing='$ing'");
    $totaling2=mysqli_num_rows($ing2);

     // NILAI MTK
      //Nilai MTK rekomendasi
    $mat1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND N_Mat='$mat'");
    $totalmat1=mysqli_num_rows($mat1);
      //Nilai MTK kurang
    $mat2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND N_Mat='$mat'");
    $totalmat2=mysqli_num_rows($mat2);

     // Bekerja
      //bekerja rekomendasi
    $bek1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Bekerja='$bekerja'");
    $totalbek1=mysqli_num_rows($bek1);
      //bekerja kurang
    $bek2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Bekerja='$bekerja'");
    $totalbek2=mysqli_num_rows($bek2);

    // Organisasi
      //Organisasi rekomendasi
    $org1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Organisasi='$organisasi'");
    $totalorg1=mysqli_num_rows($org1);
      //Organisasi kurang
    $org2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Organisasi='$organisasi'");
    $totalorg2=mysqli_num_rows($org2);

    // jarak rumah
      //jarak rumah rekomendasi
    $Jark1= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Rekomendasi' AND Jarak_Rumah='$jarak_rumah'");
    $totalJark1=mysqli_num_rows($Jark1);
      //jarak rumah kurang
    $Jark2= mysqli_query($conn,"SELECT * FROM datalatih WHERE IPK='Kurang' AND Jarak_Rumah='$jarak_rumah'");
    $totalJark2=mysqli_num_rows($Jark2);

    //Probabilitas
      //hasil
    $porbrekom=($totalrekom/$totaldat);
    $porbkurang=($totalkurang/$totaldat);

      //PMP
    $probpmpr=($totalpmp1/$totalrekom);
    $probpmpk=($totalpmp2/$totalkurang);

      //Indo
    $probindr=($totalind1/$totalrekom);
    $probindk=($totalind2/$totalkurang);

     //Ing
    $probingr=($totaling1/$totalrekom);
    $probingk=($totaling2/$totalkurang);

     //mat
    $probmatr=($totalmat1/$totalrekom);
    $probmatk=($totalmat2/$totalkurang);

     //Bekerja
    $probbekr=($totalbek1/$totalrekom);
    $probbekk=($totalbek2/$totalkurang);

     //Organisasi
    $proborgr=($totalorg1/$totalrekom);
    $proborgk=($totalorg2/$totalkurang);

     //Jarak rumah
    $probJarkr=($totalJark1/$totalrekom);
    $probJarkk=($totalJark2/$totalkurang);

    //Prediksi
      //rekomendasi
    $prerekom=($probpmpr*$probindr*$probingr*$probmatr*$probbekr*$proborgr*$probJarkr);
    $brekom=number_format($prerekom,5);
      //Kurang
    $prekurang=($probpmpk*$probindk*$probingk*$probmatk*$probbekk*$proborgk*$probJarkk);
    $bkurang=number_format($prekurang,5);

    //membandingkan
    if ($prerekom >= $prekurang) {
      $hasil = "Rekomendasi";
    }
    else{
      $hasil = "Kurang";
    }

    //insert
      $query=mysqli_query($conn, "INSERT INTO datauji VALUES ('', '$nama_calon', '$PMP', '$ind', '$ing', '$mat', '$bekerja', '$organisasi', '$jarak_rumah', '$brekom', '$bkurang', '$hasil')") or die(mysqli_error($conn));
    } 
    ?>
    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">  
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Hitung data uji/Input kasus</h5>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <form action="" method="post">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="Nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_calon" placeholder="Masukkan Nama Calon" id="Nama" required>
                      </div>
                      <div class="form-group">
                        <label for="PMP">Nilai PMP</label>
                        <select class="form-control" name="PMP" id="PMP" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Nilai PMP</option>
                          <option value="Kecil">Kecil</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Sedang">Sedang</option>
                          <option value="Besar">Besar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Indo">Nilai B.Indo</label>
                        <select class="form-control" name="Indo" id="Indo" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Nilai B.Indo</option>
                          <option value="Kecil">Kecil</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Sedang">Sedang</option>
                          <option value="Besar">Besar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Ing">Nilai B.Ing</label>
                        <select class="form-control" name="Ing" id="Ing" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Nilai B.Ing</option>
                          <option value="Kecil">Kecil</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Sedang">Sedang</option>
                          <option value="Besar">Besar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Mat">Nilai Mat</label>
                        <select class="form-control" name="Mat" id="Mat" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Nilai MTK</option>
                          <option value="Kecil">Kecil</option>
                          <option value="Cukup">Cukup</option>
                          <option value="Sedang">Sedang</option>
                          <option value="Besar">Besar</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Bekerja">Bekerja</label>
                        <select class="form-control" name="Bekerja" id="Bekerja" required>
                          <option value=""disabled selected hidden>Bekerja ?</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Organisasi">Organisasi</label>
                        <select class="form-control" name="Organisasi" id="Organisasi" required>
                          <option value=""disabled selected hidden>Ikut Organisasi ?</option>
                          <option value="Ya">Ya</option>
                          <option value="Tidak">Tidak</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Jarak_Rumah">Jarak Rumah</label>
                        <select class="form-control" name="Jarak_Rumah" id="Jarak_Rumah" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Jarak Rumah</option>
                          <option value="Jauh">Jauh</option>
                          <option value="Dekat">Dekat</option>
                        </select>
                      </div>
                      <button type="submit" name="submit" class="btn btn-primary">Input</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="table">
                <table class="table" id="example" width="50px" style="height: 50px">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">No</th>
                      <th rowspan="2" class="align-middle text-center">Nama</th>
                      <th colspan="4" class="align-middle text-center">Nilai</th>
                      <th rowspan="2" class="align-middle text-center">Bekerja</th>
                      <th rowspan="2" class="align-middle text-center">Organisasi</th>
                      <th rowspan="2" class="align-middle text-center">Jarak</th>
                      <th colspan="2" class="align-middle text-center">HMAP</th>
                      <th rowspan="2" class="align-middle text-center">Hasil Keputusan</th>
                      <th rowspan="2" class="align-middle text-center">Aksi</th>
                    </tr>
                    <tr>
                      <th>PMP</th>
                      <th>B.Indo</th>
                      <th>B.Ing</th>
                      <th>MTK</th>
                      <th>Rekomendasi</th>
                      <th>Kurang</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $datauji=mysqli_query($conn,"SELECT * FROM datauji");
                   ?>
                  <?php foreach ($datauji as $key => $value) { 
                    $x=$key+1; ?>
                    <tr>
                      <td class="align-middle text-center"><?= $x?></td>
                      <td class="align-middle text-center"><?= $value["nama_calon"] ?></td>
                      <td class="align-middle text-center"><?= $value["N_PMP"] ?></td>
                      <td class="align-middle text-center"><?= $value["N_Ind"] ?></td>
                      <td class="align-middle text-center"><?= $value["N_Ing"] ?></td>
                      <td class="align-middle text-center"><?= $value["N_Mat"] ?></td>
                      <td class="align-middle text-center"><?= $value["Bekerja"] ?></td>
                      <td class="align-middle text-center"><?= $value["Organisasi"] ?></td>
                      <td class="align-middle text-center"><?= $value["Jarak_Rumah"] ?></td>
                      <td class="align-middle text-center"><?= $value["hasil_rekom"] ?></td>
                      <td class="align-middle text-center"><?= $value["hasil_kurang"] ?></td>
                      <td class="align-middle text-center"><?= $value["hasil"] ?></td>

                      <td>
                        <div class="btn-group">
                          <a href="../charts/hapus2.php?Id=<?= $value["Id"] ?>" class="btn btn-warning" onclick="return confirm('yakin ?')">hapus</a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
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