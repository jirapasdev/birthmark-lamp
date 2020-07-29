
<div class="blog">
  <ul class="nav nav-tabs" id="dbTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-uppercase active pl-0" id="draft-tab" data-toggle="tab" href="#draft" role="tab" aria-controls="draft" aria-selected="true">draft</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-uppercase pl-0 ml-3" id="publish-tab" data-toggle="tab" href="#publish" role="tab" aria-controls="publish" aria-selected="false">publish</a>
    </li>
    
  </ul>
  <div class="tab-content" id="dbTabContent">
    <div class="tab-pane fade show active " id="draft" role="tabpanel" aria-labelledby="draft-tab">
      <div class=" pt-5 ">
        <div class="table-responsive">
          <table class="table">
          <thead>
            <tr>
              <th class="align-middle pl-0">COVER</th>
              <th class="align-middle">TOPIC</th>
              <th class="align-middle">TAG</th>
              <th class="align-middle">CREATED DATE</th>
              <th class="align-middle pr-0" style="text-align: end;">
                <button onclick="location.href='<?php echo site_url('blog/add?type=draft') ?>';" type="button" class="btn btn-secondary">ADD</button>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($blog as $b){ ?>
              <?php if ( $b['type'] == "draft"): ?>
                <tr>
              <td class="align-middle pl-0" ><img src="<?php echo (!empty($b['cover'])) ? site_url('upload/'.$b['cover']) : site_url('resources/img/cover.png')?>" style="max-width:120px;" class="responsive" alt="..."></td>
              <td class="align-middle"><?php echo $b['topic']; ?></td>
              <td class="align-middle"><?php echo $b['tag']; ?></td>
              <td class="align-middle"><?php echo $b['created_date']; ?></td>
              <td class="align-middle pr-0" align="right" >
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MANAGE
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="<?php echo site_url("blog/edit/".$b['id']) ?>" class="dropdown-item">EDIT</a>
                    <a href="<?php echo site_url("blog/remove/".$b['id']) ?>" class="dropdown-item">DELETE</a>
                  </div>
                </div>
            </tr>
              <?php endif ?>
            
            <?php } ?>
            
          </tbody>
        </table>
        </div>
        
        
      </div>
    </div>
    <div class="tab-pane fade" id="publish" role="tabpanel" aria-labelledby="publish-tab">
      <div class="pt-5">
        <div class="table-responsive">
          <table class="table">
          <thead>
            <tr>
              <th class="align-middle pl-0">COVER</th>
              <th class="align-middle">TOPIC</th>
              <th class="align-middle">TAG</th>
              <th class="align-middle">CREATED DATE</th>
              <th class="align-middle">STATUS</th>
              <th class="align-middle pr-0" style="text-align: end;"><button type="button" class="btn btn-secondary" onclick="location.href='<?php echo site_url('blog/add?type=publish') ?>';">ADD</button></th>
            </tr>
          </thead>
          <tbody>
            
            <?php foreach($blog as $b){ ?>
              <?php if ( $b['type'] == "publish"): ?>
                <tr>
              <td class="align-middle pl-0" ><img src="<?php echo (!empty($b['cover'])) ? site_url('upload/'.$b['cover']) : site_url('resources/img/cover.png')?>" style="max-width:120px;" class="responsive" alt="..."></td>
              <td class="align-middle"><?php echo $b['topic']; ?></td>
              <td class="align-middle"><?php echo $b['tag']; ?></td>
              <td class="align-middle"><?php echo $b['created_date']; ?></td>
              <td class="align-middle"><?php echo ($b['status'] == 0) ? 'NO SHOW' : 'SHOW' ?></td>
              <td class="align-middle pr-0" align="right" >
                
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MANAGE
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a href="<?php echo site_url("blog/edit/".$b['id']) ?>" class="dropdown-item">EDIT</a>
                    <a href="<?php echo site_url("blog/remove/".$b['id']) ?>" class="dropdown-item">DELETE</a>
                  </div>
                </div>

              </td>
            </tr>
              <?php endif ?>
            
            <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  <?php 
  $preview_id = $this->session->flashdata('preview');
  if (isset($preview_id)) { ?>
   window.open('<?php echo site_url('blog/'.$preview_id) ?>', '_blank');
  <?php } ?>
</script>

