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
									<h3><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?> </a></h3>
									<h6><a href=""></a><?= limit_words ($value->isi,50); ?></h6>
									<a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"> Selengkapnya</a>
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

					<div class="col-sm-12 padding_all">
						<div class="center_5 clearfix">
							<ul>
								<li class="well_6">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li>...</li>
								<li><a href="#">111</a></li>
								<li><a href="#">Next ></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="center_main clearfix">
						<div class="center_6">
							<p><a href="#"><img src="img/11.jpg" width="100%"></a></p>
							<h3>OLAHRAGA</h3>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/12.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/13.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/14.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/15.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="center_9">
								<p><a href="#"><img src="img/16.jpg"></a></p>
							</div>
							<div class="center_6">
								<h3>SIGN IN</h3>
							</div>
							<div class="center_10">
								<p>Dignissim Lacinia</p>
							</div>
							<div class="center_11">
								<p><input type="text" name="Email" placeholder="Email Address" required=""></p>
							</div>
							<div class="center_12">
								<p><a href="#">Submit</a></p>
							</div>
						</div>
					</div>
					<div class="center_main clearfix">

						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/12.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/13.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/14.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 padding_all">
							<div class="col-sm-4 padding_all">
								<div class="center_7">
									<p><a href="#"><img src="img/15.jpg"></a></p>
								</div>
							</div>
							<div class="col-sm-8 padding_all">
								<div class="center_8">
									<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec
											odionec</a></h5>
									<p>MARCH 3, 2017</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
</section>

<script src="<?= base_url();?>template/js/cbpAnimatedHeader.js"></script>
<script src="<?= base_url();?>template/js/classie.js"></script>
</body>

</html>
