<section id="center" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding_all">
				<div class="col-sm-8">
					<div class="center_1">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
								<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
							</ol>
							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item">
									<img src="<?= base_url();?>template/img/foto6.jpg" alt="...">
									<div class="carousel-caption">
										<h2 class="text-center">JORONG DUO KOTO MALALO</h2>
									</div>
								</div>
								<div class="item active">
									<img src="<?= base_url();?>template/img/foto2.jpg" alt="...">
									<div class="carousel-caption">
										<h2 class="text-center">JORONG DUO KOTO MALALO</h2>
									</div>
								</div>
								<div class="item">
									<img src="<?= base_url();?>template/img/foto3.jpg" alt="...">
									<div class="carousel-caption">
										<h2 class="text-center">JORONG DUO KOTO MALALO</h2>
									</div>
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control"
								href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic"
								data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control"
								href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic"
								data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>

					<!-- star -->

					<?php 
		 	
			 function limit_words($string, $word_limit){
				 $words = explode(" ",$string);
				 return implode(" ",array_splice($words,0,$word_limit));
				}
				$no = $this->uri->segment('3') + 1;
				 foreach ($data->result()as $key => $value):?>
					<div class="col-sm-12 padding_all">
						<div class="center_4 clearfix">
							<div class="col-sm-4">
								<div class="center_2">
									<a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>"
											width="100%"></a>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="center_3">
									<h6><a href="#"><?= $value->tanggal;?></a>
										<h3><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?>
											</a></h3>
										<h6><a href=""></a><?=limit_words($value->isi,30); ?></h6>
										<ul>
											<li class="well_5"><a href="#">Nisi</a></li>
											<li class="well_5"><a href="#">Consectetur</a></li>
											<li>100 <i class="fa fa-eye"></i></li>
											<li><a href="#">1</a> <i class="fa fa-comment"></i></li>
										</ul>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<!-- end -->
					<!-- perintah pagination -->
					<div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
     
				</div>
				<div class="col-sm-4">
					<div class="center_main clearfix">
						<div class="center_6">
							<p><a href="#"><img src="<?= base_url();?>template/img/mesjid.jpeg" width="100%"></a></p>
							<h3>Berita Olahraga</h3>
						</div>


						<?php
	  foreach ($berita_olahraga as $key => $value): ?>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4  padding_all">
								<div class="center_7">
									<p> <a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>"
												width="100%"></a></p>

								</div>
							</div>
							<div class="col-sm-7  padding_all">
								<div class="center_8">
									<div class="col-md-12">
										<h5><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?>
											</a></h5>
									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>

						<div class="col-sm-12 padding_all">
							<div class="center_6">
								<h3>Kepala Jorong</h3>
								<p><a href="#"><img src="<?= base_url();?>template/img/yahdi.jpg" width="100%"
											height="200%"></a></p>
							</div>
						</div>
					</div>
					<style>
						.warna{
							background-color: rgb(224, 178, 24);
							color: black;
						}
						.warna1{
							background-color: rgb(235, 165, 15);
							color: black;
						}
	
	
					</style>

					<div class="center_main clearfix">
						<h3><b>Profil Jorong</b></h3>
						<table rules="rows">					
		
		<tr class="warna">
        <th>Provinsi</th>
		<td></td>
		<td></td>
        <td>Sumatra Barat</td>
	</tr>

    <tr>
     	<th>Kabupaten</th>
		<td></td>
		<td></td>
        <td>Tanah Datar</td>
	</tr>
	<tr>
     	<th>Kecamatan</th>
		<td></td>
		<td></td>
        <td>Batipuh Selatan</td>
	</tr>
	<tr>
     	<th>Jorong</th>
		<td></td>
		<td></td>
        <td>Duo Koto Malalo</td>
	</tr>
	<tr>
     	<th>Jumlah Penduduk</th>
		<td></td>
		<td></td>
        <td>1200 Jiwa</td>
    </tr>
	<tr>
     	<th>Jumlah KK</th>
		<td></td>
		<td></td>
        <td>500 KK</td>
    </tr>
	<tr>
     	<th>Jumlah Laki-Laki</th>
		<td></td>
		<td></td>
        <td>400 Jiwa</td>
	</tr>
	<tr>
     	<th>Jumlah Prempuan</th>
		<td></td>
		<td></td>
        <td>679 Jiwa</td>
	</tr>
	<tr>
     	<th>Kondisi Fisik</th>
		<td></td>
		<td></td>
        <td>Perbukitan, Dataran</td>
	</tr>
	  
</table>
<br>
<br>
				
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31916.975867174817!2d100.4626923671211!3d-0.5684128234591842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd5284bf464edb9%3A0x6ebabd399e3c647e!2sMalalo%2C%20Padang%20Laweh%20Malalo%2C%20Batipuh%20Selatan%2C%20Kabupaten%20Tanah%20Datar%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1587188947370!5m2!1sid!2sid"
							width="300" height="280" frameborder="0" style="border:0;" allowfullscreen=""
							aria-hidden="false" tabindex="0"></iframe>




					</div>
				</div>
			</div>
		</div>
	</div>
</section>
