<div class="layout-container-main layout-container-width">
    <!-- .layout-content -->
    <div class="layout-content">
        <section class="page-resume">
            <div class="layout-title-wrapper layout-row">
                <h1 class="layout-title layout-container-width layout-container"><?= get_cookie('lang')=='ar'?'السيرة الذاتية':$title ?>.
                    <span class="layout-title__subtitle"><?=get_cookie('lang')=='ar'?'محدثة':'Up-to-date'?></span>
                </h1>
            </div>
            <div class="layout-row">
                <!-- .accordion-group -->
                <div class="accordion-group" role="tablist" aria-multiselectable="true">
                    <div class="accordion-item accordion-item--layout">
                        <h2 data-toggle="collapse" data-target="#collapse0" class="accordion-title layout-container">
                            <i class="accordion-title__icon fa fa-suitcase"></i><?=get_cookie('lang')=='ar'?'الخبرات':'Experience'?>
                            <i class="accordion-title__state-icon fa "></i>
                        </h2>
                        <div id="collapse0" class="accordion-item__panel collapse in">
                            <!-- .timeline -->
                            <div class="timeline timeline--layout layout-container">
                                <?php
                                $first = true;
                                foreach ($experience as $item):
                                    ?>
                                    <?php if (!$first): ?>
                                        <hr class="divider layout-row">
                                        <?php
                                        $first = false;
                                    endif;
                                    $start_date = date_format(date_create($item->start_date), "M Y");
                                    $leave_date = ($item->leave_date != '0000-00-00') ? date_format(date_create($item->leave_date), "M Y") : get_cookie('lang')=='ar'?'الأن':'Now';
                                    ?>
                                    <div class="timeline-item">
                                        <div class="timeline-item__col timeline-item__col--info">
                                            <div class="timeline-item__period"><?= $start_date ?>-<?= $leave_date ?></div>
                                            <div class="timeline-item__place"><?= get_cookie('lang')=='ar'?$item->company_name_ar:$item->company_name ?></div>
                                            <div class="timeline-item__location"><?= get_cookie('lang')=='ar'?$item->address_ar:$item->address ?></div>
                                        </div>
                                        <div class="timeline-item__col timeline-item__col--description">
                                            <div class="timeline-item__title"><?= get_cookie('lang')=='ar'?$item->title_ar:$item->title ?></div>
                                            <div class="timeline-item__description"><?= get_cookie('lang')=='ar'?$item->details_ar:$item->details ?></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                            </div>
                            <!-- end .timeline -->
                        </div>
                    </div>
                    <div class="accordion-item accordion-item--layout">
                        <h2 data-toggle="collapse" data-target="#collapse1" class="accordion-title layout-container collapsed">
                            <i class="accordion-title__icon fa fa-cubes"></i><?=get_cookie('lang')=='ar'?'المهارات':'Skills'?>
                            <i class="accordion-title__state-icon fa "></i>
                        </h2>
                        <div id="collapse1" class="accordion-item__panel collapse">
                            <div class="layout-container">
                                <!-- .skill-section -->
                                <?php if (!empty($skills_technical)): ?>
                                    <div class="skill-section">
                                        <h3 class="skill-section__title"><?=get_cookie('lang')=='ar'?'فنية':'Technical'?></h3>
                                        <?php foreach ($skills_technical as $skill): ?>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar__name"><?= get_cookie('lang')=='ar'?$skill->title_ar:$skill->title ?></div>
                                                <div class="progress-bar">
                                                    <div class="progress-bar__wrapper">
                                                        <div class="progress-bar__bar" data-level="<?= $skill->degree ?>">
                                                            <div class="progress-bar__value" style="width:0;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-bar__progress"><?= $skill->degree ?>%</div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- end .skill-section -->
                                    <hr class="divider layout-row">
                                <?php endif; ?>
                                <!-- .skill-section -->
                                <?php if (!empty($skills_language)): ?>
                                    <div class="skill-section">
                                        <h3 class="skill-section__title"><?=get_cookie('lang')=='ar'?'اللغات':'Languages'?></h3>
                                        <?php foreach ($skills_language as $skill): ?>
                                            <div class="rating">
                                                <div class="rating__title"><?= get_cookie('lang')=='ar'?$skill->title_ar:$skill->title ?></div>
                                                <div data-score="<?= $skill->degree * 8 / 100 ?>" class="rating__score"></div>
                                                <div class="rating__value">
                                                    <?php
                                                    if ($skill->degree <= 25) {
                                                        echo get_cookie('lang')=='ar'?'مبتدئ':'Beginner';
                                                    } elseif ($skill->degree > 25 && $skill->degree <= 50) {

                                                        echo get_cookie('lang')=='ar'?'متوسط':'Intermediate';
                                                    } elseif ($skill->degree > 50 && $skill->degree <= 75) {

                                                        echo get_cookie('lang')=='ar'?'جيد جدا':'Fluent';
                                                    } elseif ($skill->degree > 75) {
                                                        echo get_cookie('lang')=='ar'?'ممتاز':'Native';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- end .skill-section -->
                                    <hr class="divider layout-row">
                                <?php endif; ?>
                                <!-- .skill-section -->
                                <?php if (!empty($skills_aditional)): ?>
                                    <div class="skill-section">
                                        <h3 class="skill-section__title"><?=get_cookie('lang')=='ar'?'إضافية':'Additionally'?></h3>
                                        <div class="row">
                                            <div <?=get_cookie('lang')=='ar'?'style="float:right "':''?> class="col-md-6">
                                                <ul class="list-style--check list-style--check--resume">
                                                    <?php foreach ($skills_aditional as $skill): ?>
                                                        <li><?= get_cookie('lang')=='ar'?$skill->title_ar:$skill->title ?></li>
                                                    <?php endforeach; ?> 
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php endif; ?>
                                <!-- end .skill-section -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item--layout">
                        <h2 data-toggle="collapse" data-target="#collapse2" class="accordion-title layout-container collapsed">
                            <i class="accordion-title__icon fa fa-graduation-cap"></i><?=get_cookie('lang')=='ar'?'التعليم':'Education'?>
                            <i class="accordion-title__state-icon fa "></i>
                        </h2>
                        <div id="collapse2" class="accordion-item__panel collapse">
                            <!-- .timeline -->
                            <div class="timeline timeline--layout layout-container">
                                <?php
                                $is_first = true;
                                if (!empty($education)):
                                    foreach ($education as $item):
                                        if (!$is_first):
                                            ?>

                                            <hr class="divider layout-row">
                                            <?php $is_first = false;
                                        endif;
                                        ?>
                                        <div class="timeline-item">
                                            <div class="timeline-item__col timeline-item__col--info">
                                                <div class="timeline-item__period"><?= $item->start_year ?> - <?= $item->end_year ?></div>
                                                <div class="timeline-item__place"><?= get_cookie('lang')=='ar'?$item->university_ar:$item->university ?></div>
                                                <div class="timeline-item__location"><?= get_cookie('lang')=='ar'?$item->address_ar:$item->address ?></div>
                                                <img style="width: 50px;" src="assets/uploads/edu/<?= $item->logo ?>" alt=""> </div>
                                            <div class="timeline-item__col timeline-item__col--description">
                                                <div class="timeline-item__title"><?= get_cookie('lang')=='ar'?$item->title_ar:$item->title ?></div>
                                                <div class="timeline-item__description">
                                                    <ul class="list-style--check">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                            <!-- end .timeline -->
                        </div>
                    </div>
                    <div class="accordion-item accordion-item--layout">
                        <h2 data-toggle="collapse" data-target="#collapse3" class="accordion-title layout-container collapsed">
                            <i class="accordion-title__icon fa fa-trophy"></i><?=get_cookie('lang')=='ar'?'الإنجازات':'Achievements'?>
                            <i class="accordion-title__state-icon fa "></i>
                        </h2>
                        <div id="collapse3" class="accordion-item__panel collapse">
                            <div class="layout-container">
                                <!-- .achievement-grid -->
                                <div class="achievement-grid">
                                    <div class="achievement-grid__screen">
                                        <?php
                                        if (!empty($achievment)):
                                            foreach ($achievment as $item):
                                                ?>
                                                <div class="achievement-grid__cell">
                                                    <div class="achievement-item">
                                                        <div class="achievement-item__icon">
                                                            <i class="fa <?= $item->icon ?>"></i>
                                                        </div>
                                                        <div class="achievement-item__titles">
                                                            <div class="achievement-item__title"><?= $item->number ?></div>
                                                            <div class="achievement-item__sub-title"><?= get_cookie('lang')=='ar'?$item->title_ar:$item->title ?></div>
                                                        </div>
                                                    </div>
                                                </div>
    <?php endforeach;
endif;
?>

                                    </div>
                                </div>
                                <!-- end .achievement-grid -->
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item--layout">
                        <h2 data-toggle="collapse" data-target="#collapse4" class="accordion-title layout-container collapsed">
                            <i class="accordion-title__icon fa fa-comments"></i><?=get_cookie('lang')=='ar'?'شهادات العملاء':'Testimonials'?>
                            <i class="accordion-title__state-icon fa "></i>
                        </h2>
                        <div id="collapse4" class="accordion-item__panel collapse">
                            <div class="layout-container">
                                <div class="layout-horizontal-padding container-fluid">
<?php
if (!empty($testimonial)):
    foreach ($testimonial as $item):
        ?>
                                            <!-- .testimonial -->
                                            <div class="testimonial testimonial__with-image row">
                                                <div class="testimonial__images col-sm-2">
                                                    <img class="testimonial__image" style="width: 75px" src="assets/uploads/test_pics/<?=$item->pic?>" alt="">
                                                    <i class="testimonial__quote fa fa-quote-left"></i>
                                                </div>
                                                <div class="testimonial__text col-sm-10">
                                                    <p><?=$item->details?></p>
                                                    <div class="testimonial__name small-line-top"><?=$item->name?></div>
                                                </div>
                                            </div>
                                            <!-- end .testimonial -->
    <?php endforeach;
endif; ?>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .accordion-group -->
            </div>
        </section>
    </div>
    <!-- end .layout-content -->
<!--    <div class="footer--bottom layout-row">
        <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
    </div>
</div>-->