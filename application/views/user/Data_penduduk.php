 <div class="page-header">
 	<h1>Tables</h1>
 </div>
 <div class="row">
 	<div class="col-md-12">
 		<table class="table">
 			<thead>
 				<tr>
 					<th>No</th>
 					<th>Nik</th>
 					<th>Nama</th>
 					<th>Tangglah Lahir</th>
 					<th>Jenis Kelamin</th>
 					<th>Alamat</th>
 					<th>Agama</th>
 					<th>Status Perkawinan</th>
 					<th>Pekerjaan</th>
 					<th>Kewarganegaraan</th>
 					<th>Image</th>


 				</tr>
 			</thead>
 			<tbody>
 				<?php
           function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
					}
          $no = 1;
          foreach ($data as $key => $value):  ?>


 				<tr>
 					<td><?= $no++?></td>
 					<td><?= $value['nik']; ?></td>
 					<td><?= $value['nama']; ?></td>
 					<td><?= $value['tgl_lahir']; ?></td>
 					<td><?= $value['jenis_kelamin']; ?></td>
 					<td><?= $value['alamat']; ?></td>
 					<td><?= $value['agama']; ?></td>
 					<td><?= $value['status_perkawinan']; ?></td>
 					<td><?= $value['pekerjaan']; ?></td>
 					<td><?= $value['kewarganegaraan']; ?></td>
 					<td><img style="width: 100px;height: 100px; border-radius:50%"
 							src="<?=base_url();?>assets/images/<?=$value['image'];?>"></td>
 				</tr>


 				<?php endforeach ; ?>
 				


 			</tbody>
 		</table>
		 <div class="row">
 					<div class="col">
 						<!--Tampilkan pagination-->
 						<?php echo $pagination; ?>
 					</div>
 				</div>
 	</div>

 </div>
