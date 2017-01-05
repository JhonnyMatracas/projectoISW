<?php if (! is_null(Session::get("feedback_negative")) && count(Session::get("feedback_negative")) > 0) : ?>
    <div class="alert alert-danger alert-white">
        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        <div class="icon">
            <i class="fa fa-times-circle"></i>
        </div>
        <ul>
            <?php foreach(session::get("feedback_negative") as $error) : ?>
                <li><span class="fa fa"></span><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>	

<?php if (! is_null(Session::get("feedback_positive")) &&
					count(Session::get("feedback_positive")) > 0) : ?>

    <div class="alert alert-success alert-white">
        <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
        <div class="icon">
            <i class="fa fa-check-circle"></i>
        </div>
        <ul>
            <?php foreach(Session::get("feedback_positive") as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endif ?>

<?php $this->borrar_msg_feedback() ?>