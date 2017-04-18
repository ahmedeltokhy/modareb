  <div class="layout-container-main layout-container-width">
                <!-- .layout-content -->
                <div class="layout-content">
                    <section class="page-contact">
                        <div class="layout-title-wrapper layout-row">
                            <h1 class="layout-title layout-container-width layout-container">contact.
                                <span class="layout-title__subtitle">Wanna talk to me?</span>
                            </h1>
                        </div>
                        <div class="layout-row">
                            <div id="savvyMapCanvas" class="google-map--contact"></div>
                        </div>
                        <!-- #contactForm -->
                        <form action="http://oleg.dev/savvy/www/mail/fake.js" id="contactForm" method="post" class="layout-horizontal-padding">
                            <div class="row">
                                <div class="col-md-6">
                                    <input name="name" class="form__item" type="text" placeholder="name">
                                    <div class="form__item__failed-wrap"></div>
                                </div>
                                <div class="col-md-6">
                                    <input name="email" class="form__item" type="text" placeholder="email">
                                    <div class="form__item__failed-wrap"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="msg" class="form__textarea form__item" placeholder="message"></textarea>
                                    <div class="form__item__failed-wrap"></div>
                                    <div class="form__status"></div>
                                    <button type="submit" class="btn btn-lg btn--style1">Send message</button>
                                </div>
                            </div>
                        </form>
                        <!-- end #contactForm -->
                        <div class="layout-horizontal-padding--clean"></div>
                        <div class="layout-horizontal-padding">
                            <ul class="contact-info">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <span><?=$data->Email?></span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span><?=$data->Phone?></span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span><?=$data->address?></span>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <!-- end .layout-content -->
                <div class="footer--bottom layout-row">
                    <p class="footer__copyright">&copy; Rossi, 2015. All rights reserved.</p>
                </div>
            </div>