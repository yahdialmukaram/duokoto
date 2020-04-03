<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>

		</h1>

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header">
						<h3 class="box-title"></h3>
						<a href="V_berita" class="btn btn-primary">Back</a>
						<div class="container">
							<div class="col-md-8 col-md-offset-2">
								<h3>Portal Berita</h3>
								<hr />
								<form action="<?php echo base_url();?>c_admin/simpan_post/" method="post"enctype="multipart/form-data">
									<input type="text" name="judul" class="form-control" placeholder="Judul berita"
										required /><br />
									<textarea id="ckeditor" name="berita" class="form-control"
										required></textarea><br />
									<input type="file" name="filefoto" required><br>
									<button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
								</form>
							</div>
						</div>

						<!-- tools box -->

						</form>
					</div>
				</div>
				<!-- /.box -->


			</div>
			<!-- /.col-->
		</div>
		<!-- ./row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
