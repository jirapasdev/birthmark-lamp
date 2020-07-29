<!DOCTYPE html>
<html>

<head>
	<title>BIRTHMARK DIGITAL AGENCY</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="เบิร์ธมาร์ค ดิจิทัล มาร์เก็ตติ้ง เอเจนซี่ ที่มีประสบการณ์ และความเชี่ยวชาญด้าน การตลาดออนไลน์ ด้วยทีมผู้เชี่ยวชาญเฉพาะด้าน ทั้งด้านคอนเทนต์มาร์เก็ตติ้ง การทำการตลาดผ่าน Facebook การทำการตลาด ผ่าน Google Search การสร้างภาพลักษณ์แบรนด์ผ่านช่องทางออนไลน์ และอื่นๆแบบครบวงจร">
    <meta name="keywords" content="ดิจิทัล มาร์เก็ตติ้ง เอเจนซี่, digital marketing agency, Birthmark, การตลาดออนไลน์, คอนเทนต์มาร์เก็ตติ้ง, การทำการตลาดผ่าน Facebook, การทำการตลาด ผ่าน Google Search, การสร้างภาพลักษณ์แบรนด์">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css">
	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>owlcarousel/owl.theme.default.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/front/') ?>css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/front/') ?>css/style12.css" />
	<script src="<?php echo site_url('resources/front/') ?>js/snap.svg-min.js"></script>
	<script src="<?php echo site_url('resources/front/') ?>js/modernizr.custom.js"></script>

</head>

<body>


	<div class="header">
		<div class="justify-content-end d-flex">
			<div class="progress-container">
				<div class="progress-bar" id="myBar"></div>
			</div>
		</div>

	</div>
	<div class="menu">
		<span id="trigger-overlay" style="font-size:30px;cursor:pointer">
			<div class="bar1"></div>
			<div class="bar3"></div>
		</span>
	</div>

	<div id="fullpage">
		<div class="section" id="section0" data-anchor="home">
			<div id="home" class="home-bg d-none d-md-block" style="background-image: url(<?php echo site_url('upload/') ?><?php echo $home_page['desktop_banner']; ?>);">
				<div class=" pb-4 text-white w-100" style="position: absolute; bottom: 0">

					<marquee class="home_txt" behavior="scroll" direction="left" scrollamount="10" loop="0">
						<?php echo $home_page['desktop_text']; ?>
					</marquee>

				</div>
			</div>
			<div id="home" class="home-bg d-block d-md-none" style="background-image: url(<?php echo site_url('upload/') ?><?php echo $home_page['mobile_banner']; ?>);">
				<div class=" pb-4 text-white w-100" style="position: absolute; bottom: 0">

					<marquee class="home_txt" behavior="scroll" direction="left" scrollamount="10" loop="0">
						<?php echo $home_page['mobile_text']; ?>
					</marquee>

				</div>
			</div>
			<?php if (!empty($home_page['video_url'])) : ?>
				<video autoplay muted loop id="homeVideo">
					<source src="<?php echo $home_page['video_url']; ?>" type="video/mp4">
				</video>
			<?php endif ?>
		</div>

		<div class="section" id="section1" data-anchor="showcase">
			<div class="showcase">
				<div id="showcase-stack" class="section-padding">
					<div class="row">
						<div class="col-md-5">
							<p class="title text-uppercase pb-4 mt-lg-4 ">showcase</p>
							<p class="description">
								<?php echo $showcase_page['text']; ?>
							</p>
						</div>
						<div class="col-md-7" style="position: relative;">
							<div class="img-group">
								<?php foreach ($showcase as $s) { ?>

									<?php if ($s['position'] == 3) : ?>
										<img src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/' . $s['cover_img']) : site_url('resources/img/cover.jpg') ?>" class="img-stack1" alt="...">
									<?php endif ?>

									<?php if ($s['position'] == 2) : ?>
										<img src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/' . $s['cover_img']) : site_url('resources/img/cover.jpg') ?>" class="img-stack2" alt="...">
									<?php endif ?>

									<?php if ($s['position'] == 1) : ?>
										<img src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/' . $s['cover_img']) : site_url('resources/img/cover.jpg') ?>" class="img-stack3" alt="...">
									<?php endif ?>

								<?php } ?>



							</div>

						</div>
					</div>

				</div>
				<div id="showcase-list" class="section-padding pr-lg-0">
					<p class="title text-uppercase pb-2">showcase</p>
					<p class="description" id="showcase_txt"><?php echo $showcase_page['text']; ?></p>
					<div id="view-ad-image">
						<div id="showcase-slide" class="owl-carousel owl-theme">
							<?php foreach ($showcase as $s) { ?>

								<div class="item"><img id="showcase_img" src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/' . $s['cover_img']) : site_url('resources/img/cover.jpg') ?>" alt="showcase"></div>

							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section2" data-anchor="clients">
			<div class="clients">
				<div class="section-padding">
					<div class="row ">
						<div class="col-md-3 animate1 align-items-center d-flex ">
							<p class="title  text-uppercase pb-4">clients</p>

						</div>
						<div class="col-md-9 ">

							<div class="showcase-verticle">
								<div class="swiper-container">
									<div class="swiper-wrapper">


										<?php foreach ($client as $c) { ?>
											<div class="swiper-slide">
												<h2 class="client-name"> <?php echo $c['name']; ?></h2>
											</div>

										<?php } ?>

									</div>
									<!-- Add Pagination -->
									<!-- <div class="swiper-pagination"></div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section" id="section3" data-anchor="contact">
			<div class="contact">
				<div class="section-padding">
					<div class="row mt-4">
						<div class="col-md-6 animate2 order-2 order-md-1 ">

							<p class="title text-uppercase pb-0 pb-md-3">contact</p>
							<?php if (!empty($contact_page['contact_img'])) : ?>
								<img src="<?php echo site_url() ?>/upload/<?php echo $contact_page['contact_img']; ?>" style="max-height: 260px;" class="w-100 d-block d-md-none mb-3" alt="...">
							<?php else : ?>
								<img src="<?php echo site_url('resources') ?>/img/cover.png" style="max-height: 200px;" class="w-100 d-block d-md-none mb-3" alt="...">

							<?php endif ?>

							<p class="pb-md-3 contact-content">
								Birthmark Co., Ltd.
								1000/7-8 Liberty Plaza 19th Floor, Sukhumvit 55 Road (Thonglor), Klong Tan Nuea, Vadhana, Bangkok, Thailand
								10110
							</p>
							<p class="text-uppercase tel-text pb-0 pb-md-2">TEL : 02-058-3599</p>
							<p class="text-uppercase email-text">EMAIL : INFO@BIRTHMARKTH.COM</p>
							<form id="subscribe_email" class="d-none d-lg-block" method="POST" action="<?php echo site_url('email/add') ?>">
								<div class="form-group row " style="margin-top: 20px;">
									<div class="col-sm-12 email-mobile">
										<input name="email_acc" type="text" class="form-control custom" id="inputEmail3" placeholder="ENTER YOUR E-MAIL FOR COMPANY PROFILE">
									</div>
									<div id="submit_email" class="col-sm-2 arrow arrow-mobile">
										<img src="<?php echo site_url('resources/front/') ?>img/icon-arrow.png" class="img-input" alt="...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6 order-1 order-md-2 ">
							<?php if (!empty($contact_page['contact_img'])) : ?>
								<img src="<?php echo site_url() ?>/upload/<?php echo $contact_page['contact_img']; ?>" class="contact-img w-100 d-none d-md-block mb-4" alt="...">
							<?php else : ?>
								<img src="<?php echo site_url('resources') ?>/img/cover.png" class="contact-img w-100 d-none d-md-block mb-4" alt="...">

							<?php endif ?>
						</div>
					</div>
				</div>
				<div class="footer pb-2 mt-5 section-padding ">
					<div class="row">
						<div class="col-md-6">
							<div class="social-item text-center text-md-left">
								<a target="_blank" href="https://www.facebook.com/birthmarkth"> <img src="<?php echo site_url('resources/front/') ?>img/facebook.png" width="25px"></a>
								<a target="_blank" href="https://www.instagram.com/birthmarkth"> <img src="<?php echo site_url('resources/front/') ?>img/ig.png" style=" padding: 0px 20px; width: 66px;"></a>
								<a target="_blank" href="https://twitter.com/birthmark_co"> <img src="<?php echo site_url('resources/front/') ?>img/tw.png" width="25px"></a>
							</div>
						</div>
						<div class="col-md-6 d-none d-lg-block">
							<span class="copyright" style="text-align: end;  display: grid; ">Copyright ©2020 Birthmark Company Limited.</span>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>


	<div class="overlay overlay-slidedown">
		<button type="button" class="overlay-close" style="background: url(<?php echo site_url('resources/front/') ?>img/close.png) no-repeat center center;"></button>
		<nav>
			<ul>
				<li><a href="#showcase" class="overlay-link text-uppercase">Showcase</a></li>
				<li><a href="#clients" class="overlay-link text-uppercase">Clients</a></li>
				<li><a href="#contact" class="overlay-link text-uppercase">Contact</a></li>
				<li><a href="<?php echo site_url('blogs') ?>" class="overlay-link text-uppercase">Blog</a></li>
			</ul>
		</nav>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="<?php echo site_url('resources/front/') ?>js/bootstrap.min.js"></script>
	<script src="<?php echo site_url('resources/front/') ?>owlcarousel/owl.carousel.min.js"></script>
	<script src="<?php echo site_url('resources/front/') ?>js/classie.js"></script>
	<script src="<?php echo site_url('resources/front/') ?>js/demo12.js"></script>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<script src="<?php echo site_url('resources/front/') ?>js/main.js"></script>

	<script>
		$("#submit_email").click(function() {
			$("#subscribe_email").submit();
		});

		$(".overlay-link").click(function() {
			$(".overlay-slidedown").removeClass("open");
			$('.bar1').css("opacity", "1");
			$('.bar3').css("opacity", "1");
		});

		$("#trigger-overlay").click(function() {
			$('.bar1').css("opacity", "0");
			$('.bar3').css("opacity", "0");
		});

		$(".overlay-close").click(function() {
			$('.bar1').css("opacity", "1");
			$('.bar3').css("opacity", "1");
		});
	</script>

	<script type="text/javascript">
		var video = document.getElementById("homeVideo");

		var myFullpage = new fullpage('#fullpage', {
			afterLoad: function(origin, destination, direction) {
				var loadedSection = this;

				if (destination.index == 0) {
					// $('.bar1').css("background","white");
					// $('.bar3').css("background","white");
					$('.progress-container').css("width", "75%");
					<?php if (!empty($home_page['video_url'])) : ?>
						if (video.paused) {
							video.play();
						}
					<?php endif ?>

				} else if (destination.index == 1) {
					$('.bar1').css("background", "#333");
					$('.bar3').css("background", "#333");
					$('.progress-container').css("width", "50%");

				} else if (destination.index == 2) {
					$('.bar1').css("background", "#333");
					$('.bar3').css("background", "#333");
					$('.progress-container').css("width", "25%");

					//$('#section2 p').style.setProperty('--animate-duration', '0.5s');
				} else if (destination.index == 3) {
					$('.bar1').css("background", "#333");
					$('.bar3').css("background", "#333");
					$('.progress-container').css("width", "0%");
				}


			},
			onLeave: function(index, nextIndex, direction) {
				if (nextIndex.anchor == "clients" && index.anchor == "showcase") {
					$('.showcase-verticle').addClass('animate__animated  animate__fadeIn animate__custom');
					$('.clients .title').addClass('animate__animated  animate__fadeIn animate__custom');
				} else {
					$('.showcase-verticle').removeClass('animate__animated  animate__fadeIn animate__custom');
					$('.clients .title').removeClass('animate__animated  animate__fadeIn animate__custom');
				}

				if (nextIndex.anchor == "showcase" && index.anchor == "home") {
					$('.img-stack1').addClass('animate__animated  animate__fadeIn animate__fast');
					$('.img-stack2').addClass('animate__animated  animate__fadeIn animate__slow');
					$('.img-stack3').addClass('animate__animated  animate__fadeIn animate__slower');
					$('.showcase .title').addClass('animate__animated  animate__fadeIn animate__custom');
					$('.description').addClass('animate__animated  animate__fadeIn animate__custom');
				} else {
					$('.img-stack1').removeClass('animate__animated  animate__fadeIn animate__fast');
					$('.img-stack2').removeClass('animate__animated  animate__fadeIn animate__slow');
					$('.img-stack3').removeClass('animate__animated  animate__fadeIn animate__slower');
					$('.showcase .title').removeClass('animate__animated  animate__fadeIn animate__custom');
					$('.description').removeClass('animate__animated  animate__fadeIn animate__custom');
				}

				if (nextIndex.anchor == "contact" && index.anchor == "clients") {
					$('.contact-img').addClass('animate__animated  animate__fadeIn animate__custom');
					$('.animate2').addClass('animate__animated  animate__fadeIn animate__custom');
				} else {
					$('.contact-img').removeClass('animate__animated  animate__fadeIn animate__custom');
					$('.animate2').removeClass('animate__animated  animate__fadeIn animate__custom');
				}
			}

		});
	</script>






</body>

</html>