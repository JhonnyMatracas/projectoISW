<?php $this->layout('layout') ?>
<div>
    <div class="product-container">
        <!-- Vcenter -->
        <div class="vcenter" >

            <div class="vcenter-this">
                <!-- Container -->

                <div class="container" style="margin-top: 17%;">
                    <!-- Error Block -->

                    <div class="error-block wider">
                        <!-- Left -->
                        <div class="left">
                            <div class="vcenter">
                                <div class="vcenter-this">
                                    <i class="error-icon fa fa-user-plus"></i>
                                </div>
                            </div>
                        </div>
                        <!-- /Left -->

                        <!-- Right -->
                        <div class="right">
                            <div class="col-xs-12">

                                <form accept-charset="UTF-8" role="form" method="post" action="">
                                    <fieldset>
                                        <div class="form-group">
                                            <em class="help" id="nick_error" style="font-style: normal; color: red" hidden></em>
                                            <div class="input-group">

                                                <div class="input-group-addon"><i class="fa fa-ticket"></i></div>
                                                <div class="col-md-6 <?=Feedback::cssFeedback('nick')?>" style="padding:0px">
                                                    <input type="text" name="nick" value="<?=($_POST)?$nick:'';?>" class="form-control" required id="new_nick" placeholder="Nombre de usuario">
                                                    <?=Feedback::iconFeedback('nick')?>
                                                </div>

                                                <div class="col-md-3" id="available_nick" hidden>
                                                    <i class="fa fa-check" style="color: #00A743;font-size: 3rem"></i>
                                                </div>
                                                <div class="col-md-3" id="nonavailable_nick" hidden>
                                                    <i class="fa fa-times" style="color: #A70000;font-size: 3rem"></i>
                                                </div>
                                            </div>
                                            <?=Feedback::getInputMessage('nick')?>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <div class="col-md-12 <?=Feedback::cssFeedback('name','lastname')?>" style="padding:0px">
                                                    <input type="text" name="name" value="<?=($_POST) ? $name :'';?>" class="form-control" id="name" placeholder="Nombre" style="width: 35%">
                                                    <input type="text" name="lastname" value="<?=($_POST) ? $lastname :'';?>" class="form-control" id="lastname" placeholder="Apellidos" style="margin-left:10px;width: 50%">
                                                    <?=Feedback::iconFeedback('name','lastname')?>
                                                </div>
                                            </div>
                                            <?=Feedback::getInputMessage('name')?>
                                            <?=Feedback::getInputMessage('lastname')?>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope "></i></div>
                                                <div class="col-md-9 <?=Feedback::cssFeedback('email')?>" style="padding:0px">
                                                    <input name="email" value="<?=($_POST) ? $email :'';?>" required class="form-control" id="new_email" placeholder="Email">
                                                    <?=Feedback::iconFeedback('email')?>
                                                </div>
                                                <div class="col-md-3" id="nice_email" hidden>
                                                    <i class="fa fa-check" style="color: #00A743;font-size: 3rem"></i>
                                                </div>
                                                <div class="col-md-3" id="nonice_email" hidden>
                                                    <i class="fa fa-times" style="color: #A70000;font-size: 3rem"></i>
                                                </div>
                                            </div>
                                            <?=Feedback::getInputMessage('email')?>

                                        </div>

                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                <div class="col-md-6 <?=Feedback::cssFeedback('password')?>" style="padding:0px">
                                                    <input type="password" class="form-control" placeholder="Contraseña" id="new_pass1" name="password" value="">
                                                    <?=Feedback::iconFeedback('password')?>
                                                </div>
                                                <div class="col-md-3" id="nice_pass" hidden>
                                                    <i class="fa fa-check" style="color: #00A743;font-size: 3rem"></i>
                                                </div>
                                                <div class="col-md-3" id="nonice_pass" hidden>
                                                    <i class="fa fa-times" style="color: #A70000;font-size: 3rem"></i>
                                                </div>
                                            </div>
                                            <?=Feedback::getInputMessage('password')?>

                                            <em class="help" id="pass_error" style="font-style: normal; color: red;margin-top:-10px;" hidden></em>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                <div class="col-md-6" style="padding:0px">
                                                    <input class="form-control" placeholder="Repite Contraseña" id="new_pass2" name="password2" type="password">
                                                </div>
                                                <div class="col-md-3" id="nice_pass2" hidden>
                                                    <i class="fa fa-check" style="color: #00A743;font-size: 3rem"></i>
                                                </div>
                                                <div class="col-md-3" id="nonice_pass2" hidden>
                                                    <i class="fa fa-times" style="color: #A70000;font-size: 3rem"></i>
                                                </div>
                                            </div>
                                            <?=Feedback::getInputMessage('password2')?>

                                            <em class="help" id="pass_error2" style="font-style: normal; color: red;margin-top:-10px;" hidden></em>
                                        </div>
                                        <input class="btn btn-buy btn-block disabled" id="submit" type="submit" value="Crear Cuenta">
                                    </fieldset>
                                </form>


                            </div>
                        </div>
                        <!-- /Right -->
                    </div>
                    <!-- /Error Block -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Vcenter this -->
        </div>
        <!-- /Vcenter -->
    </div>

</div>

