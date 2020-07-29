<div class="pull-right">
	<a href="<?php echo site_url('showcase/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Cover Img</th>
		<th>Name</th>
		<th>Created Date</th>
		<th>Position</th>
		<th>Actions</th>
    </tr>
	<?php foreach($showcase as $s){ ?>
    <tr>
		<td><?php echo $s['id']; ?></td>
		<td><?php echo $s['cover_img']; ?></td>
		<td><?php echo $s['name']; ?></td>
		<td><?php echo $s['created_date']; ?></td>
		<td><?php echo $s['position']; ?></td>
		<td>
            <a href="<?php echo site_url('showcase/edit/'.$s['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('showcase/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
