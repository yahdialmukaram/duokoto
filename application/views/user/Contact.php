
<section id="contact">
 <div class="contact">
  <div class="container">
       <h2 class="text-center">CONTACTS</h2>
   <div class="row">
    <div class="col-sm-12 padding_all">
	  <div class="col-sm-6 padding_all">
	  <div class="contact_4">
	    <h4>KRITIK DAN SARAN:</h4>
		<p>Silahkan Masukan Kritik dan Saran Dunsanak</p>
	   </div>

	   <!-- aler simpan saran user -->
	   <?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<strong><?=$this->session->flashdata('success');
						?></strong>
					</div>
					<?php endif;?>

	   <form action="<?= base_url();?>c_user/simpan_saran/" method="POST">
	  <div class="col-sm-12 drop_2 clearfix">
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="nama" placeholder="nama" required=""></div>
	   </div>
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="email" placeholder="email" required=""></div>
	   </div>
	   <div class="col-sm-4 drop_2">
	    <div class="contact_5"><input type="text" name="no_hp" placeholder="phone" required=""></div>
	   </div>
	  </div>
	  <div class="col-sm-12 drop_2">
	   <div class="contact_6"><textarea name="pesan" placeholder="message" required=""></textarea></div>
	   <div class="contact_7">
	     <ul>
			 <li>	 <button class="bnt btn-primary" type="submit">Kirim Saran</button></li>
		
		 </ul>
		</form>
	   </div>
	  </div>
	 </div>
	 <div class="col-sm-6 padding_all">
        <section id="contact_main">
       
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d866.2332583338343!2d100.484131!3d-0.588236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2110432d565ec490!2sMasjid%20Mujahidin!5e1!3m2!1sid!2sid!4v1587417005557!5m2!1sid!2sid" width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
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
