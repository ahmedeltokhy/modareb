<div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-home layout-row">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="page-home__page-title"><?=get_cookie('lang')=='ar'?$data->Name_ar:$data->Name?></h1>
                                <div class="page-home__text">
                                    <p><?=get_cookie('lang')=='ar'?$data->about_ar:$data->About?></p>
                                </div>
                            </div>
                            <div class="col-md-6 page-home__thumbnail-wrap">
                                <img class="page-home__thumbnail" src="assets/uploads/Pic/<?=$data->Picture?>" alt="">
                            </div>
                        </div>
<!--                        <div class="row">
                            <div class="col-md-12">
                                <img class="page-home__sign" src="uploads/home/sign.png" alt="">
                            </div>
                        </div>-->
                    </section>
                </div>
                <!-- end .layout-content -->
<!--                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>-->