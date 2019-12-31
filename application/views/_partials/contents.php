<!-- DARMO -->
<?php $query_dmo = $this->db->query('SELECT * FROM SIIS_DMO'); ?>
<?php $dmo = $query_dmo->num_rows(); ?>
<?php $query_dmo_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_DMO;'); ?>
<?php $dmo_valdat = $query_dmo_valdat->num_rows(); ?>
<?php $dmo_valdat_percentage = round(($dmo_valdat/$dmo)*100); ?>
<!-- GUBENG -->
<?php $query_gbg = $this->db->query('SELECT * FROM SIIS_GBG'); ?>
<?php $gbg = $query_gbg->num_rows(); ?>
<?php $query_gbg_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_GBG;'); ?>
<?php $gbg_valdat = $query_gbg_valdat->num_rows(); ?>
<?php $gbg_valdat_percentage = round(($gbg_valdat/$gbg)*100); ?>
<!-- INJOKO -->
<?php $query_ijk = $this->db->query('SELECT * FROM SIIS_IJK'); ?>
<?php $ijk = $query_ijk->num_rows(); ?>
<?php $query_ijk_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_IJK;'); ?>
<?php $ijk_valdat = $query_ijk_valdat->num_rows(); ?>
<?php $ijk_valdat_percentage = round(($ijk_valdat/$ijk)*100); ?>
<!-- JAGIR -->
<?php $query_jgr = $this->db->query('SELECT * FROM SIIS_JGR'); ?>
<?php $jgr = $query_jgr->num_rows(); ?>
<?php $query_jgr_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_JGR;'); ?>
<?php $jgr_valdat = $query_jgr_valdat->num_rows(); ?>
<?php $jgr_valdat_percentage = round(($jgr_valdat/$jgr)*100); ?>
<!-- MANYAR -->
<?php $query_myr = $this->db->query('SELECT * FROM SIIS_MYR'); ?>
<?php $myr = $query_myr->num_rows(); ?>
<?php $query_myr_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_MYR;'); ?>
<?php $myr_valdat = $query_myr_valdat->num_rows(); ?>
<?php $myr_valdat_percentage = round(($myr_valdat/$myr)*100); ?>
<!-- RUNGKUT -->
<?php $query_rkt = $this->db->query('SELECT * FROM SIIS_RKT'); ?>
<?php $rkt = $query_rkt->num_rows(); ?>
<?php $query_rkt_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_RKT;'); ?>
<?php $rkt_valdat = $query_rkt_valdat->num_rows(); ?>
<?php $rkt_valdat_percentage = round(($rkt_valdat/$rkt)*100); ?>
<!-- TROPODO -->
<?php $query_tpo = $this->db->query('SELECT * FROM SIIS_TPO'); ?>
<?php $tpo = $query_tpo->num_rows(); ?>
<?php $query_tpo_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_TPO;'); ?>
<?php $tpo_valdat = $query_tpo_valdat->num_rows(); ?>
<?php $tpo_valdat_percentage = round(($tpo_valdat/$tpo)*100); ?>
<!-- WARU -->
<?php $query_wru = $this->db->query('SELECT * FROM SIIS_WRU'); ?>
<?php $wru = $query_wru->num_rows(); ?>
<?php $query_wru_valdat = $this->db->query('SELECT DISTINCT ODP FROM SHEET_WRU;'); ?>
<?php $wru_valdat = $query_wru_valdat->num_rows(); ?>
<?php $wru_valdat_percentage = round(($wru_valdat/$wru)*100); ?>


<?php $all_sto = $dmo+$gbg+$ijk+$jgr+$myr+$rkt+$tpo+$wru; ?>
<?php $valdat_all = $rkt_valdat+$gbg_valdat+$ijk_valdat+$dmo_valdat+$wru_valdat+$tpo_valdat+$myr_valdat+$jgr_valdat; ?>
<?php $valdat_all_percentage = round(($valdat_all/$all_sto)*100); ?>

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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $all_sto ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $valdat_all ?></div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $valdat_all_percentage ?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $valdat_all_percentage ?>%" aria-valuenow="<?php echo $valdat_all_percentage ?>" aria-valuemin="0" aria-valuemax="100"></div>
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
                      <td><?php echo $dmo; ?></td>
                      <td><?php echo $dmo_valdat; ?></td>
                      <td><?php echo $dmo_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <tr>
                      <td>GUBENG</td>
                      <td><?php echo $gbg; ?></td>
                      <td><?php echo $gbg_valdat; ?></td>
                      <td><?php echo $gbg_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>INJOKO</td>
                      <td><?php echo $ijk; ?></td>
                      <td><?php echo $ijk_valdat; ?></td>
                      <td><?php echo $ijk_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>JAGIR</td>
                      <td><?php echo $jgr; ?></td>
                      <td><?php echo $jgr_valdat; ?></td>
                      <td><?php echo $jgr_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>MANYAR</td>
                      <td><?php echo $myr; ?></td>
                      <td><?php echo $myr_valdat; ?></td>
                      <td><?php echo $myr_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>RUNGKUT</td>
                      <td><?php echo $rkt; ?></td>
                      <td><?php echo $rkt_valdat; ?></td>
                      <td><?php echo $rkt_valdat_percentage; ?>%</td>
                      <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>TROPODO</td>
                      <td><?php echo $tpo; ?></td>
                      <td><?php echo $tpo_valdat; ?></td>
                      <td><?php echo $tpo_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                      <td>WARU</td>
                      <td><?php echo $wru; ?></td>
                      <td><?php echo $wru_valdat; ?></td>
                      <td><?php echo $wru_valdat_percentage; ?>%</td>
                        <td>DATA_BERMASALAH</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>TOTAL</th>
                        <th><?php echo $all_sto ?></th>
                        <th><?php echo $valdat_all ?></th>
                        <th><?php echo $valdat_all_percentage ?>%</th>
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