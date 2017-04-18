<?php
$completed_date = date_format(date_create($item_data->completed_date), "F Y");
?>  
<div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-portfolio-single">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container"><?=$item_data->title?>.
                                <span class="layout-title__subtitle">In detail</span>
                            </h1>
                        </div>
                        <div class="layout-row">
                            <img class="portfolio-single__image" src="<?= site_url()?>assets/uploads/portfolio/inner/<?=$item_data->inner_pic?>" alt="">
                        </div>
                        <div class="portfolio-single__info layout-horizontal-padding">
                            <div>
                                <div class="portfolio-single__info__name">Project name:</div>
                                <div class="portfolio-single__info__description"><?=$item_data->title?></div>
                            </div>
                            <div>
                                <div class="portfolio-single__info__name">Completed:</div>
                                <div class="portfolio-single__info__description"><?=$completed_date?></div>
                            </div>
                            <div>
                                <div class="portfolio-single__info__name">Client:</div>
                                <div class="portfolio-single__info__description"><?=$item_data->client_name?></div>
                            </div>
                            <p class="portfolio-single__info__text">
                               <?=$item_data->inner_text?>
                            </p>
                        </div>
                    </section>
                </div>
                <!-- end .layout-content -->
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- end .layout -->