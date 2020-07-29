<form  method="POST" action="<?php echo site_url('home_page/edit/1') ?>" enctype="multipart/form-data">
  <div class="row mb-5">
    <div class="col-md-8">
      <h5>DESKTOP VIDEO</h5>
      <input type="text" class="form-control" name="video_url" value="<?php echo $home_page['video_url'];?>">
    </div>
  </div>

  <div class="row">
  
  <div class="col-md-8">
    <h5>DESKTOP BACKGROUND</h5>
    <img id="desktop_banner" name="desktop_banner" src="<?php echo (!empty($home_page['desktop_banner'])) ? site_url('upload/'.$home_page['desktop_banner']) : site_url('resources/img/full-hd.png')?>" class="w-100" alt="...">
    
    
  </div>
  
  <div class="col-md-4 align-items-end d-flex">
        <div class="form-group mb-0 w-100">
          <h5>TEXT</h5>
          <textarea class="form-control" id="desktop_text" name="desktop_text" rows="9"><?php echo $home_page['desktop_text'];?></textarea>
        </div>
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="pt-4 justify-content-end d-flex">
        <input type="file" id="desktop_banner_file" name="desktop_banner_file" style="display: none;" />
        <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('desktop_banner_file').click();" />
        <button type="button" class="btn btn-dark bnt-custom " onclick="$('#desktop_banner').attr('src', '<?php echo site_url('resources') ?>/img/full-hd.png'); $('#desktop_banner_file').val(''); ">REMOVE</button>
        
      </div>
    </div>
  </div>

  <div class="row mb-5 mt-5">
    <div class="col-md-8">
      <h5>MOBILE VIDEO</h5>
      <input type="text" class="form-control" name="mobile_video_url" value="<?php echo $home_page['mobile_video_url'];?>">
    </div>
  </div>

  <div class="row">
    
    <div class="col-md-4">
      <h5>MOBILE BACKGROUND</h5>
      <img id="mobile_banner" name="mobile_banner" src="<?php echo (!empty($home_page['mobile_banner'])) ? site_url('upload/'.$home_page['mobile_banner']) : site_url('resources/img/home_mobile.png')?>" class="d-block w-100 responsive" alt="...">
      
      
    </div>
    
    <div class="col-md-4 align-items-end d-flex">
        <div class="form-group mb-0 w-100">
          <h5>TEXT</h5>
          <textarea class="form-control" id="mobile_text" name="mobile_text" rows="9"><?php echo $home_page['mobile_text'];?></textarea>
        </div>
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="pt-4 justify-content-end d-flex">
        <input type="file" id="mobile_banner_file" name="mobile_banner_file" style="display: none;" />
        <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('mobile_banner_file').click();" />
        <button type="button" class="btn btn-dark bnt-custom " onclick="$('#mobile_banner').attr('src', '<?php echo site_url('resources') ?>/img/home_mobile.png'); $('#mobile_banner_file').val(''); ">REMOVE</button>
        
      </div>
    </div>
  </div>
  <div class="justify-content-end d-flex pt-5">
    <button type="submit" class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
  </div>
</form>


<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#desktop_banner').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#desktop_banner_file").change(function() {
  readURL(this);
});


  function readURLmb(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#mobile_banner').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#mobile_banner_file").change(function() {
  readURLmb(this);
});

</script>