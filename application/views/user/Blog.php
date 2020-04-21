<section id="center" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding_all">
				<div class="col-sm-8">
					<div class="col-sm-12 padding_all">
						<div class="col-sm-1 padding_all">
							<div class="blog_4">
								<h4>3</h4>
								<!-- <p>NOSTRA</p> -->
							</div>
						</div>
						<div class="col-sm-11 padding_all">
							<div class="blog_5">
								<ul>
									<li class="well_7"><a href="details.html"><i class="fa fa-facebook"></i>Share</a>
									</li>
									<li class="well_8"><a href="details.html"><i class="fa fa-twitter"></i>Tweet</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- star -->

					<?php
					 function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
					}
					$no = $this->uri->segment('3') + 1;
					 foreach ($berita as $key => $value):?>
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
										<h6><a href=""></a><?= limit_words ($value->isi,30); ?></h6>
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
						.warna {
							background-color: rgb(224, 178, 24);
							color: black;
						}

						.warna1 {
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

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d866.2332583338343!2d100.484131!3d-0.588236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2110432d565ec490!2sMasjid%20Mujahidin!5e1!3m2!1sid!2sid!4v1587417005557!5m2!1sid!2sid" width="300" height="280" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
</section>

<script src="<?= base_url();?>template/js/cbpAnimatedHeader.js"></script>
<script src="<?= base_url();?>template/js/classie.js"></script>
</body>

</html>
