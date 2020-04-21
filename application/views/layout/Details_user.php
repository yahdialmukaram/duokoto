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

						<div class="container">
							<div class="col-md-8 col-md-offset-2">
								<h3>Details Data User</h3>
								<hr />
								<form action="<?php echo base_url();?>/c_admin/details_user/<?=$details['id'] ?>"
									method="post" enctype="multipart/form-data">
									<label>Nama</label>
									<input readonly type="text" name="nama" value="<?= $details['nama']; ?>"
										class="form-control"><br />

										<label>Email</label>
									<input readonly type="text" name="email" value="<?= $details['email']; ?>"
										class="form-control"><br />

										<label>Phone</label>
									<input readonly type="text" name="no_hp" value="<?= $details['no_hp']; ?>"
										class="form-control"><br />
										
										<label>Message</label>
									<input readonly type="text" name="pesan" value="<?= $details['pesan']; ?>"
										class="form-control">
										<br />

								</form>
								<a href="<?= base_url();?>C_admin/V_saran/" class="btn btn-primary fa fa-reply-all">Back</a>
							</div>
						</div>
						<!-- tools box -->
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
