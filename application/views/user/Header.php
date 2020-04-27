<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duo Koto News</title>
    <link href="<?= base_url();?>template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>template/css/style.css" rel="stylesheet">
	<link href="<?= base_url();?>template/css/element.css" rel="stylesheet">
	 <link rel="<?= base_url();?>template/stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro" rel="stylesheet">
	
	
   <script src="<?= base_url();?>template/js/jquery-2.1.1.min.js"></script>
    <script src="<?= base_url();?>template/js/bootstrap.min.js"></script>
	
</head>


<body>
	
<!-- star komen facebook -->
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v6.0"></script>
<!-- end komentar -->

<section id="header">
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.html">DuokotoNews<span class="well_4"></span></br><span class="well_1"></span>
		<span class="well_1"><marquee> Selamat Datang </span><span class="well_1">di Website Awak Jorong Duo Koto </marquee></span></a>
	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-center">
					<li class=""><a href="<?= base_url();?>c_user/index/">Home</a></li>
					<li><a href="<?= base_url();?>c_user/blog/">Berita Terkini</a></li>
					<li><a href="<?= base_url();?>c_user/gallery/">Gallery</a></li>
					<li><a href="<?= base_url();?>c_user/contact/">Contact</a></li>
					<!-- <li><a href="<?= base_url();?>c_user/data_penduduk/">Data Penduduk</a></li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Data Jorng<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?= base_url();?>c_user/data_penduduk">Data Penduduk</a></li>
							<li><a href="<?= base_url();?>c_user/gallery">Galerry</a></li>
							<li><a href="<?= base_url();?>template/team.html">Dokumentasi Kegiatan</a></li>
						</ul>
					</li>
				</ul>
				<ul class="navbar-right">
				   <li class="dropdown"><a class="text_1 pad_1" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span></a>
                    <ul class="dropdown-menu drop_inner" style="min-width:100%;">
                        <li>
                            <div class="row_1">
                                <div class="col-sm-12">
                                    <form class="navbar-form navbar-left" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button">
                                                Go!</button>
                                        </span>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</section>