<div class="row justify-content-center d-flex">

<div class="col-md-9">

          <form id="add_publish_blog" method="post" enctype="multipart/form-data" action="<?php echo site_url('blog/add/') ?>">
            <div class="justify-content-start d-flex ">
            <div class="form-group mb-0">
              <label>COVER</label>
              <input type="hidden" name="type" value="publish">
            </div>
        </div>
        <div class="justify-content-center d-flex">
          <img id="add_publish_img"  name="add_publish_img" src="<?php echo site_url('resources/') ?>img/blank.jpg " class="d-block w-100 responsive" alt="...">
        </div>
        
        <div class="justify-content-end d-flex mt-3">
           <input type="file" id="add_publish" name="add_publish" style="display: none;" />
          <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('add_publish').click();" />
          <button type="button" class="btn btn-dark btn-sm bnt-custom " onclick="remove_img_publish();">REMOVE</button>
        </div>
        
        <div class=" mt-4">
            <div class="form-group">
              <label>TOPIC</label>
              <input required type="text" class="form-control w-100" name="topic">
            </div>
        </div>
        <div class=" mt-4">
            <div class="form-group">
              <label>TAG</label>
              <input type="text" class="form-control w-100" name="tag">
            </div>
        </div>
        <div class=" mt-4">
            <div class="form-group">
              <label>AUTHOR</label>
              <input type="text" class="form-control w-100"  name="author">
            </div>
        </div>
      

        <div class="row">
          <div class="col-md-6">
            <div class="justify-content-start d-flex">
              <div class="form-group mb-0">
                <label>STATUS</label>
              </div>
            </div>

            
            <div class="justify-content-start d-flex">
              <div class="custom-control custom-radio">
                <input checked type="radio" class="custom-control-input" id="customControlValidation2" name="status" value="1" required>
                <label class="custom-control-label" for="customControlValidation2">SHOW</label>
              </div>
              <div class="custom-control custom-radio mb-3 ml-3">
                <input type="radio" class="custom-control-input" id="customControlValidation3" name="status" value="0" required>
                <label class="custom-control-label" for="customControlValidation3">HIDE</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="justify-content-start d-flex">
          <div class="form-group mb-0">
              <label>REGISTRATION BOX</label>
            </div>
          </div>

          
          <div class="justify-content-start d-flex">
            <div class="custom-control custom-radio">
              <input checked type="radio" class="custom-control-input" id="register01" name="register" value="1" required>
              <label class="custom-control-label" for="register01">SHOW</label>
            </div>
            <div class="custom-control custom-radio mb-3 ml-3">
              <input type="radio" class="custom-control-input" id="register02" name="register" value="0" required>
              <label class="custom-control-label" for="register02">HIDE</label>
            </div>
        </div>
          </div>
        </div>

           <div class=" mt-4">
            <div class="form-group">
              <label>CONTENT</label>
              <textarea id="add_publish_area" name="content"></textarea>
            </div>
        </div>

        <div class="justify-content-end d-flex">
           <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
         </div>
        </form>
</div>    
  
</div>

<script>
  $(document).ready(function() {
  $('#add_publish_area').summernote({height: 300});

});
</script>

<script type="text/javascript">
    $("#add_publish").change(function() {
  readURLpublish(this);
});


  function readURLpublish(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#add_publish_img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function remove_img_publish() {
    $('#add_publish_img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg');
    $('#add_publish').val('');
  }
</script>

