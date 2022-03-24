<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use yii\bootstrap4\Progress;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?=$this->render('_menu')?>
    <!-- End of Sidebar -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content -->
    </div>
<!--     Content Wrapper-->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <li class="nav-item d-none d-sm-inline-block align-center ml-3">
                    "E-MUROJAAT.UZ" Ахборот тизими
                </li>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header text-center">
                                Bildirishnomalar
                            </h6>
                            <a href="/appeal/notregister" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 0 та рўйхатга олинмаган
                            </a>
                        </div>
                    </li>



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="/site/logout">
                            <span class="mr-2 d-lg-inline text-gray-600 small text-right">Тизимдан чиқиш</span>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->



            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Менга келган топшириқлар рўйхати</h1>
                    <div class="float-right">
                        <a href="blank.html" class="btn btn-success btn-icon-split mr-3">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                            <span class="text">Янги мурожаат қўшиш</span>
                        </a>

                        <a href="/appeal/notregister" class="btn btn-danger btn-icon-split">
                            <span class="text">Рўйхатга олинмаган</span>
                        </a>
                    </div>
                </div>


                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card card-stats card bg-light shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-dark mb-2">Жами топшириқлар</h5>
                                        <span class="h4 mb-0 text-dark">7 та</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape">
                                            <i class="fas fa-flag fa-3x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card card-stats card bg-light shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-dark mb-2">Бажарилган топшириқлар</h5>
                                        <span class="h4 mb-0 text-dark">1 та</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape">
                                            <i class="fas fa-check fa-3x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card card-stats card bg-light shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-dark mb-2">Жараёндаги топшириқлар</h5>
                                        <span class="h4 mb-0 text-dark">1 та</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape">
                                            <i class="fas fa-info-circle fa-3x text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card card-stats card bg-light shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-dark mb-2">Муддати тугаган</h5>
                                        <span class="h4 mb-0 text-dark text-bolder">1 та</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape">
                                            <i class="fas fa-exclamation-triangle fa-3x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">

                    <!-- Area Chart -->

                                                <?=$content?>

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>"Рақамли иқтисодиётни ривожлантириш" МЧЖ томонидан ишлаб чиқарилган.</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
<!--     End of Content Wrapper-->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<?php $this->endBody() ?>
</body>

</html>

<?php ////
////$controller=Yii::$app->controller->id;
////$action=Yii::$app->controller->action->id;
////if($controller=='site' && $action=='index')
////echo '<script src="/theme/dist/js/pages/dashboard2.js"></script>';
////echo '<script src="/theme/dist/js/pages/dashboard2.js"></script>';
////
////?>
<?php //$this->endBody() ?>
<!--</body>-->
<!--</html>-->
<?php $this->endPage() ?>
