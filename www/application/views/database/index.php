<div>
  <ul class="nav nav-tabs" id="dbTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-uppercase active pl-0" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="true">Email</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-uppercase pl-0 ml-3" id="inquiry-tab" data-toggle="tab" href="#inquiry" role="tab" aria-controls="inquiry" aria-selected="false">Inquiry</a>
    </li>
    
  </ul>
  <div class="tab-content" id="dbTabContent">
    <div class="tab-pane fade show active " id="email" role="tabpanel" aria-labelledby="email-tab">
      <div class=" pt-5 ">
        <table class="table">
          <thead>
            <tr>
              <th class="pl-0">EMAIL</th>
              <th class="pr-0 text-right">CREATED DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($email as $e){ ?>
            <tr class="tb-border">
              <td class="pl-0" ><?php echo $e['email_acc']; ?></td>
              <td class="pr-0 text-right"><?php echo $e['created_date']; ?></td>
          
            </tr>
            <?php } ?>
          </tbody>
        </table>
        
        
        
      </div>
      <div class="row justify-content-end d-flex ">
        <div class="pt-5 pr-2">
          <form method="post" action="database/export_email">
            <button type="submit" class="btn btn-danger btn-lg text-uppercase" style="padding: 6px 38px;">export to csv.</button>
          </form>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="inquiry" role="tabpanel" aria-labelledby="inquiry-tab">
      <div class="pt-5">
        <div class="table-responsive">
          <table class="table">
          <thead>
            <tr>
              <th class="pl-0">NAME</th>
              <th class="">PHONE NUMBER</th>
              <th class="">EMAIL</th>
              <th class="">COMPANY NAME</th>
              <th class="pr-0 text-right">CREATED DATE</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($inquiry as $i){ ?>
            <tr class="tb-border">
              <td class="pl-0 align-middle" ><?php echo $i['name']; ?></td>
              <td class="align-middle" ><?php echo $i['phone']; ?></td>
              <td class="align-middle" style="vertical-align: middle;"><?php echo $i['email_acc']; ?></td>
              <td class="align-middle" style="vertical-align: middle;"><?php echo $i['company']; ?></td>
              <td class="pr-0 align-middle text-right"  style="vertical-align: middle;" ><?php echo $i['created_date']; ?></td>
            </tr>
           <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
      <div class="row justify-content-end d-flex ">
        <div class="pt-5 pr-2">
          <form method="post" action="<?php echo base_url(); ?>database/export_inquiry">
            <button type="submit" class="btn btn-danger btn-lg text-uppercase" style="padding: 6px 38px;">export to csv.</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>