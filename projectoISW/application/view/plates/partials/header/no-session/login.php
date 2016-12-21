<!-- Nav Bottom
        .............................................. -->
<nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">

    <!-- Container -->
    <div class="container">

        <!-- Header-->
        <div class="navbar-header" style="margin-top:8px; margin-bottom:-10px; ">
            <button id="xs-registrate" aria-expanded="false" class="btn btn-outline-menu visible-xs pull-right" style="margin-top:8px;" data-toggle="collapse" data-target="#registrate"><i class="ti ti-pencil-alt"></i></button>
            <button id="xs-iniciar-sesion" class="dropdown-toggle btn btn-outline-menu visible-xs pull-right" style="margin-top:8px;" data-toggle="collapse" data-target="#iniciar-sesion"><i class="ti ti-user"></i></button>
            <a data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-brand navbar-toggle visible-xs pull-left" href="#"><i class="fa fa-bars "></i></a>
            <img class="visible-xs" src="<?=URL?><?php echo $logo->src ;?>" data-toggle="tooltip" style="margin-left:-20px;width:114px; height:auto;"  data-placement="bottom" title="<?php echo $logo->alt ;?> Store">
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

        <!-- Collapse -->