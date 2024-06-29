@include('layouts.mainsite.header')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area position-relative grey-bg">
            <span class="shape-brc shape-brc__0"><img src="{{asset('')}}main/img/shape/breadcrumb.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__1"><img src="{{asset('')}}main/img/shape/shape-round.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__2"><img src="{{asset('')}}main/img/shape/shape-round.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__3"><img src="{{asset('')}}main/img/shape/shape-round-2.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__4"><img src="{{asset('')}}main/img/shape/shape-round-3.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__5"><img src="{{asset('')}}main/img/shape/shape-round-4.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__6"><img src="{{asset('')}}main/img/shape/shape-round-5.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__7"><img src="{{asset('')}}main/img/shape/shape-round-6.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__8"><img src="{{asset('')}}main/img/shape/shape-round-3.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__9"><img src="{{asset('')}}main/img/shape/shape-round-7.png" alt="shape-img"></span>
            <span class="shape-brc shape-brc__10"><img src="{{asset('')}}main/img/shape/shape-round-8.png" alt="shape-img"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <h1 class="title">contact us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <div class="contact-area section-padding--ptb_110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h2 class="contact-title">Contact <span>Form</span></h2>
                            <form id="contact-form" action="{{asset('')}}main/php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Name *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Phone *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Email *" type="text" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Subject *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Message *" name="message" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn btn__contact" type="submit">SEND MESSAGE</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="contact-info">
                            <h2 class="contact-title">Quick <span>Contact</span></h2>
                            <ul class="contact-info__inner">
                                <li>
                                    <h5 class="label">address:</h5>
                                    <p class="desc">12/30 North Ciulik, Golden park, Juilua United State Of America</p>
                                </li>
                                <li>
                                    <h5 class="label">phone:</h5>
                                    <p class="desc">+880123456789, +088012345678</p>
                                </li>
                                <li>
                                    <h5 class="label">e-mail:</h5>
                                    <p class="desc">abcd@gmail.com, example@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->

        <!-- google map start -->
        <div class="map-area section-padding--ptb_110 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="google-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.838709675939!2d144.95320007668528!3d-37.817246734238516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1670477011653!5m2!1sen!2sus" style="border:0;width:100%;height:100%;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- google map end -->
    </main>

   @include('layouts.mainsite.footer')