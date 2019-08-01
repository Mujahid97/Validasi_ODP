<!DOCTYPE html>
<html lang="en">

<head>

<?php $this->load->view("_partials/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php $this->load->view("_partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php $this->load->view("_partials/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Rekap Drop Core MANYAR</h1>
<p class="mb-4">Deskripsi disini...</p>

<!-- DataTales Example -->
<?php $this->load->view("_partials/breadcrumb.php") ?>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/MYR/Validasi') ?>" role="button">Validasi</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/MYR/Monitoring') ?>" role="button">Monitoring</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/MYR/Detail') ?>" role="button">Detail</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/MYR/RekapDC') ?>" role="button">Rekap Drop Core</a>
<br></br>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ODP</th>
            <th>Tanggal Validasi</th>
            <th>KAP Sebelum</th>
            <th>KAP Sesudah</th>
            <th>Jumlah isi Sebelum</th>
            <th>Jumlah KAP Sesudah</th>
            <th>Cek KAP</th>
            <th>Jumlah KAP Tercatat</th>
            <th>Validasi Kapasitas</th>
            <th>PORT KOSONG</th>
            <th>PORT OFFLINE</th>
            <th>PORT RUSAK</th>
            <th>PORT PASSIVE</th>
            <th>Validasi PORT</th>
            <th>CEK ISI 1</th>
            <th>CEK ISI 2</th>
            <th>KETERANGAN</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
          <td>ODP</td>
            <td>Tanggal Validasi</td>
            <td>KAP Sebelum</td>
            <td>KAP Sesudah</td>
            <td>Jumlah isi Sebelum</td>
            <td>Jumlah KAP Sesudah</td>
            <td>Cek KAP</td>
            <td>Jumlah KAP Tercatat</td>
            <td>Validasi Kapasitas</td>
            <td>PORT KOSONG</td>
            <td>PORT OFFLINE</td>
            <td>PORT RUSAK</td>
            <td>PORT PASSIVE</td>
            <td>Validasi PORT</td>
            <td>CEK ISI 1</td>
            <td>CEK ISI 2</td>
            <td>KETERANGAN</td>
            
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
<!-- End of Main Content -->

      <?php $this->load->view("_partials/footer.php") ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
