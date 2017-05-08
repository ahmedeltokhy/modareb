<?php
$completed_date = date_format(date_create($item_data->completed_date), "F Y");
?>  
<div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-portfolio-single">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container"><?=get_cookie('lang')=='ar'?$item_data->title_ar:$item_data->title?>.
                                <span class="layout-title__subtitle"><?=get_cookie('lang')=='ar'?'تفاصيل':'In detail'?></span>
                            </h1>
                        </div>
                        <div class="layout-row">
                            <img class="portfolio-single__image" src="<?= site_url()?>assets/uploads/portfolio/inner/<?=$item_data->inner_pic?>" alt="">
                        </div>
                        <div class="portfolio-single__info layout-horizontal-padding">
                            <div>
                                <div class="portfolio-single__info__name"><?=get_cookie('lang')=='ar'?'إسم المشروع':'Project name'?>:</div>
                                <div class="portfolio-single__info__description"><?=get_cookie('lang')=='ar'?$item_data->title_ar:$item_data->title?></div>
                            </div>
                            <div>
                                <div class="portfolio-single__info__name"><?=get_cookie('lang')=='ar'?'انتهى فى':'Completed'?>:</div>
                                <div class="portfolio-single__info__description"><?=$completed_date?></div>
                            </div>
                            <div>
                                <div class="portfolio-single__info__name"><?=get_cookie('lang')=='ar'?'العميل':'Client'?>:</div>
                                <div class="portfolio-single__info__description"><?=get_cookie('lang')=='ar'?$item_data->client_name_ar:$item_data->client_name?></div>
                            </div>
                            <p class="portfolio-single__info__text">
                               <?=get_cookie('lang')=='ar'?$item_data->inner_text_ar:$item_data->inner_text?>
                            </p>
                        </div>
                    </section>
                </div>
<!--                 end .layout-content 
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>
        </div>
         end .layout -->