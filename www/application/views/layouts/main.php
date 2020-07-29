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
	    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('resources/js/summernote_upload.js') ?>" ></script>


	</head>

	<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-0 pt-4" id="main-nav">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	  <div class=" collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav mx-auto">
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="home_page" || $this->uri->segment(1)=="admin"){echo "active";}?>">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('home_page') ?>">Banner Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="showcase_page"){echo "active";}?>">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('showcase_page') ?>">Showcase</a>
	      </li>
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="client"){echo "active";}?>">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('client') ?>">Client</a>
	      </li>
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="contact_page"){echo "active";}?>">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('contact_page') ?>">Contact</a>
	      </li>
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="database"){echo "active";}?>">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('database') ?>">Database</a>
	      </li>
	      <li class="nav-item px-4 <?php if($this->uri->segment(1)=="blog"){echo "active";}?> ">
	        <a class="nav-link px-4 text-uppercase" href="<?php echo site_url('blog') ?>">Blog</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav>
	
	<div class="container content-padding px-md-5 bg-light">
		<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
	</div>

	</body>
</html>
