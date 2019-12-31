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
<h1 class="h3 mb-2 text-gray-800">Data Proses Validasi WARU</h1>
<p class="mb-4">MONITORING PROJECT VALIDASI SERVICE TO NEW SALES SO WARU</p>

<!-- DataTales Example -->
<?php $this->load->view("_partials/breadcrumb.php") ?>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/WRU/Validasi') ?>" role="button">Validasi</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/WRU/Monitoring') ?>" role="button">Monitoring</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/WRU/Detail') ?>" role="button">Detail</a>
<a class="btn btn-primary" href="<?php echo site_url('Data_Validasi/WRU/RekapDC') ?>" role="button">Rekap Drop Core</a>
<br></br>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Monitoring DMO</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="monitoring" width="100%" cellspacing="0">
        <thead>
        <tr>
                <th rowspan="2">ODC</th>
                <th rowspan="2">ODP Target</th>
                <th rowspan="2">ODP Tervalidasi</th>
                <th rowspan="2">PORT TARGET</th>
                <th rowspan="2">PORT Tervalidasi</th>
                <th colspan="4">Rincian PORT</th>
            </tr>
          <tr>
            <th>USED</th>
            <th>OFFLINE</th>
            <th>IDLE</th>
            <th>RUSAK</th>
          </tr>
        </thead>
        <tbody>          
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

<script>
var tabel = null;

$(document).ready(function() {
    tabel = $('#monitoring').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true, // Set true agar bisa di sorting
        "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
        "ajax":
        {
            "url": "<?php echo base_url('Data_Validasi/WRU/view_validasi') ?>", // URL file untuk proses select datanya
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[50, 100, 500, 5000],[ 50, 100, 500, 5000]], // Combobox Limit
        "columns": [
            { "data": "odc" }, 
            { "data": "jml_odp" }, 
            { "data": "validated" },
            { "data": "cap_prev" }, 
            { "data": "cap_now" }, 
            { "data": "used_now" },
            { "data": "offline" },
            { "data": "idle_now" },
            { "data": "loss_now" }, 
        ],
    });
});
</script>

</body>

</html>
