
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
      <a class="left carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="http://bootsnipp-env.elasticbeanstalk.com/iframe/xBdN#carousel-example-generic" data-slide="next">
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
				 foreach ($berita as $key => $value):?>
	 <div class="col-sm-12 padding_all">
	  <div class="center_4 clearfix">
	   <div class="col-sm-4">
	   <div class="center_2">
	   <a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>" width="100%"></a>
	   </div>
	  </div>
	   <div class="col-sm-8">
	  <div class="center_3">
	  <h6><a href="#"><?= $value->tanggal;?></a>
	  <h3><a href="#"><?= $value->judul; ?> </a></h3>
	  <h6><a href=""></a><?= limit_words ($value->isi,50); ?></h6>
	  <a href="<?= base_url();?> home/<?= $value->id; ?>"> Selengkapnya</a>
	  
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
	  <div class="center_4 clearfix">
	   <div class="col-sm-4">
	   
	  </div>
	 
	  </div>
	 </div>
	 <div class="col-sm-12 padding_all">
	  <div class="center_4 clearfix">
	   <div class="col-sm-4">
	  
	  </div>
	 
	  </div>
	 </div>
	 <div class="col-sm-12 padding_all">
	  <div class="center_4 clearfix">
	   <div class="col-sm-4">
	  
	  </div>
	 
	  </div>
	 </div>
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
	<div class="col-sm-4">
	 <div class="center_main clearfix">
	  <div class="center_6">
	   <p><a href="#"><img src="<?= base_url();?>template/img/foto2.jpg" width="100%"></a></p>
	   <h3>Agenda</h3>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/12.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		 <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	 
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/14.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/15.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="center_9">
	      <p><a href="#"><img src="<?= base_url();?>template/img/16.jpg"></a></p>
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
	  <div class="center_6">
	   <p><a href="#"><img src="<?= base_url();?>template/img/52.jpg" width="100%"></a></p>
	   <h3>PRAESENT MAURIS</h3>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/12.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		 <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/13.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		 <h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p><a href="#"><img src="<?= base_url();?>template/img/14.jpg"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		<h5><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec</a></h5>
		 <p>MARCH 3, 2017</p>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
