<div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="blog">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container">Blog.
                                <span class="layout-title__subtitle">About everything</span>
                            </h1>
                        </div>
                        <div class="blog-posts">
                        <?php
                        if(!empty($articles)):
                            foreach ($articles as $item):
                            ?>
                                
                                 <div class="blog-post layout-row">
                                     <a class="blog-post__image-wrap" href="<?= site_url('site/blog_item/'.$item->id)?>">
                                    <img class="blog-post__image" src="assets/uploads/articles/<?=$item->image?>" alt="">
                                </a>
                                <div class="layout-container layout-horizontal-padding">
                                    <h2 class="blog-post__title"><a href="<?= site_url('site/blog_item/'.$item->id)?>"><?=$item->title?></a></h2>
                                    <ul class="blog-post__article-info">
                                        <li>
                                            <a href="blog.html#">
                                                <i class="fa fa-calendar"></i><?= date_format(date_create($item->create_date), 'd F Y')?></a>
                                        </li>
<!--                                        <li>
                                            <a href="blog.html#">
                                                <i class="fa fa-folder-open"></i>work</a>
                                        </li>-->
                                        <li>
                                            <a href="blog.html#">
                                                <i class="fa fa-tags"></i><?=$item->field?></a>
                                        </li>
<!--                                        <li>
                                            <a href="blog.html#">
                                                <i class="fa fa-comments-o"></i>14 comments</a>
                                        </li>-->
                                    </ul>
                                    <p class="blog-post__content"><?=$item->content?></p>
                                    <a class="btn btn-lg btn--style1 btn--blog" href="<?= site_url('site/blog_item/'.$item->id)?>">Read More</a>
                                </div>
                            </div>
                                <?php endforeach;endif;?>
                           
                           
                        </div>
                    </section>
                </div>
                <!-- end .layout-content -->
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>