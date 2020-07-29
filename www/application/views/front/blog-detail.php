<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $blog['topic'] ?> - BIRTHMARK</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    
  </head>
  <body>
    <div class="blog-nav container justify-content-end d-flex py-4">
      <a class="blog-nav mr-3" href="<?php echo site_url('blogs') ?>"><h3>BLOG</h3></a>
     <a class="blog-nav" href="<?php  echo site_url() ?>"><h3>HOME</h3></a>
    </div>
    <div class="container">
      <div class="blog-title text-center">
        <?php echo $blog['topic'] ?>
      </div>
    </div>
    <div class="mt-5 pt-5 mb-5">
      <img src="<?php echo (!empty($blog['cover'])) ? site_url('upload/'.$blog['cover']) : site_url('resources/img/cover.png')?>" class="w-100 blog-cover" alt="">
    </div>
    <div class="container blog-content">
        <div class="row justify-content-center d-flex">
          <div class="col-md-10">
          <?php echo $blog['content'] ?>
          </div>
        </div>
    </div>

<div class="container mt-5 mb-5">
  <div class="row p-4 p-md-0 justify-content-center d-flex">
  <div class="col-md-10">
    
    <hr style="border-top: 2px solid #000;">
    <div class="blog-author">
      <div class="row">
        <div class="col-6">
          <p>ผู้เขียน :</p>
        <h3> <?php echo $blog['author'] ?></h3>
      </div>
        <div class="col-6 text-right">
<p><i style="font-size:16px;" class="mr-2 fab fa-facebook-f"></i>Share</p>
<p><i style="font-size:16px;" class="mr-2 fas fa-link"></i>Copy Link</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php if ($blog['show_register_box'] == 1): ?>
  <div class="container inquery p-4 p-md-0">
  
  <div class="row justify-content-center d-flex ">
    <div class="col-md-9 text-center">
      <div class="inquery-title mb-4">
        ลงทะเบียนเพื่อรับคำแนะนำ และใบเสนอราคา
      </div>
      <form  method="post" action="<?php echo site_url('inquiry/add') ?>">
        <input type="hidden" name="id" value="<?php echo $blog['id'] ?>">
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="justify-content-start d-flex">
              <span><img src="<?php echo site_url('resources/front/') ?>img/user.png"></span>
              <input type="text" name="name" class="iq-input ml-2 form-control" placeholder="FULLNAME">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="justify-content-start d-flex">
              <span><img src="<?php echo site_url('resources/front/') ?>img/tel.png"></span>
              <input type="text" name="phone" class="iq-input ml-2 form-control" placeholder="PHONE NUMBER">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="justify-content-start d-flex">
              <span><img src="<?php echo site_url('resources/front/') ?>img/e-mail.png"></span>
              <input type="text" name="email" class="iq-input ml-2 form-control" placeholder="EMAIL">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="justify-content-start d-flex">
              <span><img src="<?php echo site_url('resources/front/') ?>img/company.png"></span>
              <input type="text" name="company" class="iq-input ml-2 form-control" placeholder="COMPANY NAME">
            </div>
          </div>
        </div>
        <button type="submit" class="btn inquery-btn px-4 mt-4">รับคำแนะนำจากเรา</button>
      </form>
      
    </div>
  </div>
</div>
<?php endif ?>

<div class="container pb-5" style="margin-top: 260px;">
  <div class="row">
    <div class="col">
      <div class="social-item">
        <a target="_blank" href="https://www.facebook.com/birthmarkth"> <img src="<?php echo site_url('resources/front/') ?>img/facebook.png" width="25px"></a>
                <a target="_blank" href="https://www.instagram.com/birthmarkth"> <img src="<?php echo site_url('resources/front/') ?>img/ig.png" style=" padding: 0px 20px; width: 66px;"></a>
                <a target="_blank" href="https://twitter.com/birthmark_co"> <img src="<?php echo site_url('resources/front/') ?>img/tw.png" width="25px"></a>
      </div>
    </div>
    <div class="col">
      <span class="copyright" style="text-align: end;  display: grid; ">Copyright ©2020 Birthmark Company Limited.</span>
    </div>
  </div>
</div>
</div>
<a class="prev-blog d-none d-lg-block" href="<?php echo site_url('blog/get_previous_blog/') ?><?php echo $blog['id'] ?>">บทความก่อนหน้า</a>
<a class="next-blog d-none d-lg-block" href="<?php echo site_url('blog/get_next_blog/') ?><?php echo $blog['id'] ?>">บทความถัดไป</a>
    
    
    
    
    
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
    <!-- <script src="<?php echo site_url('resources/front/') ?>js/main.js"></script> -->
  </body>
</html>