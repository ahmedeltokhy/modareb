<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>

            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>

        <meta charset="utf-8">
        <title>لوحة تحكم المدرب</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= site_url() ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= site_url() ?>assets/dist/css/skins/_all-skins.min.css">
        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;

                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
        <style>
            .color-palette {
                height: 35px;
                line-height: 35px;
                text-align: center;
            }

            .color-palette-set {
                margin-bottom: 15px;
            }

            .color-palette span {
                display: none;
                font-size: 12px;
            }

            .color-palette:hover span {
                display: block;
            }

            .color-palette-box h4 {
                position: absolute;
                top: 100%;
                left: 25px;
                margin-top: -40px;
                color: rgba(255, 255, 255, 0.8);
                font-size: 12px;
                display: block;
                z-index: 7;
            }
        </style>
    </head>
    <body>



    <body class="hold-transition skin-blue sidebar-mini" style="direction: rtl;">

        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= site_url("admin") ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">المدرب</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>المدرب</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= site_url() ?>assets/dist/img/user-image.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $this->session->userdata('logged_in')["username"]; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= site_url() ?>assets/dist/img/user-image.png" class="img-circle" alt="User Image">

                                        <p>
                                            <?= $this->session->userdata('logged_in')["username"]; ?>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->

                                    <!-- Menu Footer-->
                                    <li class="user-footer">

                                        <div class="pull-right">
                                            <a href="<?= site_url('login/logout') ?>" class="btn btn-default btn-flat">تسجيل الخروج</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= site_url() ?>assets/dist/img/user-image.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?= $this->session->userdata('logged_in')["username"]; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
                        </div>
                    </div>





                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">القائمة الرئيسية</li>
                        <li class="treeview">
                            <a href="<?= site_url('admin/author') ?>">
                                <i class="fa fa-dashboard"></i> <span>بيانات المدرب</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/achievement') ?>">
                                <i class="fa fa-dashboard"></i> <span>الإنجازات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/articles') ?>">
                                <i class="fa fa-dashboard"></i> <span>مقالات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/comments') ?>">
                                <i class="fa fa-dashboard"></i> <span>التعليقات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/education') ?>">
                                <i class="fa fa-dashboard"></i> <span>الشهادات العلمية</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/experience') ?>">
                                <i class="fa fa-dashboard"></i> <span>الخبرات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/portfolio') ?>">
                                <i class="fa fa-dashboard"></i> <span>سابقة الاعمال</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/services') ?>">
                                <i class="fa fa-dashboard"></i> <span>الخدمات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/skills') ?>">
                                <i class="fa fa-dashboard"></i> <span>المهارات</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>

                        <li class="treeview">
                            <a href="<?= site_url('admin/testimonial') ?>">
                                <i class="fa fa-dashboard"></i> <span> شهادات العملاء</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                        </li>



                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?= $title ?>

                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- COLOR PALETTE -->
                    <div class="box box-default color-palette-box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-tag"></i> <?= $title ?></h3>
                        </div>
                        <div class="box-body">
                            <div class="row" style="display:inline;">
                                <?= $output ?>
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <!-- Control Sidebar -->
                    <!--<aside class="control-sidebar control-sidebar-dark">
                    <!-- Create the tabs -->

                    </aside>
                    <!-- /.control-sidebar -->
                    <!-- Add the sidebar's background. This div must be placed
                         immediately after the control sidebar -->
                    <div class="control-sidebar-bg"></div>
            </div>
            <!-- ./wrapper -->

            <!-- jQuery 2.2.3 -->
            <!--<script src="<?= site_url() ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>-->
            <!-- Bootstrap 3.3.6 -->
            <script src="<?= site_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
            <!-- FastClick -->
            <script src="<?= site_url() ?>assets/plugins/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="<?= site_url() ?>assets/dist/js/app.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="<?= site_url() ?>assets/dist/js/demo.js"></script>
    </body>

</body>
</html>