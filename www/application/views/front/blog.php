<!DOCTYPE html>
<html>
  <head>
    <title>BLOG - BIRTHMARK</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="เบิร์ธมาร์ค ดิจิทัล มาร์เก็ตติ้ง เอเจนซี่ ที่มีประสบการณ์ และความเชี่ยวชาญด้าน การตลาดออนไลน์ ด้วยทีมผู้เชี่ยวชาญเฉพาะด้าน ทั้งด้านคอนเทนต์มาร์เก็ตติ้ง การทำการตลาดผ่าน Facebook การทำการตลาด ผ่าน Google Search การสร้างภาพลักษณ์แบรนด์ผ่านช่องทางออนไลน์ และอื่นๆแบบครบวงจร">
    <meta name="keywords" content="ดิจิทัล มาร์เก็ตติ้ง เอเจนซี่, digital marketing agency, Birthmark, การตลาดออนไลน์, คอนเทนต์มาร์เก็ตติ้ง, การทำการตลาดผ่าน Facebook, การทำการตลาด ผ่าน Google Search, การสร้างภาพลักษณ์แบรนด์">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo site_url('resources/front/') ?>owlcarousel/owl.theme.default.css">
    
  </head>
  <body>
    <div class="container justify-content-end d-flex py-4"><a class="blog-nav" href="<?php echo site_url() ?>"><h3>HOME</h3></a></div>
    <div class=" w-100 h-100 " style="background-attachment: fixed;">
     <div class="title centered pt-5 d-none d-md-block" >BLOG</div>
      
      <div class="blog-wrap w-100" style="background: transparent;">
        <div class="container">
          <div class="row">
            <div class="col-md-5 left-blog">
              <?php $i = 1 ?>
               <?php foreach($blog as $b){ ?>
                <?php if ($i%2==0 && $b['status'] == 1): ?>
                  <div class="blog text-center mb-5">
               <a class="blog-link" href="<?php echo site_url('blog/'.$b['id']); ?>">
                  <img class="w-100 blog-img mb-4" src="<?php echo (!empty($b['cover'])) ? site_url('upload/'.$b['cover']) : site_url('resources/img/cover.png')?>" alt="">
                <p class="text-truncate pb-4" style="font-size: 30px;"><?php echo $b['topic']; ?></p>
                </a>
              </div>
                <?php endif ?>
               <?php $i = $i + 1; ?>
              <?php } ?>

            </div>
            <!-- <div class="col-md-2 order-12">
              
            </div> -->
            <div class="col-md-5 offset-md-2 right-blog">
              <?php $i = 1 ?>
               <?php foreach($blog as $b){ ?>
                <?php if ($i%2 !== 0 && $b['status'] == 1): ?>
                  <div class="blog text-center mb-5">
               <a class="blog-link" href="<?php echo site_url('blog/'.$b['id']); ?>">
                  <img class="w-100 blog-img mb-4" src="<?php echo (!empty($b['cover'])) ? site_url('upload/'.$b['cover']) : site_url('resources/img/cover.png')?>" alt="">
                <p class="text-truncate pb-4" style="font-size: 30px;"><?php echo $b['topic']; ?></p>
                </a>
              </div>
                <?php endif ?>
               <?php $i = $i + 1; ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" ></script>
    <!-- <script src="js/script.js" ></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <script src="<?php echo site_url('resources/front/') ?>js/bootstrap.min.js"></script>
    <script src="<?php echo site_url('resources/front/') ?>owlcarousel/owl.carousel.min.js"></script>
    <!-- <script >
    new WOW().init();
    </script> -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo site_url('resources/front/') ?>js/main.js"></script>
  </body>
</html>