<section id="center" class="clearfix">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 padding_all">
				<div class="col-sm-8">
					<div class="blog_1">
						<ul>
							<li><a href="details.html">SEMPER</a></li>
							<li><a href="details.html">NUNC</a></li>
						</ul>
						<h2>Fusce Nec Tellus Sed Augue Semper Porta. Mauris Massa.</h2>
					</div>
					<div class="col-sm-12 padding_all">
						<div class="col-sm-3 padding_all">
							<div class="blog_2">
								<h4><a href="details.html">MASSA CONUBIA</a>, MARCH 17, 2017</h4>
							</div>
						</div>
						<div class="col-sm-7"></div>
						<div class="col-sm-2 padding_all">
							<div class="blog_3">
								<ul>
									<li>22 <i class="fa fa-eye"></i></li>
									<li><a href="details.html">3</a> <i class="fa fa-comment"></i></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 padding_all">
						<div class="col-sm-1 padding_all">
							<div class="blog_4">
								<h4>3</h4>
								<p>NOSTRA</p>
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
					<div class="col-sm-12 padding_all">
						<div class="blog_6">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.Sed
								cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis
								sagittis ipsum. Praesent mauris..Fusce nec tellus sed augue semper porta. Mauris massa.
								Vestibulum lacinia arcu eget nulla.</p>
							<p>torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.</p>
						</div>
					</div>
					<!-- star -->

					<?php foreach ($berita as $key => $value):?>
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
									<h6><a href="#">DAPIBUS DIAM</a>, JANUARY 11, 2016</h6>
									<h3><a href="#"><?= $value->judul; ?> </a></h3>
									<h6><a href=""></a><?= $value->isi; ?></h6>
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
