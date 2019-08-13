<?php $query_dmo = $this->db->query('SELECT * FROM SIIS_DMO'); ?>
<?php $query_gbg = $this->db->query('SELECT * FROM SIIS_GBG'); ?>
<?php $query_ijk = $this->db->query('SELECT * FROM SIIS_IJK'); ?>
<?php $query_jgr = $this->db->query('SELECT * FROM SIIS_JGR'); ?>
<?php $query_myr = $this->db->query('SELECT * FROM SIIS_MYR'); ?>
<?php $query_rkt = $this->db->query('SELECT * FROM SIIS_RKT'); ?>
<?php $query_tpo = $this->db->query('SELECT * FROM SIIS_TPO'); ?>
<?php $query_wru = $this->db->query('SELECT * FROM SIIS_WRU'); ?>



<?php $query_all = $query_dmo->num_rows()+$query_gbg->num_rows()+$query_ijk->num_rows()+$query_jgr->num_rows()+$query_myr->num_rows()+$query_rkt->num_rows()+$query_tpo->num_rows()+$query_wru->num_rows(); ?>
<?php $query_valdat1 = 12000; ?>
<?php $query_valdat2 = round(($query_valdat1/$query_all)*100); ?>

<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Validasi</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah ODP</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $query_all ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ODP Tervalidasi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $query_valdat1 ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">%Tervalidasi</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $query_valdat2 ?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $query_valdat2 ?>%" aria-valuenow="<?php echo $query_valdat2 ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-percent fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Bermasalah</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-frown-open fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>



                <!-- Card Body -->
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                      <tr>
                        <th>NAMA_SO</th>
                        <th>JUMLAH_ODP</th>
                        <th>ODP_TERVALIDASI</th>
                        <th>%TERVALIDASI</th>
                        <th>DATA_BERMASALAH</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      <td>DARMO</td>
                      <td><?php echo $query_dmo->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <tr>
                      <td>GUBENG</td>
                      <td><?php echo $query_gbg->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>INJOKO</td>
                      <td><?php echo $query_ijk->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>JAGIR</td>
                      <td><?php echo $query_jgr->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>MANYAR</td>
                      <td><?php echo $query_myr->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>RUNGKUT</td>
                      <td><?php echo $query_rkt->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>TROPODO</td>
                      <td><?php echo $query_tpo->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>WARU</td>
                      <td><?php echo $query_wru->num_rows(); ?></td>
                       <td>ODP_TERVALIDASI</td>
                        <td>%TERVALIDASI</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>TOTAL</th>
                        <th><?php echo $query_all ?></th>
                        <th><?php echo $query_valdat1 ?></th>
                        <th><?php echo $query_valdat2 ?>%</th>
                        <th>DATA_BERMASALAH</th>
                      </tr>
                    </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->
          <div class="row">

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>