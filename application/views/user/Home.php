
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
	  <h3><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?> </a></h3>
	
	  <h6><a href=""></a><?= limit_words ($value->isi,50); ?></h6>

	  
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
	   <h3>Berita Olahraga</h3>
	  </div>
	  
	  <?php
	  foreach ($berita as $key => $value): ?>
	  <div class="col-sm-12 padding_all">
	   <div class="col-sm-4 padding_all">
	     <div class="center_7">
	      <p> <a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>" width="100%"></a></p>
	     </div>
	   </div>
	   <div class="col-sm-8 padding_all">
	    <div class="center_8">
		 <h5><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?> </a></h5>
		 <!-- <h6><a href=""></a><?= limit_words ($value->isi,50); ?></h6> -->
		</div>
	   </div>
	  </div>
	  <?php endforeach; ?>
	
	
	  <div class="col-sm-12 padding_all">
	   <div class="center_9">
	      <p><a href="#"><img src="<?= base_url();?>template/img/foto2.jpg"width="100%"></a></p>
	     </div> 
	 
	
	  
	 
	  </div>
	 </div>
	 
	 <div class="center_main clearfix">
	  <h3><b>Profil</b></h3>
<input type="radio" name="Provinsi" value="Provinsi">provinsi    : Sumatra Barat<br>
<input type="radio" name="kabupaten" value="kabupaten">kabupaten : Tanah Datar<br>
<input type="radio" name="kecamatan" value="kecamatan">kecamatan : Batipuh Selatan <br>
<input type="radio" name="jumlah penduduk" value="jumlah penduduk">jumlah penduduk : 1200 jiwa<br>
<input type="radio" name="jumlah_kk " value="jumlah kk">jumlah kk : 300 kk<br>
<input type="radio" name="jumlah laki" value="jumlah laki">jumlah laki-laki : 500<br>
<input type="radio" name="jumlah perempuan" value="jumlaj perempuan">jumlah prempuan : 683<br>
<input type="radio" name="kondisi fisik" value="kondisi fisik">kondisi fisik : Perbukitan, Dataran<br>
<br>
<br>
<br>
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=id" type="text/javascript"></script>

<script type="text/javascript">
var geocoder = new google.maps.Geocoder();

// http://cariprogram.blogspot.com
// nuramijaya@gmail.com

function initialize() {
  var latLng = new google.maps.LatLng(-7.8, 110.3666667);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 12,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Ambarrukmo Plaza Yogyakarta',
    map: map,
    draggable: true
  });

 // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var marker1 = new google.maps.Marker({
  position : pos,
  animation:google.maps.Animation.BOUNCE,
  title : 'lokasi',
  //icon : 'assets/icon.png',
  map : map,
  draggable : true
  });
    map.setCenter(pos);
    /*google.maps.event.addListener(marker1, 'drag', function() {
   updateMarkerPosition(marker1.getPosition());
  });
  updateMarkerPosition(marker1.getPosition())*/  
    }, function() {
      //=handleNoGeolocation(true);
        var marker1 = new google.maps.Marker({
  position : latLng,
  animation:google.maps.Animation.BOUNCE,
  title : 'lokasi',
//   icon : 'assets/icon.png',
  map : map,
  draggable : true
  });
   /*google.maps.event.addListener(marker1, 'drag', function() {
   updateMarkerPosition(marker1.getPosition());
  });
  updateMarkerPosition(marker1.getPosition())*/
    });
  } else {
    // Browser doesn't support Geolocation
    //=handleNoGeolocation(false);
     var marker1 = new google.maps.Marker({
  position : latLng,
  animation:google.maps.Animation.BOUNCE,
  title : 'lokasi',
  //icon : 'assets/icon.png',
  map : map,
  draggable : true
  });
   /*google.maps.event.addListener(marker1, 'drag', function() {
   updateMarkerPosition(marker1.getPosition());
  });
  updateMarkerPosition(marker1.getPosition())*/
  }

}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<style>
  #mapCanvas {
    width: 300px;
    height: 350px;
    float: left;
  }
</style>
<br />
<div id="mapCanvas"></div>
	  <!-- </div> -->
					

	
	 
	
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
