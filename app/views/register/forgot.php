<?php $this->start('head'); ?>
<?php $this->end(); ?>
<?php $this->start('body'); ?>
<div class="col-md-6 col-md-offset-3 well">
	<h3 class="text-center">Forogot Password?</h3>
	<hr>
	<form class="form" action="" method="post">
		<div class="bg-danger"><?= $this->displayErrors ?></div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" id="email" name="email" class="form-control" value="<?= $this->post['email'] ?>">
		</div>
		<div class="pull-left">
			<input type="submit" class="btn btn-primary btn-large" value="Reset Password">
		</div>
	</form>
</div>
<?php $this->end(); ?>