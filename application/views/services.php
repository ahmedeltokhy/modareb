 <div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-services">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container"><?=get_cookie('lang')=='ar'?'الخدمات':'Services'?>.
                                <span class="layout-title__subtitle"><?=get_cookie('lang')=='ar'?'ماذا نقدم':'What I offer'?></span>
                            </h1>
                        </div>
                        <?php if(!empty($services)): foreach ($services as $item):?>
                            
                        <div class="layout-row service-item">
                            <div class="layout-container">
                                <div class="service-item__icon-wrap">
                                    <div class="service-item__icon">
                                        <i class="fa <?=$item->icon?>"></i>
                                    </div>
                                </div>
                                <div class="service-item__content">
                                    <h2 class="service-item__title"><?=get_cookie('lang')=='ar'?$item->title_ar:$item->Title?></h2>
                                    <p class="service-item__description"><?=get_cookie('lang')=='ar'?$item->Description_ar:$item->Description?></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
     <?php endforeach;endif; ?>
                        
                    </section>
                </div>
                <!-- end .layout-content -->
<!--                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>-->