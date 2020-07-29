<div class="row justify-content-center d-flex">

<div class="col-md-9">
    <form id="add_draft_blog" method="post" enctype="multipart/form-data" action="<?php echo site_url('blog/add/') ?>">
        <div class="justify-content-start d-flex ">
            <div class="form-group mb-0">
              <label>COVER</label>
              <input type="hidden" name="status" value="0">
              <input type="hidden" name="type" value="draft">
              <input type="hidden" name="blog_id" id="blog_id" value="">
              <input type="hidden" name="add_draft_blog_preview" id="add_draft_blog_preview" value="">
            </div>
          
        </div>
        <div class="justify-content-center d-flex">
          <img name="add_draft_img" id="add_draft_img" src="<?php echo site_url('resources/') ?>img/blank.jpg " class="d-block w-100 responsive" alt="...">
        </div>
        
        <div class="justify-content-end d-flex mt-3">
           <input type="file" id="add_draft" name="add_draft" style="display: none;" />
          <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('add_draft').click();" />
          <button type="button" class="btn btn-dark btn-sm bnt-custom " onclick="remove_add_img();">REMOVE</button>
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

        <div class="justify-content-start d-flex">
          <div class="form-group mb-0">
              <label>REGISTRATION BOX</label>
            </div>
          </div>

          
          <div class="justify-content-start d-flex">
            <div class="custom-control custom-radio">
              <input type="radio" checked class="custom-control-input" id="register11" name="register" value="1" required>
              <label class="custom-control-label" for="register11">SHOW</label>
            </div>
            <div class="custom-control custom-radio mb-3 ml-3">
              <input type="radio" class="custom-control-input" id="register22" name="register" value="0" required>
              <label class="custom-control-label" for="register22">HIDE</label>
            </div>
        </div>

        <div class="mt-4">
            <div class="form-group">
              <label>CONTENT</label>
              <textarea id="add_draft_area" name="content"></textarea>
              
            </div>
        </div>

        <div class="justify-content-end d-flex">
           <div class="d-block">
             <button type="button" id="add_preview"  class="btn btn-danger btn-lg mr-4" style="padding: 6px 38px;">PREVIEW</button>
             <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
           </div>
         </div>

        </form>
</div>  
  
  
</div>

<script>
  $(document).ready(function() {
  $('#add_draft_area').summernote({height: 300});

});
</script>

<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#add_draft_img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#add_preview").click(function() {
  $("#add_draft_blog_preview").val("1");
  $("#add_draft_blog").submit();
});

$("#add_draft").change(function() {
  readURL(this);
});

function remove_add_img() {
    $('#add_draft_img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg');
    $('#add_draft').val('');
  }
</script>

