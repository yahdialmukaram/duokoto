<section id="center" class="clearfix">
	<div class="container">
		<div class="row">
			<?php
			 foreach ($details as $value ):?>
			<div class="col-sm-12 padding_all">
				<div class="col-sm-8">
					<div class="blog_1">

						<h1><a href="#"><?= $value->judul; ?> </a></h1>
					</div>
					<div class="col-sm-12 padding_all">
						<div class="col-sm-3 padding_all">
							<div class="blog_2">
								<h6><a href="#"><?= $value->tanggal;?></a>
							</div>
						</div>
						<div class="col-sm-7"></div>
						<div class="col-sm-2 padding_all">
							<div class="blog_3">
								<ul>
									<li>11 <i class="fa fa-eye"></i></li>
									<li><a href="#">5</a> <i class="fa fa-comment"></i></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 padding_all">
						<div class="col-sm-1 padding_all">
						</div>
						<div class="col-sm-11 padding_all">
							<div class="blog_5">
								<ul>
									<li class="well_7"><a href=""><i class="fa fa-facebook"></i>Share</a></li>
									<li class="well_8"><a href=""><i class="fa fa-twitter"></i>Tweet</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-12 padding_all">
						<div class="center_4 clearfix">
							<div class="col-sm-4">
								<div class="center_2">
									<a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>"
											width="315%"></a>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="center_3">
									<!-- <h3><a href="#"><?= $value->judul; ?> </a></h3> -->
									<br>
									<!-- <h6><a href="#"><?= $value->tanggal;?></a> -->
									<h6><a href=""></a><?= ($value->isi); ?></h6>
									<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_email"></a>
<a class="a2a_button_whatsapp"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
									<br>

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


					<div class="col-sm-12 padding_all">
						<div class="details_4">
							<h5>Lacinia Nunc</h5>
							<p>Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa *</p>
						</div>
						<div class="details_5">
							<label for="comment">Comment</label>
							<textarea placeholder="" class="form-control"></textarea>
						</div>
						<div class="details_6">
							<label for="comment">Name *</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="details_6">
							<label for="comment">Email *</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="details_6">
							<label for="comment">Website</label>
							<input type="text" class="form-control" placeholder="">
						</div>
						<div class="details_7">
							<p><a href="#">Post Comment</a></p>
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
