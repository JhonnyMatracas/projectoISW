    <div class="collapse navbar-collapse navbar-absolute navbar-ex1-collapse">
        <!-- Navbar Center -->
        <ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">

            <li class="active"><a href="<?=URL?>index/home">home</a></li>

            <!--   <li class="dropdown dropdown-mega"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Maquillaje<i class="fa fa-angle-down toggler"></i></a> -->
            <!-- Mega Menu -->
            <div class="mega-menu dropdown-menu">
                <!-- Row -->
                <div class="row">

                    <!-- col -->
                    <div class="col-md-3">
                        <img class="featured-img hidden-xs hidden-sm" src="<?=URL?>images/menu-pic.jpg" alt="">
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
                        <!-- /Dropdown Panel -->
                    </li>

                    <li class="dropdown has-panel li-nosession">
                        <a aria-expanded="false" href="<?=URL?>index/signup"><i class="fa fa-edit hidden-lg"></i><i class="hidden-xs hidden-sm hidden-md" style="font-style: normal; text-transform: capitalize;"> Registrate</i></a>

                    </li>
                </ul>
                <!-- /Nav Right-->

            </div>
            <!-- /Dont Collapse -->
        </nav>
        <!-- /Nav Side -->
    </div>