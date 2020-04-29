<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
	<div class="col-md-6">
		<form action="" method="post">
			<input type="hidden" name="id" id="id" value="<?= $menus['id']; ?>">
			<div class="form-group">
			    <input type="text" class="form-control" id="menu" name="menu" value="<?= $menus['menu']; ?>">
			    <small class="form-text text-danger"><?= form_error('menu'); ?></small>
				 </div>
				 <button type="submit" class="btn btn-primary" name="update" id="update">Update</button>
			</div>
				
			
		</form>
	</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


