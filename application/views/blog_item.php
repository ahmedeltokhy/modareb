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
                                <h3 class="comments__title">4 comments</h3>
                                <div class="comments__items">
                                    <!-- .comment-item -->
                                    <div class="comment-item">
                                        <div class="comment-item__info">
                                            <div class="comment-item__info__image-wrap">
                                                <img src="uploads/comments/marinella.jpg" alt="">
                                            </div>
                                            <div class="comment-item__info__name">Marinella Taranto</div>
                                            <div class="comment-item__info__date">28 December 2014</div>
                                            <div class="comment-item__info__reply"><a class="btn btn--style3" href="blog-single.html#">Reply</a></div>
                                        </div>
                                        <div class="comment-item__content">Nunc laoreet interdum diam in hendrerit. Duis maximus vitae sapien quis blandit. Nullam risus tellus, tincidunt eget vulputate at, convallis sed ligula. Duis erat mi, gravida commodo mollis vitae, rutrum at sem. Vestibulum varius eleifend enim, quis consequat orci iaculis non. Aliquam dignissim elit sed varius laoreet. </div>
                                    </div>
                                    <!-- end .comment-item -->
                                    <!-- .comment-item -->
                                    <div class="comment-item">
                                        <div class="comment-item__info">
                                            <div class="comment-item__info__image-wrap">
                                                <img src="uploads/comments/ryan.jpg" alt="">
                                            </div>
                                            <div class="comment-item__info__name">Ryan Johnson</div>
                                            <div class="comment-item__info__date">26 December 2014</div>
                                            <div class="comment-item__info__reply"><a class="btn btn--style3" href="blog-single.html#">Reply</a></div>
                                        </div>
                                        <div class="comment-item__content">Aliquam interdum dapibus venenatis. Sed tempus suscipit imperdiet. Cras vitae lectus rutrum tortor euismod mattis. Etiam convallis lectus eu bibendum interdum. Etiam tempus justo nec nunc gravida, eget placerat arcu feugiat. Proin rutrum nulla sed aliquam sagittis. Duis vel tincidunt sapien.</div>
                                        <!-- .comments__reply -->
                                        <div class="comments__reply">
                                            <!-- .comment-item -->
                                            <div class="comment-item">
                                                <div class="comment-item__info">
                                                    <div class="comment-item__info__image-wrap">
                                                        <img src="uploads/comments/marinella.jpg" alt="">
                                                    </div>
                                                    <div class="comment-item__info__name">Marinella Taranto</div>
                                                    <div class="comment-item__info__date">26 December 2014</div>
                                                    <div class="comment-item__info__reply"><a class="btn btn--style3" href="blog-single.html#">Reply</a></div>
                                                </div>
                                                <div class="comment-item__content">Nam ultrices neque arcu, et varius nisi tempor at. In hac habitasse platea dictumst.</div>
                                            </div>
                                            <!-- end .comment-item -->
                                        </div>
                                        <!-- end .comments__reply -->
                                    </div>
                                    <!-- end .comment-item -->
                                    <!-- .comment-item -->
                                    <div class="comment-item">
                                        <div class="comment-item__info">
                                            <div class="comment-item__info__image-wrap">
                                                <img src="uploads/comments/sarah.jpg" alt="">
                                            </div>
                                            <div class="comment-item__info__name">Sarah Brown</div>
                                            <div class="comment-item__info__date">10 December 2014</div>
                                            <div class="comment-item__info__reply"><a class="btn btn--style3" href="blog-single.html#">Reply</a></div>
                                        </div>
                                        <div class="comment-item__content">Maecenas facilisis accumsan eros in gravida. Ut elit dui, vehicula sed lacinia non, sodales non erat. Suspendisse mollis, ex ut rhoncus imperdiet, lacus ipsum lobortis tellus, in fermentum sem lorem quis libero. Ut at ex neque. Pellentesque at quam velit. Suspendisse eleifend vestibulum justo ac ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras tempor vehicula justo, nec laoreet massa vehicula in. Suspendisse pharetra interdum dui. Phasellus interdum nisl arcu, ac fringilla ipsum interdum ac.</div>
                                    </div>
                                    <!-- end .comment-item -->
                                </div>
                                <div class="comments__pagination">
                                    <ul class="comments__pagination__list">
                                        <li><a class="comments__pagination__list__item-current" href="blog-single.html#">1</a></li>
                                        <li><a href="blog-single.html#">2</a></li>
                                        <li><a href="blog-single.html#">3</a></li>
                                    </ul>
                                </div>
                                <div class="layout-horizontal-padding">
                                    <div class="comments__form">
                                        <h3 class="comments__form__title">leave a reply</h3>
                                        <form onsubmit="return false;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input class="form__item" type="text" placeholder="name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input class="form__item" type="text" placeholder="email">
                                                </div>
                                            </div>
                                            <textarea class="form__textarea form__item" placeholder="message"></textarea>
                                            <button type="submit" class="btn btn-lg btn--style1">Post comment</button>
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