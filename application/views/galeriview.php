<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo SITE_NAME?></title>

	<!-- Bootstrap core CSS-->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>    
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" /> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.bootstrap4.min.css"/> 
	
	<!-- CSS Galeri -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">
</head>
<body id="page-top">

<?php $this->load->view("admin/parts/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/parts/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

		<!-- Euy -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
			Lihat Foto ( <?php foreach ($count as $hasil) echo $hasil->total; ?> Data uploaded ) 
			<input style="float:right; width:200px; height:25px" type="text" placeholder="Find ODC . . ." class="searchBar form-control" name="search" data-search>
			</div>
			<div style="height:60px" align="center" class="table card-body">
				<ul class="list-inline filterList">
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="MYR">MANYAR
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="MANYAR"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="TPO">TROPODO
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="TROPODO"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="WRU">WARU
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="WARU"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="JGR">JAGIR
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="JAGIR"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="DMO">DARMO
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="DARMO"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="RKT">RUNGKUT
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="RUNGKUT"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="GBG">GUBENG
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="GUBENG"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
					<li style="width:12%; font-size:14px" class="filterListItem btn btn-primary" data-filter="IJK">INJOKO
					<?php 
						foreach ($stobadge as $sto){
							$nama = $sto->nama;
							if($nama=="INJOKO"){
								echo "<sup><span class='badge badge-danger'>".$sto->hasil."</span></sup>";
							}
						}
					?>
					</li>
				</ul>
			</div>
				
				<div class="card mb-3" style="overflow-y:scroll; height:400px; width:93%; margin-left:3%; ">
					
					<div class="filtr-container galleryContainer">
						<!-- item -->
						<?php
							foreach ($odc->result() as $row) { 
							//col-md-3
						?>
						<div class="col-md-2 filtr-item " data-category="<?php echo $row->STO_NAME ?>">
						<a href="<?php echo site_url('galeri/member/'.$row->ODC.'')?>" style="width:150px" class="btn btn-secondary"><?php echo $row->ODC ?>
						<?php 
								foreach ($badge as $bad){
									$nama = $bad->nama;
									$nama2 = $row->ODC;
									if($nama==$nama2){
										echo "<sup><span class='badge badge-danger'>".$bad->hasil."</span></sup>";
									}
								}
						?>
						</a></div>
						<?php
							}
						?>
					</div>
				
				</div>
        </div>

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/parts/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->



<?php $this->load->view("admin/parts/scrolltop.php") ?>
<?php $this->load->view("admin/parts/modal.php") ?>
<?php $this->load->view("admin/parts/js.php") ?>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/1.3.4/jquery.filterizr.min.js"></script>

<script>
$(document).ready(function(){
	var filterizd = $(".filtr-container").filterizr({});

	$(".filterListItem").on('click',function(){
		$(".filterListItem").removeClass("active");
		$(this).addClass("active");
	});
});
</script>

</body>
</html>