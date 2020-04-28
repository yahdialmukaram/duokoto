

<section id="gallery">
  <div class="container">
   <div class="row">
    <div class="col-sm-12">
	 <div class="gallery_main clearfix">
	  <h1 class="text-center">GALLERY</h1>
   </div> 
   <?php
     foreach ($gallery as $key => $value) :?>
   
	 <div class="col-sm-4 padding_all">
	  <div class="gallery_1">
      <div class="info">
        <h3 class="text-center"><?= $value->judul;?></h3>
      </div>
                  <div class="ih-item square effect4 left_to_right"><a href="#">
                      <div class="img"><img src="<?= base_url();?>assets/images/<?= $value->image ?>" width="100%" alt="img"></div>
                    </a>
                    </div>
          </div>
	 </div>

     <?php endforeach;?>
	</div>
   </div>
  </div>
 </section>
