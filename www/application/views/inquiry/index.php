<div class="pull-right">
	<a href="<?php echo site_url('inquiry/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Email Acc</th>
		<th>Created Date</th>
		<th>Actions</th>
    </tr>
	<?php foreach($inquiry as $i){ ?>
    <tr>
		<td><?php echo $i['id']; ?></td>
		<td><?php echo $i['email_acc']; ?></td>
		<td><?php echo $i['created_date']; ?></td>
		<td>
            <a href="<?php echo site_url('inquiry/edit/'.$i['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('inquiry/remove/'.$i['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
