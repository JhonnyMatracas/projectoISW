<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>uikit/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>uikit/css/uikit.css" rel="stylesheet">
    <link href="<?php echo URL; ?>uikit/css/innova.css" rel="stylesheet">
</head>
<body class="tile-x-bg no-follow">
<!-- HEADER -->
<!-- Page Wrapper
++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="page-wrapper shadow">

    <!-- Header Block
    ============================================== -->
    <header class="header-block">

        <!-- Main Header
        ............................................ -->
        <div class="main-header container marca-store">

            <!-- Header Cols -->
            <div class="header-cols" >

                <!-- Brand Col -->
                <div class="brand-col hidden-xs">

                    <!-- vcenter -->
                    <div class="vcenter">
                        <!-- v-centered -->
                        <div class="vcenter-this">

                        </div>
                        <!-- v-centered -->
                    </div>
                    <!-- vcenter -->

                </div>
                <!-- /Brand Col -->
                <!-- Right Col -->
                <div class="right-col">

                    <!-- vcenter -->
                    <div class="vcenter">

                        <!-- v-centered -->
                        <div class="vcenter-this">



                        </div>
                        <!-- /v-centered -->
                    </div>
                    <!-- /vcenter -->

                </div>
                <!-- /Right Col -->

                <!-- Left Col -->
                <div class="left-col">

                    <!-- vcenter -->
                    <div class="vcenter">

                        <!-- v-centered -->
                        <div class="vcenter-this">

                            <!--  <form class="header-search">
                               <div class="form-group">
                                 <input class="form-control" placeholder="SEARCH" type="text">
                                 <button class="btn btn-empty"><i class="fa fa-search"></i></button>
                               </div>
                             </form> -->

                        </div>
                        <!-- v-centered -->

                    </div>
                    <!-- vcenter -->

                </div>
                <!-- /Left Col -->
            </div>
            <!-- Header Cols -->

        </div>
        <!-- /Main Header
        .............................................. -->

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

                        <img class="visible-xs" src="http://fernandomfdz.ddns.net/proyectos/store/<?php echo $logo->src ;?>" data-toggle="tooltip" style="margin-left:-20px;width:114px; height:auto;"  data-placement="bottom" title="<?php echo $logo->alt ;?> Store">

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

                            <form accept-charset="UTF-8" role="form" method="post" action="http://fernandomfdz.ddns.net/proyectos/store/index/processlogin">
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

                <div class="collapse navbar-collapse navbar-absolute navbar-ex1-collapse">
                    <!-- Navbar Center -->
                    <ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">

                        <li class="active"><a href="http://fernandomfdz.ddns.net/proyectos/store/index/home">home</a></li>
                        <!--   <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Maquillaje<i class="fa fa-angle-down toggler"></i></a> -->
                        <!-- Mega Menu -->
                        <div class="mega-menu dropdown-menu">
                            <!-- Row -->
                            <div class="row">

                                <!-- col -->
                                <div class="col-md-3">
                                    <img class="featured-img hidden-xs hidden-sm" src="http://fernandomfdz.ddns.net/proyectos/store/images/menu-pic.jpg" alt="">
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">
                                    <h5>shop pages</h5>
                                    <ul class="links">
                                        <li><a href="category.html">category</a></li>
                                        <li><a href="category2.html">category #2</a></li>
                                        <li><a href="product.html">product details</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                    </ul>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">
                                    <h5>common pages</h5>
                                    <ul class="links">
                                        <li><a href="page.html">Typical Page</a></li>
                                        <li><a href="error-404.html">404</a></li>
                                        <li><a href="error-generic.html">generic error</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="faq.html">faq</a></li>
                                    </ul>
                                </div>
                                <!-- /col -->

                                <!-- col -->
                                <div class="col-md-3">
                                    <h5>other pages</h5>
                                    <ul class="links">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-post.html">single post</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="register.html">register</a></li>
                                    </ul>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /Row -->
                        </div>
                        <!-- /Mega Menu -->
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pide Cita<i class="fa fa-angle-down toggler"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="uikit/index.html">Elements + Modules</a></li>
                                <li><a href="uikit/index.html#bxslider.demo?viewer=ajax">Sliders</a></li>
                                <li><a href="uikit/index.html#animations.demo?viewer=ajax">Animations</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- /Navbar Center -->

                </div>
                <!-- /Collapse -->
                <!-- Navbar btn-group -->
                <div class="navbar-btn-group btn-group navbar-right no-margin-r-xs hidden-xs">

                    <!-- Nav Side -->
                    <nav class="bottom hnav hnav-ruled white-bg boxed-section"" role="navigation" >

                                <!-- Dont Collapse -->
                                <div class="navbar-dont-collapse no-toggle" >

                                    <!-- Nav Right -->
                                    <ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
                                        <li class="dropdown has-panel li-nosession">
                                            <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-user hidden-lg"></i><i class="hidden-xs hidden-sm hidden-md" style="font-style: normal; text-transform: capitalize;"> Inicia Sesion</i><i class="fa fa-angle-down toggler hidden-xs hidden-sm"></i></a>

                                            <!-- Dropdown Panel -->
                                            <div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs" data-keep-open="true">

                                                <form accept-charset="UTF-8" role="form" method="post" action="http://fernandomfdz.ddns.net/proyectos/store/index/processlogin">
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
                                            <!-- /Dropdown Panel -->
                                        </li>

                                        <li class="dropdown has-panel li-nosession">
                                            <a aria-expanded="false" href="http://fernandomfdz.ddns.net/proyectos/store/index/signup"><i class="fa fa-edit hidden-lg"></i><i class="hidden-xs hidden-sm hidden-md" style="font-style: normal; text-transform: capitalize;"> Registrate</i></a>

                                        </li>
                                    </ul>
                                    <!-- /Nav Right-->

                                </div>
                                <!-- /Dont Collapse -->



        </nav>
        <!-- /Nav Side -->

</div>

<!-- Navbar btn-group -->
<div class="navbar-btn-group btn-group navbar-left no-margin-r-xs hidden-xs">

    <a href="http://fernandomfdz.ddns.net/proyectos/store/index/home">
        <img src="<?= URL ?>pic/store/img/header/1-logo/logolisto.png" data-toggle="tooltip" style="width:144px; height:auto;"  data-placement="bottom">
    </a>

</div>
<!-- /Navbar btn-group -->

</div>
<!-- /Container -->

</nav>


</header>
<!-- /Header Block
============================================== -->



<!-- /HEADER -->
<?= $this->insert('partials/menu') ?>


<?= $this->section('content') ?>



    <!-- backlink to repo on GitHub, and affiliate link to Rackspace if you want to support the project -->
    <div class="footer">
        Find <a href="https://github.com/panique/mini">MINI on GitHub</a>.
        If you like the project, support it by <a href="http://tracking.rackspace.com/SH1ES">using Rackspace</a> as your hoster [affiliate link].
    </div>

    <!-- jQuery, loaded in the recommended protocol-less way -->
    <!-- more http://www.paulirish.com/2010/the-protocol-relative-url/ -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo URL; ?>uikit/js/uikit.js"></script>

    <!-- define the project's URL (to make AJAX calls possible, even when using this in sub-folders etc) -->
    <script>
        var url = "<?php echo URL; ?>";
    </script>

    <!-- our JavaScript -->
    <script src="<?php echo URL; ?>js/application.js"></script>
</body>
</html>
