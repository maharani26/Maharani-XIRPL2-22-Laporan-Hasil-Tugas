<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body style="margin-top:50px; margin-left:250px; background-image: url(<?=base_url()?>assets/img/adr.jpg); background-size:cover;">
		<h3 style="margin-left:30px; margin-top:60px;">Selamat Datang <?=$this->session->userdata('nama_user')?></h3>
			<p class="panel-subtitle" style="margin-left:30px;">Dealer Online Pertama di Indonesia</p>



		<div class="boss" style="width">

		<div class="main">
				<!-- MAIN CONTENT -->
				<div class="main-content" style="margin-top:-100px; margin-left:-260px;" >
					<div class="container-fluid">
						<div class="panel panel-profile">
							<div class="clearfix">
								<!-- LEFT COLUMN -->
								<div class="profile-left">
									<!-- PROFILE HEADER -->
									<div class="profile-header">
										<div class="overlay"></div>
										<div class="profile-main">
											<!-- <img src="assets/logo.png" class="img-circle" alt="Avatar" style="width:100px; height:100px;"> -->
											<h3 class="name"></h3>
											<span class="online-status status-available">Penjualan Sepeda Motor Terbaik</span>
										</div>
										<div class="profile-stat" style="background-color: #b81e1e;">
											<div class="row">
												<div class="col-md-4 stat-item">
													45 <span>Merk Motor</span>
												</div>
												<div class="col-md-4 stat-item">
													Up to 50% <span>Discount</span>
												</div>
												<div class="col-md-4 stat-item">
													2174 <span>Testimoni</span>
												</div>
											</div>
										</div>
									</div>
									<!-- END PROFILE HEADER -->
									<!-- PROFILE DETAIL -->
									<div class="profile-detail">
										<div class="profile-info">
											<h4 class="heading">For Your Information</h4>
											<ul class="list-unstyled list-justify">
												<li>Since <span>1 Feb, 2011</span></li>
												<li>Mobile <span>(124) 823409234</span></li>
												<li>Email <span>sport.id.com</span></li>
												<li>Website <span><a href="https://www.troops.com">www.sportind.com</a></span></li>
											</ul>
										</div>
										<div class="profile-info">
											<h4 class="heading">Social Media</h4>
											<ul class="list-inline social-icons">
												<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- END PROFILE DETAIL -->
								</div>
								<!-- END LEFT COLUMN -->
								<!-- RIGHT COLUMN -->


								<div class="profile-right">
								<div class="panel-body">
								<div class="row">
									<div class="col-md-4">
								<?php if($this->session->userdata('level')=='admin'){?>
									<a href="<?=base_url('index.php/Kasir')?>" style="color: black">
									<?php }?>
										<div class="metric">
											<span class="icon"><i class="fa fa-eye"></i></span>
											<p>
												<span class="number"><?= $user?></span>
												<span class="title">Cashier</span>
											</p>
										</div>
									<?php if($this->session->userdata('level')=='admin'){?>
									</a>
									<?php }?>
									</div>
									<div class="col-md-4">

									<a href="<?=base_url('index.php/Histori')?>" style="color: black">
										<div class="metric">
											<span class="icon"><i class="fa fa-shopping-bag"></i></span>
											<p>
												<span class="number"><?= $transaksi ?></span>
												<span class="title">Transaction</span>
											</p>
										</div>

										</a>
									</div>
									<div class="col-md-4">
									<a href="<?=base_url('index.php/sepeda')?>" style="color: black">
										<div class="metric">
											<span class="icon"><i class="fa fa-bar-chart"></i></span>
											<p>
												<span class="number"><?= $sepeda ?></span>
												<span class="title">Motorcycle</span>
											</p>
										</div>

										</a>
									</div>
								</div>

							</div>


									<h4 class="heading">Sport.Id Awards</h4>
									<!-- AWARDS -->
									<div class="awards">
										<div class="row">
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="lnr lnr-sun award-icon"></span>
													</div>
													<span>Guaranteed and trusted</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="lnr lnr-clock award-icon"></span>
													</div>
													<span>Delivery and fast response</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="lnr lnr-magic-wand award-icon"></span>
													</div>
													<span>Guaranteed</span>
												</div>
											</div>
											<div class="col-md-3 col-sm-6">
												<div class="award-item">
													<div class="hexagon">
														<span class="lnr lnr-heart award-icon"></span>
													</div>
													<span>Original and high quality</span>
												</div>
											</div>
										</div>
										<div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div>
									</div>

		</div>


	</body>
</html>
