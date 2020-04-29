<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


<div class="row">
	<div class="col-md-6">
		<form action="" method="post">
			<input type="hidden" id="id" name="id" value="<?= $submenu['id']; ?>">
			<div class="form-group">
				<input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
				<small class="text-danger"><?= form_error('title'); ?></small>
			</div>
			<div class="form-group">
				<input type="number" class="form-control" id="menu_id" name="menu_id" value="<?= $submenu['menu_id']; ?>">
				<small class="text-danger"><?= form_error('menu_id'); ?></small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
				<small class="text-danger"><?= form_error('url'); ?></small>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
				<small class="text-danger"><?= form_error('icon'); ?></small>
			</div>
			<div class="form-group">
				<input type="number" class="form-control" id="is_active" name="is_active" value="<?= $submenu['is_active']; ?>">
				<small class="text-danger"><?= form_error('is_active'); ?></small>
			</div>
			<button type="submit" name="updatesubmenu" class="btn btn-primary">Update Submenu</button>
		</form>
	</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


