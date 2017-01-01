<?php if (! is_null(Session::get("feedback_negative")) &&
					count(Session::get("feedback_negative")) > 0) : ?>

	<div class="alert alert-danger alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<ul>
			<?php foreach(Session::get("feedback_negative") as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
		</ul>
	</div>

<?php endif ?>	

<?php if (! is_null(Session::get("feedback_positive")) &&
					count(Session::get("feedback_positive")) > 0) : ?>

	<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<ul>
			<?php foreach(Session::get("feedback_positive") as $error) : ?>
				<li><?= $error ?></li>
			<?php endforeach ?>
		</ul>
	</div>
<?php endif ?>

<?php $this->borrar_msg_feedback() ?>