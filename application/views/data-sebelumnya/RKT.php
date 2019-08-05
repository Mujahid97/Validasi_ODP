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
<h1 class="h3 mb-2 text-gray-800">Data ODP SO RUNGKUT</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<?php $this->load->view("_partials/breadcrumb.php") ?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">RUNGKUT</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
          <th>CLUSTERSATATUS</th>
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
        
        <tbody>
          <tr>
          <td>REGIONAL</td>
          <td>WITEL</td>
          <td>DATEL</td>
          <td>STO</td>
          <td>STO_DESC</td>
          <td>NOSS_ID</td>
          <td>ODP_INDEX</td>
          <td>ODP_NAME</td>
          <td>LATITUDE</td>
          <td>LONGITUDE</td>
          <td>CLUSNAME</td>
          <td>CLUSTERSATATUS</td>
          <td>AVAI</td>
          <td>USED</td>
          <td>RSV</td>
          <td>RSK</td>
          <td>IS_TOTAL</td>
          <td>ODP_INFO</td>
          <td>UPDATE_DATE</td>
          <td>PERIODE</td>
          <td>STATUS</td>
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
