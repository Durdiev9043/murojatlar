<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>
<!-- Sidebar Menu -->


<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion pt-2" id="accordionSidebar">
    <li class="nav-item active p-2">
    <a class="sidebar-brand mb-2 d-flsex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon mb-3">
            <?= Html::img('@web/image/logo_2.png', ['alt' => 'My logo']) ?>
        </div>
        <div class="sidebar-brand-text small ">"E-MUROJAAT.UZ" сунъий автоматлаштирилган мурожаатлар мониторинги ахборот тизими</div>
    </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link text-center" href="index.html">
            <span>Сабуpов Раимбеpган Садуллаевич</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/user/my-appeal'])?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Менинг топшириқларим</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Мурожаатлар</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/user/company'])?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Ташкилотлар</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= Yii::$app->urlManager->createUrl(['/user/company-group'])?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Ташкилотлар гурухи</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Назорат</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Рахбарлар</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>