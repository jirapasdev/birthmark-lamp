<div class="p-0">
  
 <form id="showcase_txt_form" method="post" action="<?php echo site_url('showcase_page/edit/') ?>">
    <div class="form-group">
    <h5>TEXT</h5>
    <textarea name="text" class="form-control rounded-0" rows="4"><?php echo $showcase_page['text']; ?></textarea>
  </div>
 </form>
  
</div>

<div class="showcase">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th class="pl-0">COVER</th>
          <th class="">NAME</th>
          <th class="">CREATED DATE</th>
          <th class="">POSITION</th>
          <th class="pr-0" style="text-align: end;"><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">ADD</button></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($showcase as $s){ ?>
        <tr>
          <td class="pl-0" ><img style="max-width: 120px;" src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/'.$s['cover_img']) : site_url('resources/img/cover.jpg')?>" class="responsive" alt="..."></td>
          <td class=" align-middle"><?php echo $s['name']; ?></td>
          <td class=" align-middle"><?php echo $s['created_date']; ?></td>
          <td class=" align-middle"><?php echo ( $s['position'] == 4 ) ? "SEE ALL" : $s['position']; ?></td>
          <td class=" align-middle text-right pr-0">
            
            <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MANAGE
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#editShowcaseModal" data-id="<?php echo $s['id']; ?>" data-img="<?php echo $s['cover_img']; ?>" data-name="<?php echo $s['name']; ?>"  data-pst="<?php echo $s['position']; ?>" >EDIT</button>
            <a href="<?php echo site_url("showcase/remove/".$s['id']) ?>" class="dropdown-item">DELETE</a>
                  </div>
                </div>
          </td>

        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
 
  
</div>
<div class="row justify-content-end d-flex ">
  <div class="pt-5 pr-0">
    <button type="button" onclick="$('#showcase_txt_form').submit();" class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-md-5 pb-md-5 pt-0">
        <!-- method="POST" action="<?php echo site_url('showcase/add') ?>" -->
        <form id="add_showcase" method="POST" action="<?php echo site_url('showcase/add') ?>" enctype="multipart/form-data">
                  <div class="justify-content-start d-flex ">
          
          <div class="form-group mb-0">
            <label>COVER</label>
          </div>
        </div>
        <div class="justify-content-center d-flex">
          <img id="add-img" name="cover_img" src="<?php echo site_url('resources/') ?>img/cover.png " class="d-block w-100 responsive" alt="...">
        </div>
        
        <div class="justify-content-end d-flex mt-3">
          <input type="file" id="imgAdd" name="imgAdd" style="display: none;" />
          <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('imgAdd').click();" />
          <button type="button" class="btn btn-dark btn-sm bnt-custom " onclick="remove_add_img()">REMOVE</button>
        </div>
        
        <div class=" mt-4">
          
          <div class="form-group">
            <label>NAME</label>
            <input required type="text"  value="" class="form-control w-100" id="name" name="name"/>
          </div>
        </div>
        
        <div class="justify-content-start d-flex">
          <div class="form-group mb-0">
            <label>POSITION</label>
          </div>
        </div>
        
        <div class="justify-content-start d-flex">
          
        <div class="custom-control custom-radio mb-3">
          <input type="radio" class="custom-control-input" id="showcase-radio1" name="position" value="1" required>
          <label class="custom-control-label" for="showcase-radio1">1</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-radio2" name="position" value="2" required>
          <label class="custom-control-label" for="showcase-radio2">2</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-radio3" name="position" value="3" required>
          <label class="custom-control-label" for="showcase-radio3">3</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-radio4" name="position" value="4" required>
          <label class="custom-control-label" for="showcase-radio4">SEE ALL</label>
        </div>
          
        </div>

         <div class="justify-content-end d-flex">
           <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
         </div>

       

        </form>

      
        
      </div>
      
      <!-- <div class="modal-footer">
        <button type="button" onclick="$('#add_showcase').submit();" class="btn btn-danger btn-lg " style="padding: 6px 38px; margin-bottom: 4%; margin-right: 10%;">SAVE</button>
      </div> -->
    </div>
  </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="editShowcaseModal" tabindex="-1" role="dialog" aria-labelledby="editShowcaseModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-md-5 pb-md-5 pt-0">
        <form id="edit_showcase" method="post" enctype="multipart/form-data" action="<?php echo site_url('showcase/edit/') ?>">
          <input type="hidden" id="sc_id" name="id">
          <input type="hidden" id="img_upload" name="img_upload" value="0">
          <input type="hidden" id="img_old" value="">
          <div class="justify-content-start d-flex ">
          
          <div class="form-group mb-0">
            <label>COVER</label>
          </div>
        </div>
        <div class="justify-content-center d-flex">
          <!-- <img id="edit-img" name="cover_img" src="<?php echo site_url('resources/') ?>img/cover.png " class="d-block w-100 responsive" alt="..."> -->
          <img id="edit-img" name="cover_img" src="<?php echo (!empty($s['cover_img'])) ? site_url('upload/'.$s['cover_img']) : site_url('resources/img/cover.png')?>" class="responsive" alt="...">
        </div>
        
        <div class="justify-content-end d-flex mt-3">
          <input type="file" id="imgEdit" name="imgEdit" style="display: none;" />
          <input type="button"  class="btn btn-dark bnt-custom mr-4" value="UPLOAD" onclick="document.getElementById('imgEdit').click();" />
          <button type="button" class="btn btn-dark btn-sm bnt-custom " onclick="remove_img();">REMOVE</button>
        </div>
        
        <div class=" mt-4">
          
          <div class="form-group">
            <label>NAME</label>
            <input required type="text" class="form-control w-100" id="name" name="name">
          </div>
        </div>
        
        <div class="justify-content-start d-flex">
          <div class="form-group mb-0">
            <label>POSITION</label>
          </div>
        </div>
        
        <div class="justify-content-start d-flex">
          
          <div class="custom-control custom-radio mb-3">
          <input type="radio" class="custom-control-input" id="showcase-edit-radio1" name="position-edt" value="1" required>
          <label class="custom-control-label" for="showcase-edit-radio1">1</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-edit-radio2" name="position-edt" value="2" required>
          <label class="custom-control-label" for="showcase-edit-radio2">2</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-edit-radio3" name="position-edt" value="3" required>
          <label class="custom-control-label" for="showcase-edit-radio3">3</label>
        </div>
        <div class="custom-control custom-radio mb-3 ml-3">
          <input type="radio" class="custom-control-input" id="showcase-edit-radio4" name="position-edt" value="0" required>
          <label class="custom-control-label" for="showcase-edit-radio4">SEE ALL</label>
        </div>
          
        </div>


        <div class="justify-content-end d-flex">
           <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
         </div>

        </form>
        
      </div>
      
      <!-- <div class="modal-footer">
        <button type="button" onclick="$('#edit_showcase').submit();" class="btn btn-danger btn-lg " style="padding: 6px 38px; margin-bottom: 4%; margin-right: 10%;">SAVE</button>
      </div> -->
    </div>
  </div>
</div>
<!-- end modal -->


<script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#add-img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgAdd").change(function() {
  readURL(this);
});


  function readURLmb(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#edit-img').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgEdit").change(function() {
  readURLmb(this);
});

</script>

<script>
$(document).ready(function () {      
    $('#editShowcaseModal').on('show.bs.modal', function (event) {
    $(this).find('.modal-body #sc_id').val($(event.relatedTarget).data('id'));
    $(this).find('.modal-body #name').val($(event.relatedTarget).data('name'));
    var value = $(event.relatedTarget).data('pst');
    $('input:radio[name="position-edt"][value="' + value +'"]').prop('checked', true);
    var img = $(event.relatedTarget).data('img');
    if (img !== "") {
      $(this).find('.modal-body #edit-img').attr("src","<?php echo site_url('') ?>/upload/" + img);
      $('#img_old').val(img);
    }else {
      $(this).find('.modal-body #edit-img').attr("src","<?php echo site_url('') ?>/resources/img/cover.png");
      $('#img_old').val("");
    }

    $('#img_upload').val("0");

    

  })

   

  });
</script>
<script>
  function remove_img() {
    
    if ($('#imgEdit').val() === "") {
       $('#edit-img').attr('src', '<?php echo site_url('resources') ?>/img/cover.png');
       $('#img_upload').val("1");
    }else {
      if ($('#img_old').val() !== '') {
        var img = $('#img_old').val();
        $('#edit-img').attr('src', "<?php echo site_url('') ?>/upload/" + img);
      }else {
        
        $('#edit-img').attr('src', '<?php echo site_url('resources') ?>/img/cover.png');
      } 
      $('#imgEdit').val("");
    }
  }

  function remove_add_img() {
    $('#add-img').attr('src', '<?php echo site_url('resources') ?>/img/cover.png');
    $('#imgAdd').val('');
  }
</script>
