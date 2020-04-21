<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Tables
		</h1>
		<br>


	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Table Kritik Saran</h3>
					</div>

					<!-- alert simpan data -->

					<!-- aler hapus data -->
					<?php if ($this->session->flashdata('danger')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('danger');
						?></strong>
					</div>
					<?php endif; ?>
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover wrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>No Hp</th>
									<th>Pesan</th>
									<th>tanggal</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
           					 foreach ($tb_saran as $value): ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?=$value['nama']; ?></td>
									<td><?= $value['email']; ?></td>
									<td><?= $value['no_hp'];?></td>
									<td><?= $value['pesan']; ?></td>
									<td><?= $value['tanggal']; ?></td>
									<td>
										<a href="<?php echo base_url(); ?>/c_admin/details_user/<?php echo $value['id']; ?>"
											class="btn btn-primary btn-xs"> <i class="fa fa-search-plus"></i> Details
										</a>
										<a href="<?php echo base_url(); ?>/c_admin/delete_saran/<?php echo $value['id']; ?>"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash">Delete</i> </a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>

						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
