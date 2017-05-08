<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Modareb <?=$title?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Savvy version 1.0.4 date: 2015-06-13 08:59:50 -->
        <!-- stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?= site_url()?>assets/csslib/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?= site_url()?>assets/csslib/icomoon.css">
        <link rel="stylesheet" type="text/css" href="<?= site_url()?>assets/csslib/jquery.mCustomScrollbar.css">
        <link rel="stylesheet" type="text/css" href="<?= site_url()?>assets/css/bootstrap-custom.css">
        <link rel="stylesheet" type="text/css" id="savvyStyle" href="<?= site_url()?>assets/css/<?=get_cookie('lang')=='ar'?'main-skin-style5_ar.css':'main-skin-style5.css'?>">
        <!-- end stylesheets -->
    </head>
    <body class="layout-body layout-body--home">
        <div class="fixedLeft lang">
            <?php if (get_cookie('lang')=='ar'):?>
            <a href="<?= site_url('site/lang/en') ?>"><img src="<?= site_url('assets/images/en_lang.png') ?>" /></a>
            <?php else: ?>
            <a href="<?= site_url('site/lang/ar') ?>"><img src="<?= site_url('assets/images/ar_lang.png') ?>" /></a>
            <?php endif; ?>
            
            
        </div> 
        <!-- .layout -->
        <div class="layout layout-width">
            <div class="layout-anti-scroll layout-anti-scroll--active layout-width"></div>
            <!-- .layout-header -->
            <div class="layout-header layout-width">
                <header>
                   
                    <div id="headerMenuSlidingElement" class="main-nav__sliding-element"></div>
                    <ul class="main-nav">
                        <li class="main-nav__item <?=($title == 'home')?'main-nav__item--active':'';?> ">
                            <a class="main-nav__item-link" href="<?= site_url()?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-home"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'الرئيسية':'Home'?></span>
                            </a>
                        </li>
                        <li class="main-nav__item <?=($title == 'resume')?'main-nav__item--active':'';?>">
                            <a class="main-nav__item-link" href="<?= site_url('site/resume')?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-profile"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'السيرة الذاتية':'Resume'?></span>
                            </a>
                        </li>
                        <li class="main-nav__item <?=($title == 'services')?'main-nav__item--active':'';?>">
                            <a class="main-nav__item-link" href="<?= site_url('site/services')?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-stats-bars2"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'خدمات':'Services'?></span>
                            </a>
                        </li>
                        <li class="main-nav__item <?=($title == 'portfolio')?'main-nav__item--active':'';?>">
                            <a class="main-nav__item-link" href="<?= site_url('site/portfolio')?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-books"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'الأعمال':'Portfolio'?></span>
                            </a>
                        </li>
                        <li class="main-nav__item <?=($title == 'blog')?'main-nav__item--active':'';?>">
                            <a class="main-nav__item-link" href="<?= site_url('site/blog')?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-blog"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'مقالات':'Blog'?></span>
                            </a>
                        </li>
                        <li class="main-nav__item <?=($title == 'contact')?'main-nav__item--active':'';?>">
                            <a class="main-nav__item-link" href="<?= site_url('site/contact')?>">
                                <span class="main-nav__item-icon-wrapper">
                                    <i class="main-nav__item-icon icon-envelop"></i>
                                </span>
                                <span class="main-nav__item-content"><?=get_cookie('lang')=='ar'?'اتصل بنا':'Contact'?></span>
                            </a>
                        </li>
                    </ul>
                    <div class="mobile-menu">
                        <a class="mobile-menu__toggle" href="/#">
                            <span class="mobile-menu__toggle__icon">
                                <i class="fa fa-bars mobile-menu__toggle__icon__open"></i>
                                <i class="fa fa-times mobile-menu__toggle__icon__close"></i>
                            </span>
                        </a>
                    </div>
                </header>
            </div>
            <!-- end .layout-header -->
            <!-- .layout-sidebar -->
            <div class="layout-sidebar layout-sidebar-width">
                <!-- .sidebar -->
                <div class="sidebar">
                    <div class="sidebar__site-name"><?=get_cookie('lang')=='ar'?$data->Name_ar:$data->Name?></div>
                    <div class="widget">
                        <ul class="widget__list">
                            <li><?=get_cookie('lang')=='ar'?$data->speciality_ar:$data->speciality?></li>
<!--                            <li>photographer</li>
                            <li>soccer fan</li>
                            <li>father of two</li>-->
                        </ul>
                    </div>
                    <!-- .social-icons -->
                    <ul class="social-icons">
                        <li>
                            <a href="<?=$data->Twitter?>" target="_blank" class="social-icon--twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$data->Facebook?>" target="_blank" class="social-icon--facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$data->Snapchat?>" target="_blank" class="social-icon--snapchat">
                                <i class="fa fa-snapchat-ghost"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$data->Instagram?>" target="_blank" class="social-icon--instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?=$data->Youtube?>" target="_blank" class="social-icon--youtube">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end .social-icons -->
                    <footer class="footer">
                        <p class="footer__copyright">&copy; <?=get_cookie('lang')=='ar'?$data->Name_ar.', 2017. جميع الحقوق محفوظة.':$data->Name.', 2017. All rights reserved.'?></p>
                    </footer>
                </div>
                <!-- end .sidebar -->
            </div>
            <!-- end .layout-sidebar -->
