<div class="client">
  <table class="table">
    <div class="row w-100 p-0 m-0">
      <div class="col-md-6 p-0"><h5>NAME</h5></div>
      <div class="col-md-6 p-0 text-right">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addClientModal">ADD</button>
      </div>
    </div>
    <tbody>
      <?php $i = 1 ?>
      <?php foreach($client as $c){ ?>
      <tr>
        <td class="fit pl-0"><h2 class="text-gray"><?php echo $i; ?></h2></td>
        <td class="px-0 pr-4" style="vertical-align: middle;"><span class="client_txt pb-1 text-gray d-block w-100"><?php echo $c['name']; ?></span></td>
        <td class="px-0 fit" align="right" style="vertical-align: middle;" >
          
          <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MANAGE
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <button type="button" class="dropdown-item"  data-toggle="modal" data-target="#editClientModal" data-id="<?php echo $c['id']; ?>" data-name="<?php echo $c['name']; ?>" >EDIT</button>
          <a href="<?php echo site_url("client/remove/".$c['id']) ?>" class="dropdown-item">DELETE</a>
                  </div>
                </div>
        </td>
      </tr>
      <?php $i++; ?>
      <?php } ?>

    </tbody>
  </table>
  
  
  
</div>

<!-- Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" role="dialog" aria-labelledby="addClientModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-md-5 pb-md-5 pt-0">
        
        <div class=" mt-4">
          <form method="post" action="<?php echo site_url('client/add') ?>">
            <div class="form-group">
              <label>NAME</label>
              <input type="text" class="form-control w-100" name="name" id="name">
            </div>
            <div class="justify-content-end d-flex">
           <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
         </div>
          </form>
        </div>
        
        
      </div>
      
      
    </div>
  </div>
</div>
<!-- end modal -->
<!-- Modal -->
<div class="modal fade" id="editClientModal" tabindex="-1" role="dialog" aria-labelledby="editClientModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-md-5 pb-md-5 pt-0">
        
        <div class=" mt-4">
          <form method="post" action="<?php echo site_url('client/edit') ?>">
            <div class="form-group">
              <input type="hidden" name="edit-id" id="edit-id">
              <label>NAME</label>
              <input type="text" class="form-control w-100" name="edit-name" id="edit-name">
            </div>
            <div class="justify-content-end d-flex">
           <button type="submit"  class="btn btn-danger btn-lg " style="padding: 6px 38px;">SAVE</button>
         </div>
          </form>
        </div>
        
        
      </div>
      
      
    </div>
  </div>
</div>
<!-- end modal -->


<script>
$(document).ready(function () {      
    $('#editClientModal').on('show.bs.modal', function (event) {
    $(this).find('.modal-body #edit-id').val($(event.relatedTarget).data('id'));
    $(this).find('.modal-body #edit-name').val($(event.relatedTarget).data('name'));
    
  })

   

  });
</script>