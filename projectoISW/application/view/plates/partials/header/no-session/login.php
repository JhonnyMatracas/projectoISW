
<!-- Nav Bottom XS.............................................. -->

<nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">

    <!-- Container -->
    <div class="container">

        <!-- Header-->
        <div class="navbar-header" style="margin-top:8px; margin-bottom:-10px; ">
            <button id="xs-registrate" aria-expanded="false" class="btn btn-outline-menu visible-xs pull-right" style="margin-top:8px;" data-toggle="collapse" data-target="#registrate"><i class="ti ti-pencil-alt"></i></button>
            <button id="xs-iniciar-sesion" class="dropdown-toggle btn btn-outline-menu visible-xs pull-right" style="margin-top:8px;" data-toggle="collapse" data-target="#iniciar-sesion"><i class="ti ti-user"></i></button>
            <a data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-brand navbar-toggle visible-xs pull-left" href="#"><i class="fa fa-bars "></i></a>
            <img class="visible-xs" src="<?=URL?>pic/store/img/header/1-logo/logolisto.png" data-toggle="tooltip" style="margin-left:-20px;width:114px; height:auto;"  data-placement="bottom" title="<?php echo $logo->alt ;?> Store">
        </div>
        <!-- /Header-->
        <div id="registrate" class="collapse">
            <div class="col-xs-12">
                <!-- Dropdown Panel -->
                <fieldset>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control" placeholder="Email" type="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control" placeholder="Repeat Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline"><input value="" type="checkbox">I accept the terms and conditions.</label>
                        </div>

                        <button class="btn btn-primary btn-block">sign up</button>
                    </form>
                </fieldset>

            </div>
        </div>
        <div id="iniciar-sesion" class="collapse">
            <div class="col-xs-12">

                <form accept-charset="UTF-8" role="form" method="post" action="<?=URL?>index/processlogin">
                    <fieldset>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input class="form-control" placeholder="Usuario" name="mail" type="text" placeholder="Username o Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline"><input value="" type="checkbox">Recuérdame </label>
                        </div>
                        <input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
                    </fieldset>
                </form>


            </div>
        </div>
        <!-- /Nav Bottom XS.............................................. -->


        <!-- Nav Bottom LG.............................................. -->
        <!-- Navbar btn-group -->
        <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs hidden-xs">

            <!-- Nav Side -->
            <nav class="bottom hnav hnav-ruled white-bg boxed-section" role="navigation" >
                <!-- Dont Collapse -->
                <div class="navbar-dont-collapse no-toggle" >

                    <!-- Nav Right -->
                    <ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
                        <li class="dropdown has-panel li-nosession <?=(Feedback::cssFeedback('login') == 'has-error')?'open':'';?>">
                            <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-user hidden-lg"></i><i class="hidden-xs hidden-sm hidden-md" style="font-style: normal; text-transform: capitalize;"> Inicia Sesion</i><i class="fa fa-angle-down toggler hidden-xs hidden-sm"></i></a>

                            <!-- Dropdown Panel -->
                            <div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs <?=Feedback::cssFeedback('login')?>" data-keep-open="true">

                                <form accept-charset="UTF-8" role="form" method="post" action="<?=URL?>login">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input class="form-control" placeholder="Usuario" name="user" value="<?=Memory::getValue('user');?>" type="text" placeholder="Username o Email">
                                                <?=Feedback::iconFeedback('login')?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                                <input class="form-control" placeholder="Contraseña" name="pass" type="password" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox-inline"><input value="" type="checkbox">Recuérdame </label>
                                        </div>
                                        <input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">

                                    </fieldset>
                                </form>
                            </div>
                            <!-- /Dropdown Panel -->
                        </li>
                        <?=(!Feedback::status('login'))?Session::delFormData():'';?>
                        <li class="dropdown has-panel li-nosession">

                            <a aria-expanded="false" href="<?=URL?>signup"><i class="fa fa-edit hidden-lg"></i><i class="hidden-xs hidden-sm hidden-md" style="font-style: normal; text-transform: capitalize;"> Registrate</i></a>

                        </li>
                    </ul>
                    <!-- /Nav Right-->

                </div>
                <!-- /Dont Collapse -->
            </nav>
            <!-- /Nav Side -->
        </div>

        <!-- /Nav Bottom LG.............................................. -->