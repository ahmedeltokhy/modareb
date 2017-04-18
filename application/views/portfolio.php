  <div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-portfolio">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container">Portfolio.
                                <span class="layout-title__subtitle">My photography</span>
                            </h1>
                        </div>
                        <div class="page-portfolio__items-container layout-row">
                           <?php
                           if(!empty($portfolio)):
                               foreach ($portfolio as $item):
                           ?>
                            <div class="page-portfolio__item-wrapper">
                                <div class="page-portfolio__item">
                                    <a href="<?=site_url('site/portfolio_item/'.$item->id)?>">
                                        <img class="page-portfolio__image" src="assets/uploads/portfolio/cover/<?=$item->cover_pic?>" alt="<?=$item->title?>">
                                    </a>
                                    <div class="page-portfolio__item__info">
                                        <h2 class="page-portfolio__item__title"><?=$item->title?></h2>
                                        <div class="page-portfolio__item__content"><?=$item->cover_text?></div>
                                        <a class="btn btn-lg btn--style2" href="<?=site_url('site/portfolio_item/'.$item->id)?>">See More <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; endif; ?>
                            </div>
                    </section>
                </div>
                <!-- end .layout-content -->
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>