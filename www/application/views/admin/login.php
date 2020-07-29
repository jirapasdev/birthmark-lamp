<!DOCTYPE html>
<html>

  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIRTHMARK</title>

      <!-- CSS styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo site_url('resources') ?>/css/style-back.css">
      <!-- JS Libs -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.1/dist/sweetalert2.all.min.js"></script>


  </head>

  <body class="text-center">
    <div class="login">
      <div class="container">
        <div class="justify-content-center d-flex mb-5">
          <img src="<?php echo site_url('resources/') ?>img/logo.png" class="logo">
        </div>
        <div class="row justify-content-center d-flex">

          <div class="col-md-4">
            <form  method="post" action="<?php echo site_url('admin/login') ?>">
              <div class="form-group">
                <input required type="email" class="form-control bg-light col-form-label-lg" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input required type="password" class="form-control bg-light col-form-label-lg" id="password" name="password" placeholder="Password">
              </div>
              <div style="display: flex; justify-content: center;"> 
                <button type="submit" class="btn btn-dark">SIGN IN</button>
              </div>
            </form>
          </div>
          
        </div>

      </div>

    </div>


    <script type="text/javascript">
  <?php 
  $msg = $this->session->flashdata('login_error_msg');
  if (isset($msg)) { ?>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '<?php echo $msg ?>'
    })
  <?php } ?>
</script>
     
</body>
</html>
