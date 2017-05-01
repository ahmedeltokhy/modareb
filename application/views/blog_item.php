<script type="text/javascript">
  $(document).ready(function (){
      alert('function'); 
   });
    </script>
<div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="blog-single">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container">blog.
                                <span class="layout-title__subtitle"><?=$item_data->title?></span>
                            </h1>
                        </div>
                        <div class="layout-row">
                            <img class="blog-single__image" src="assets/uploads/articles/<?=$item_data->image?>" alt="">
                        </div>
                        <div class="blog-single__contents layout-horizontal-padding">
                            <h2 class="blog-single__title"><?=$item_data->title?></h2>
                            <ul class="blog-post__article-info">
                                <li>
                                    <a href="blog-single.html#">
                                        <i class="fa fa-calendar"></i><?= date_format(date_create($item_data->create_date), "d F Y")?></a>
                                </li>
<!--                                <li>
                                    <a href="blog-single.html#">
                                        <i class="fa fa-folder-open"></i>work</a>
                                </li>-->
                                <li>
                                    <a href="blog-single.html#">
                                        <i class="fa fa-tags"></i><?=$item_data->field?></a>
                                </li>
<!--                                <li>
                                    <a href="blog-single.html#">
                                        <i class="fa fa-comments-o"></i>14 comments</a>
                                </li>-->
                            </ul>
                            <div class="blog-single__content">
                                <p><?=$item_data->content?> </p>
                            </div>
<!--                            <div class="layout-horizontal-padding">
                                <div class="post-navigation">
                                    <div class="post-navigation__item-left">
                                        <a href="blog-single.html#" class="post-navigation__item-content">
                                            <i class="fa fa-arrow-circle-left post-navigation__icon"></i>Benefits of Being Well-Organized</a>
                                    </div>
                                    <div class="post-navigation__item-right">
                                        <a href="blog-single.html#" class="post-navigation__item-content">
                                            <i class="fa fa-arrow-circle-right post-navigation__icon"></i>Do You Still Read Paper Books?</a>
                                    </div>
                                </div>
                            </div>-->
                            <div class="share-box">
                                <h3 class="share-box__title">Share</h3>
                                <div id="shareBoxContainer" class="share-box__items-contaner">
                                    <div class="share-box__item share-box__item--facebook" data-btntype="facebook" data-title="&nbsp;"></div>
                                    <div class="share-box__item share-box__item--twitter" data-btntype="twitter" data-title="&nbsp;"></div>
                                    <div class="share-box__item share-box__item--gplus" data-btntype="googlePlus" data-title="&nbsp;"></div>
                                    <div class="share-box__item share-box__item--pinterest" data-btntype="pinterest" data-title="&nbsp;"></div>
                                    <div class="share-box__item share-box__item--linkedin" data-btntype="linkedin" data-title="&nbsp;"></div>
                                </div>
                            </div>
<!--                            <div class="layout-horizontal-padding">
                                <div class="layout-row about-author">
                                    <div class="layout-container">
                                        <h3 class="about-author__title">About author</h3>
                                        <div class="about-author__image-wrap">
                                            <img src="uploads/blog/about-author.jpg" alt="">
                                        </div>
                                        <div class="about-author__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    </div>
                                </div>
                            </div>-->
                            <!-- .comments -->
                            <div class="comments">
                                <!--<h3 class="comments__title">4 comments</h3>-->
                                <div class="comments__items">
                                  <?php
                                  foreach ($comments as $comment):
                                  ?>
                                    <!-- .comment-item -->
                                    <div class="comment-item">
                                        <div class="comment-item__info">
                                            <div class="comment-item__info__image-wrap">
                                                <img style="width: 60px" src="<?= site_url('assets/uploads/Pic/ac2ab-default-user-image.png')?>" alt="">
                                            </div>
                                            <div class="comment-item__info__name"><?=$comment->name?></div>
                                            <div class="comment-item__info__date"><?= date_format(date_create($comment->create_date), 'd F Y')?></div>
                                            <!--<div class="comment-item__info__reply"><a class="btn btn--style3" href="blog-single.html#">Reply</a></div>-->
                                        </div>
                                        <div class="comment-item__content"><?=$comment->message?></div>
                                    </div>
                                    <!-- end .comment-item -->
                                  <?php endforeach; ?>
                                   
                                </div>
<!--                                <div class="comments__pagination">
                                    <ul class="comments__pagination__list">
                                        <li><a class="comments__pagination__list__item-current" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>-->
                                <div class="layout-horizontal-padding">
                                    <div class="comments__form">
                                        <h3 class="comments__form__title">leave a reply</h3>
                                        <form name="post_comment" action="<?= site_url('site/add_comment')?>" method="post">
                                            <input id="post_id" value="<?=$item_data->id?>" name="post_id" type="hidden" />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input name="name" id="name" class="form__item" required="required" type="text" placeholder="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input id="email" name="email" class="form__item" required="required" type="email" placeholder="email">
                                                </div>
                                            </div>
                                            <textarea name="message" class="form__textarea form__item" required="required" id="message" placeholder="message"></textarea>
                                            <input id="submit_post" type="submit" onclick="post_submit();" class="btn btn-lg btn--style1" value="Post comment" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end .comments -->
                        </div>
                        <div class="layout-horizontal-padding--clean"></div>
                    </section>
                </div>
                <!-- end .layout-content -->
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>
  