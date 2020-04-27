<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title"></h3>
						<a href="<?= base_url();?>c_admin" class="btn btn-primary btn-xs">Back</a>
						<div class="container">
							<div class="col-md-8 col-md-offset-2">
								<h3>Input Kegiatan</h3>

								<form action="<?php echo base_url();?>c_admin/save_dokumentasi/" method="post"
									enctype="multipart/form-data">

									<input type="text" name="judul" class="form-control" placeholder="Judul Kegiatan"
										required /><br />

									<input type="file" name="image" required><br>
									<button class="btn btn-primary" type="submit">Save</button>
								</form>
							</div>
						</div>
					</div>
					<!-- /.col-->
				</div>
				<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
