<div class="pull-right">
	<a href="<?php echo site_url('email/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Email Acc</th>
		<th>Created Date</th>
		<th>Actions</th>
    </tr>
	<?php foreach($email as $e){ ?>
    <tr>
		<td><?php echo $e['id']; ?></td>
		<td><?php echo $e['email_acc']; ?></td>
		<td><?php echo $e['created_date']; ?></td>
		<td>
            <a href="<?php echo site_url('email/edit/'.$e['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('email/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
