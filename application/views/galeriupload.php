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
	<link href="<?php echo base_url('assets/jquery/jquery.js') ?>" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('css/jquery-ui.css') ?>" rel="stylesheet">

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
			Upload Foto
			</div>
			<div class="card-body">
			
				<?php 
					if ($this->session->flashdata('success')){ 
						echo '<div class="alert alert-success" role="alert">';
						echo $this->session->flashdata('success');
						echo '</div>';
						
					} else if ($this->session->flashdata('failed')){
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->flashdata('failed');
						echo '</div>';
					}
				?>
				
				<form method="post" enctype="multipart/form-data">
				
				<div style="float:left; width:25%">
					<div class="form-group">
					
						<label style="color:black">Status Foto*</label><br>
						
						<div class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>">
						<label class="radio-inline">
							<input type="radio" name="optionsRadiosInline" id="BEFORE" value="BEFORE" checked /> BEFORE
						</label>
						<label class="radio-inline" style="margin-left:10%">
							<input type="radio" name="optionsRadiosInline" id="AFTER" value="AFTER"/> AFTER
						</label>
						</div>
					</div>
					<div class="form-group">
						<label for="image" style="color:black">Upload Foto*</label>
						<div class="form-control <?php echo form_error('image') ? 'is-invalid':'' ?>">
							<input style="width:85%" class="form-control-file" type="file" name="image" accept=".jpg,.png,.jpeg" />
						</div>
					</div>
				<input style="margin-top:13%" class="btn btn-success" type="submit" name="btn" value="Upload" />
				</div>	
				
				
				<div style="float:left; margin-left:3%">
									
					<div class="form-group">
			            <label for="sto" style="color:black">Nama STO*</label>
			                <div class="form-control <?php echo form_error('sto') ? 'is-invalid':'' ?>">
							<select name="sto" id="sto">
								<option value="0" disabled selected>-- Pilih STO --</option>
								<?php                                
								foreach ($pilihsto->result() as $row) {  
									if ($row->sto!='#N/A'){
										echo "<option value=".$row->sto.">".$row->sto."</option>";
									}
								}
								?>
							</select>
			                </div>
			        </div>
					
					<div class="form-group">
						<label for="odc">Nama ODC*</label>
						<input class="form-control <?php echo form_error('odc') ? 'is-invalid':'' ?>" name="odc" id="odc" placeholder="Nama ODC..." />
			        </div>
					
					<div class="form-group">
						<label for="odp">Nama ODP*</label>
						<input class="form-control <?php echo form_error('odp') ? 'is-invalid':'' ?>" name="odp" placeholder="Nama ODP..." />
					</div>
				</div>
					
                </form>
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

<script type="text/javascript">
	$(document).ready(function(){

		$('#odc').autocomplete({
            source: "<?php echo site_url('galeri/odc_autocomplete');?>",
     
            select: function (event, ui) {
				$('[name="odc"]').val(ui.item.label); 
            }
        });
	});
</script>

</body>
</html>