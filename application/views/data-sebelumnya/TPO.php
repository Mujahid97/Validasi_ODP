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
<h1 class="h3 mb-2 text-gray-800">Data ODP SO TROPODO</h1>
<p class="mb-4">Deskripsi disini...</p>

<!-- DataTales Example -->
<?php $this->load->view("_partials/breadcrumb.php") ?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">TROPODO</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="siis-tpo" width="100%" cellspacing="0">
        <thead>
          <tr>
          <th>REGIONAL</th>
          <th>WITEL</th>
          <th>DATEL</th>
          <th>STO</th>
          <th>STO_DESC</th>
          <th>NOSS_ID</th>
          <th>ODP_INDEX</th>
          <th>ODP_NAME</th>
          <th>LATITUDE</th>
          <th>LONGITUDE</th>
          <th>CLUSNAME</th>
          <th>CLUSTERSTATUS</th>
          <th>AVAI</th>
          <th>USED</th>
          <th>RSV</th>
          <th>RSK</th>
          <th>IS_TOTAL</th>
          <th>ODP_INFO</th>
          <th>UPDATE_DATE</th>
          <th>PERIODE</th>
          <th>STATUS</th>
          </tr>
        </thead>
        
        <tbody></tbody>
        <tfoot>
          <tr>
          <th>REGIONAL</th>
          <th>WITEL</th>
          <th>DATEL</th>
          <th>STO</th>
          <th>STO_DESC</th>
          <th>NOSS_ID</th>
          <th>ODP_INDEX</th>
          <th>ODP_NAME</th>
          <th>LATITUDE</th>
          <th>LONGITUDE</th>
          <th>CLUSNAME</th>
          <th>CLUSTERSTATUS</th>
          <th>AVAI</th>
          <th>USED</th>
          <th>RSV</th>
          <th>RSK</th>
          <th>IS_TOTAL</th>
          <th>ODP_INFO</th>
          <th>UPDATE_DATE</th>
          <th>PERIODE</th>
          <th>STATUS</th>
          </tr>
        </tfoot>
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
    tabel = $('#siis-tpo').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true, // Set true agar bisa di sorting
        "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
        "ajax":
        {
            "url": "<?php echo base_url('Data_Sebelumnya/TPO/view') ?>", // URL file untuk proses select datanya
            "type": "POST"
        },
        "deferRender": true,
        "aLengthMenu": [[5, 10, 50, 100, 200],[ 5, 10, 50, 100,200]], // Combobox Limit
        "columns": [
            { "data": "REGIONAL" }, 
            { "data": "WITEL" },
            { "data": "DATEL" }, 
            { "data": "STO" },
            { "data": "STO_DESC" },
            { "data": "NOSS_ID" },
            { "data": "ODP_INDEX" }, 
            { "data": "ODP_NAME" },
            { "data": "LATITUDE" },
            { "data": "LONGITUDE" },
            { "data": "CLUSNAME" },
            { "data": "CLUSTERSTATUS" },
            { "data": "AVAI" },
            { "data": "USED" },
            { "data": "RSV" },
            { "data": "RSK" },
            { "data": "IS_TOTAL" },
            { "data": "ODP_INFO" },
            { "data": "UPDATE_DATE" },
            { "data": "PERIODE" },
            { "data": "STATUS" },
        ],
    });
});

</script>

</body>

</html>
