<section id="footer">
   <div class="col-sm-12 padding_all">
    <div class="footer_main clearfix">
	 <div class="col-sm-4">
	 <div class="footer_1">
	  <h3>IPD</h3>
	  <p><a href="#"><i class="fa fa-star-half-o"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-half-o"></i> Duo Koto Malalo</a></p>
	 </div>
	 <div class="footer_2">
	  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed dignissim lacinia nunc. </p>
	 </div>
	</div>
	 <div class="col-sm-4">
	  <div class="footer_3">
	   <h3>NOSTRA</h3>
	   <p><a href="#"><img src="<?= base_url();?>template/img/foto3.jpg" width="100%"></a></p>
	   <h4><a href="#">Nibh Elementum Imperdiet. Duis Sagittis?</a></h4>
	  </div>
	  <div class="footer_3">
	   <p><a href="#"><img src="<?= base_url();?>template/img/foto4.jpg" width="100%"></a></p>
	   <h4><a href="#"> Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Integer Nec Odionec Odio</a></h4>
	  </div>
	 </div>
	 <div class="col-sm-4">
	  <div class="footer_4">
	   <h3>OLAHRAGA</h3>
	  </div>
	  <?php foreach ($berita_olahraga as $key => $value) :?>
	  <div class="col-sm-12">
	   <div class="col-sm-4">
	    <div class="footer_5">
		<p> <a href="#"><img src="<?= base_url();?>assets/images/<?=$value->image;?>"
												width="100%"></a></p>
		</div>
	   </div>
	   <div class="col-sm-8">
	    <div class="footer_6">
		<h5><a href="<?= base_url();?>/c_user/details_berita/<?=$value->id;?>"><?= $value->judul; ?>
											</a></h5>
		</div>
	   </div>
	  </div>
	  
	  <?php endforeach; ?>
	 </div>
	</div>
   </div>
   <div class="col-sm-12 padding_all">
    <div class="footer_inner clearfix">
	 <div class="col-sm-10">
	 <div class="footer_8"><p>© 2020 Duo Koto Malalo<a href="http://www.TemplateOnWeb"></a> </p></div>
	</div>
	<div class="col-sm-2">
	</div>
	</div>
   </div>
</section>
<script src="<?= base_url();?>template/js/cbpAnimatedHeader.js"></script>
<script src="<?= base_url();?>template/js/classie.js"></script> 

<script>    
$('#example2').DataTable()
window.setTimeout(function(){
  $("#pesan").fadeTo(1000,0).slideUp(500,function () { 
    $(this).remove();
   });
}, 6000);
</script>

<!--komen Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>