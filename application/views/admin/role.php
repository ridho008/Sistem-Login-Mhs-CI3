<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
	<div class="col-md-6">
		<!-- <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?> -->
		<?= $this->session->flashdata('flash'); ?>

		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>

		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Role</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $no = 1;
		  	foreach($role as $r) : ?>
		    <tr>
		      <th scope="row"><?= $no++; ?></th>
		      <td><?= $r['role']; ?></td>
		      <td>
		      	<a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
				<a href="" class="badge badge-success">Update</a>
				<a href="" class="badge badge-danger">Delete</a>
		      </td>
		    </tr>
			<?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/role'); ?>
        	<div class="form-group">
			    <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
			</div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" name="role" id="role" class="btn btn-primary">Add</button>
	      </div>
      </div>
      </form>

    </div>
  </div>
</div>
