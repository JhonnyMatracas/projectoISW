<!-- /HEADER -->
<div class="page-wrapper shadow">

    <!-- Header Block
    ============================================== -->
    <header class="header-block">
        <!--  Main Header -->
        <?= $this->insert('partials/header/main-header') ?>
        <!-- /Main Header-->
        <?= $this->insert('partials/header/no-session/login') ?>
        <!-- Menu -->
        <?= $this->insert('partials/header/menu') ?>
        <!-- /Menu -->

        <!-- Navbar btn-group -->
        <div class="navbar-btn-group btn-group navbar-left no-margin-r-xs hidden-xs">

            <a href="<?=URL?>">
                <img src="<?=URL?>pic/store/img/header/1-logo/logolisto.png" data-toggle="tooltip" style="width:144px; height:auto;"  data-placement="bottom" title="Innova Store">
            </a>
        </div>
        <!-- /Navbar btn-group -->

    </header>
</div>
<!-- /Header Block
============================================== -->

<!-- /HEADER -->



