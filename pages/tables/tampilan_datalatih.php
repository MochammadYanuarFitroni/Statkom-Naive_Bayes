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
                <a href="../tables/tampilan_datalatih.php" class="nav-link active">
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
            <h1>Data Latih</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Notif-->
    <?php
    if (isset($_POST["submit"])) { ?>
        <?php if (tambah($_POST)>0) { ?>
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h6>
              <i class="icon fas fa-check"></i> 
              Data Berhasil Disimpan
            </h6>
          </div>
        <?php } ?>
    <?php } ?>
    <!-- Main content -->
    <div class="container-fluid">
      <div class="row">  
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Data</h5>
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
                        <input type="text" class="form-control" name="Nama" placeholder="Masukkan Nama" id="Nama" required>
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
                      <div class="form-group">
                        <label for="IPK">IPK</label>
                        <select class="form-control" name="IPK" id="IPK" required>
                          <option value=""disabled selected hidden>Masukkan Kategori Nilai IPK</option>
                          <option value="Rekomendasi">Rekomendasi</option>
                          <option value="Kurang">Kurang</option>
                        </select>
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary">Save</button>
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
                <table class="table" id="example">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">No</th>
                      <th rowspan="2" class="align-middle text-center">Nama mahasiswa</th>
                      <th colspan="4" class="align-middle text-center">Nilai</th>
                      <th rowspan="2" class="align-middle text-center">Bekerja</th>
                      <th rowspan="2" class="align-middle text-center">Organisasi</th>
                      <th rowspan="2" class="align-middle text-center">Jarak Rumah</th>
                      <th rowspan="2" class="align-middle text-center">Hasil</th>
                      <th rowspan="2" class="align-middle text-center">Aksi</th>
                    </tr>
                    <tr>
                      <th>PMP</th>
                      <th>B.Indo</th>
                      <th>B.Ing</th>
                      <th>MTK</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach (data() as $key => $value) { 
                    $x=$key+1; ?>
                    <tr>
                      <td><?= $x?></td>
                      <td><?= $value["Nama_Mahasiswa"] ?></td>
                      <td><?= $value["N_PMP"] ?></td>
                      <td><?= $value["N_Ind"] ?></td>
                      <td><?= $value["N_Ing"] ?></td>
                      <td><?= $value["N_Mat"] ?></td>
                      <td><?= $value["Bekerja"] ?></td>
                      <td><?= $value["Organisasi"] ?></td>
                      <td><?= $value["Jarak_Rumah"] ?></td>
                      <td><?= $value["IPK"] ?></td>

                      <td>
                        <div class="btn-group">
                          <a href="hapus.php?Id=<?= $value["Id"] ?>" class="btn btn-warning" onclick="return confirm('yakin ?')">hapus</a>
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