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

		<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
			<a href="<?php echo site_url('galeri/view') ?>"><i class="fas fa-arrow-left"></i>
			Back
			</a>
			 | Galeri Data Validasi <?php echo $odcname ?>
				
			</div>
			<div class="card-body">
			<div class="row">
				<div style="margin-top:1px" class="col-md-12 d-flex flex-wrap justify-content-between galleryFilters">
					<ul class="list-inline filterList">
						<li selected class="filterListItem btn violetBtn" data-filter="ALL">ALL</li>
						<li class="filterListItem btn violetBtn" data-filter="BEFORE">BEFORE</li>
						<li class="filterListItem btn violetBtn" data-filter="AFTER">AFTER</li>
					</ul>
					<input type="text" placeholder="Search ODP . . ." class="searchBar form-control" name="search" data-search>
				</div>
			</div>

			<div class="row filtr-container galleryContainer">
				<!-- item -->
				
			<?php if(!$odp->result()){ echo '--------------------No Data--------------------'; }?>
			<?php foreach ($odp->result() as $row): ?>
				<div class="col-md-4 filtr-item thumbnail" data-category="ALL,<?php echo $row->status ?>">
					<img src="<?php 
						//if(base_url('images/'.$row->id.'.jpg')==NULL){
							echo base_url('images/'.$row->id.'.jpg'); 
						//}
					
					?>" alt="">
					<span class="item-desc"><?php echo $row->odp ?></span>
				</div>
				
            <?php endforeach; ?>
			</div>
			
			</div>
			<div class="card-footer small text-muted"></div>
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