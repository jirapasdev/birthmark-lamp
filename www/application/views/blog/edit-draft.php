
        <div class="row justify-content-center d-flex">

<div class="col-md-9">
            <form id="edit_draft_blog" method="post" enctype="multipart/form-data" action="<?php echo site_url('blog/edit/'.$blog['id']) ?>">
        <div class="justify-content-start d-flex ">
          
            <div class="form-group mb-0">
              <label>COVER</label>
              <input type="hidden" name="status" value="0">
              <input type="hidden" name="type" value="draft">
              <input type="hidden" name="blog_id" id="blog_id" value="<?php echo $blog['id'] ?>">
              <input type="hidden" name="edit_draft_blog_preview" id="edit_draft_blog_preview" value="">
            </div>
          
        </div>
        <div class="justify-content-center d-flex">
          <img name="edit_draft_img" id="edit_draft_img" src="<?php echo ($blog['cover'] ) ? site_url('upload/'.$blog['cover'])  : site_url('resources/img/blank.jpg') ?> " class="d-block w-100 responsive" alt="...">
        </div>
        
        <div class="justify-content-end d-flex mt-3">
           <input type="file" id="edit_draft" name="edit_draft" style="display: none;" />
          <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('edit_draft').click();" />
          <button type="button" class="btn btn-dark btn-sm bnt-custom " onclick="remove_edit_draft_img();">REMOVE</button>
        </div>
        
        <div class=" mt-4">
            <div class="form-group">
              <label>TOPIC</label>
              <input type="text" required class="form-control w-100" id="topic" name="topic" value="<?php echo $blog['topic'] ?>">
            </div>
        </div>
        <div class=" mt-4">
            <div class="form-group">
              <label>TAG</label>
              <input type="text" class="form-control w-100" id="tag" name="tag" value="<?php echo $blog['tag'] ?>">
            </div>
        </div>
        <div class=" mt-4">
            <div class="form-group">
              <label>AUTHOR</label>
              <input type="text" class="form-control w-100"  id="author" name="author" value="<?php echo $blog['author'] ?>">
            </div>
        </div>

        <div class="justify-content-start d-flex">
          <div class="form-group mb-0">
              <label>REGISTRATION BOX</label>
            </div>
          </div>

          
          <div class="justify-content-start d-flex">
            <div class="custom-control custom-radio">
              <input type="radio" <?php echo ($blog['show_register_box'] == 1) ? 'checked' : '' ?> class="custom-control-input" id="register33" name="register" value="1" required>
              <label class="custom-control-label" for="register33">SHOW</label>
            </div>
            <div class="custom-control custom-radio mb-3 ml-3">
              <input type="radio"  <?php echo ($blog['show_register_box'] == 0) ? 'checked' : '' ?> class="custom-control-input" id="register44" name="register" value="0" required>
              <label class="custom-control-label" for="register44">HIDE</label>
            </div>
        </div>


           <div class=" mt-4">
            <div class="form-group">
              <label>CONTENT</label>
              <textarea id="edit_draft_area" name="content"><?php echo $blog['content'] ?></textarea>
              
            </div>
        </div>

        <div class="justify-content-end d-flex">
            <div class="d-block">
             <button type="button" id="edit_preview"  class="btn btn-danger btn-lg mr-4" style="padding: 6px 38px;">PREVIEW</button>
             <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
           </div>
         </div>

        </form>
</div>  
  
  
</div>

<script>
  $(document).ready(function() {
  $('#edit_draft_area').summernote({height: 300});

});
</script>

<script type="text/javascript">
  function readURLeditdraft(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#edit_draft_img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#edit_preview").click(function() {
  $("#edit_draft_blog_preview").val("1");
  $("#edit_draft_blog").submit();
});

$("#edit_draft").change(function() {
  readURLeditdraft(this);
});

function remove_edit_draft_img() {
    $('#edit_draft_img').attr('src', '<?php echo site_url('resources') ?>/img/blank.jpg');
    $('#edit_draft').val('');
  }
</script>

