<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Tables
		</h1>
		<br>
		<!-- </button> -->

		<a href="<?= base_url();?>c_admin/tambah_data_penduduk" class="btn btn-primary fa fa-plus"> Tambah Data
			Penduduk</a>
		<!-- <a href="tambah_olahraga" class="btn btn-primary fa fa-plus"> Tambah Berita Olahraga</a> -->

	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Hover Data Table</h3>
					</div>

					<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');
						?></strong>
					</div>
					<?php endif;?>
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
									<th>NO</th>
									<th>Nik</th>
									<th>Nama</th>
									<th>Tempat Tgl Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Agama</th>
									<th>Status Perkawinan</th>
									<th>Pekerjaan</th>
									<th>Kewarganegaraan</th>
									<th>Image</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
           					 foreach ($tb_penduduk as $value): ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?=$value['nik']; ?></td>
									<td><?=$value['nama']; ?></td>
									<td><?=$value['tgl_lahir']; ?></td>
									<td><?=$value['jenis_kelamin']; ?></td>
									<td><?=$value['alamat']; ?></td>
									<td><?=$value['agama']; ?></td>
									<td><?=$value['status_perkawinan']; ?></td>
									<td><?=$value['pekerjaan']; ?></td>
									<td><?=$value['kewarganegaraan']; ?></td>
									<td><img style="width: 100px;height: 100px; border-radius:50%"
											src="<?=base_url();?>assets/images/<?=$value['image'];?>"></td>

									<td>
										<a href="<?php echo base_url(); ?>c_admin/edit_berita/"
											class="btn btn-info btn-xs"> <i class="fa fa-wrench"></i> </a>
										<a href="<?php echo base_url(); ?>c_admin/hapus_berita/"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash"></i> </a>
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
