<form  method="POST" action="<?php echo site_url('contact_page/edit/1') ?>" enctype="multipart/form-data">
  <input type="hidden" name="id" id="id" value="<?php echo $contact_page['id'] ?>">
  <input type="hidden" id="img_old" value="<?php echo ($contact_page['contact_img']) ? $contact_page['contact_img'] : '' ?>">
  <input type="hidden" id="img_upload" name="img_upload" value="0">
  <div class="row justify-content-center d-flex">
    
    <div class="col-md-7">
      
      <?php if ( !empty($contact_page['contact_img']) ) : ?>
        <img id="contact_img" name="contact_img" src="<?php echo site_url() ?>/upload/<?php echo $contact_page['contact_img']; ?>" class="w-100" alt="...">
      <?php else: ?>
        <img id="contact_img" name="contact_img" src="<?php echo site_url('resources') ?>/img/blank.jpg" class="d-block w-100" alt="...">
      <?php endif ?>
    </div>
    
  </div>
  <div class="row justify-content-center d-flex">
    <div class="col-md-7">
      <div class="pt-4 justify-content-end d-flex">
        <input type="file" id="contact_img_file" name="contact_img_file"  style="display: none;" />
        <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('contact_img_file').click();" />
        <button type="button" class="btn btn-dark bnt-custom " onclick="remove_img();">REMOVE</button>
        
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
      $('#contact_img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#contact_img_file").change(function() {
  readURL(this);
});


</script>

<script>
    function remove_img() {
    
    if ($('#contact_img_file').val() === "") {
       //$('#edit-img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg');
       $('#img_upload').val("1");
       $('#contact_img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg'); 
       //$('#contact_img_file').val(''); 
    }else {
      if ($('#img_old').val() !== '') {
        var img = $('#img_old').val();
        $('#contact_img').attr('src', "<?php echo site_url('') ?>/upload/" + img);
      }else {
        
        $('#contact_img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg');
      } 
      $('#contact_img_file').val("");
    }
  }
</script>