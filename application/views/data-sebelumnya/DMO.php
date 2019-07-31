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
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Validasi DMO</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
                <th rowspan="2">ODC</th>
                <th rowspan="2">%Validated</th>
                <th colspan="6">Detail PORT</th>
            </tr>
          <tr>
            <th>KAP</th>
            <th>USED</th>
            <th>IDLE</th>
            <th>OFFLINE</th>
            <th>RUSAK</th>
            <th>OCC</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ODC-MYR-FBU</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">Lokasi</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Jl. Bratang Gedhe 6E</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">100%</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">Info Validasi</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Jumlah ODP : 68</a>
                  <a class="dropdown-item disabled" href="#">ODP Tervalidasi : 68</a>
                  <a class="dropdown-item disabled" href="#">%Tervalidasi : 100%</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">968</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">KAPASITAS</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 960</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 968</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">249</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">PENGGUNAAN</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 424</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 249</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">496</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">PORT KOSONG</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 511</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 496</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">260</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">PORT OFFLINE</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 0</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 206</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">16</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">PORT RUSAK</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 0</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 16</a>
                </div>
              </div>
            </td>
            <td>
              <div class="btn-group ">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">26%</button>
                <div class="dropdown-menu">
                  <h5 class="dropdown-header">OKUPANSI</h5>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item disabled" href="#">Sebelum : 44%</a>
                  <a class="dropdown-item disabled" href="#">Sesudah : 26%</a>
                </div>
              </div>
            </td>
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
