@include('layouts.mainsite.header')
    <main>
        <!-- hero slider section start -->
        <section class="hero-slider d-flex align-items-center">
            <span class="shape-1"><img src="{{asset('')}}main/img/shape/shape-1.png" alt="shape-img"></span>
            <span class="shape-2"><img src="{{asset('')}}main/img/shape/shape-2.png" alt="shape-img"></span>
            <span class="shape-dot-1"><img src="{{asset('')}}main/img/shape/shape-dot-1.png" alt="shape-img"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="hero-slider-content">
                            <h1 class="hero-slider-title">Makes Your Dream <span>True...</span></h1>
                            <p class="hero-slider-desc">Our products are carefully curated and designed to meet the highest standards of quality, ensuring that you always look and feel your best. From clothing and accessories to beauty products and more, we offer a wide range of products that cater to the needs of our customers. With Morsap Profitzone  White Fashion, you can trust that you're getting the best of the best.</p>
                         
                            <a class="hero-slider-btn" href="{{route('login')}}">ABOUT MORE <span>|||</span></a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-6">
                        <div class="hero-slider-thumb text-center text-lg-end">
                            <img src="{{asset('')}}main/img/slider/slider-thumb1.png" alt="slider thumb1">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero slider section end -->

        <!-- service section start -->
        <section class="service-area section-padding ptsm-0 position-relative">
            <span class="shape-3"><img src="{{asset('')}}main/img/shape/shape-3.png" alt="shape-img"></span>
            <div class="container">
                <div class="row mtn-30">
                    <!-- single service item start -->
                    <div class="col-md-4">
                        <div class="service-item text-center mt-30">
                            <div class="service-icon">
                                <img src="{{asset('')}}main/img/icon/icon-1.png" alt="icon">
                            </div>
                            <h4 class="service-title">
                                <a href="#">Email Marketing</a>
                            </h4>
                            <p>In addition to our quality products, we also offer a unique business opportunity to our customers. With our comprehensive training and support program, you'll have everything you need to build a successful business.</p>
                        </div>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item start -->
                    <div class="col-md-4">
                        <div class="service-item text-center mt-30">
                            <div class="service-icon">
                                <img src="{{asset('')}}main/img/icon/icon-2.png" alt="icon">
                            </div>
                            <h4 class="service-title">
                                <a href="#">Marketing Research</a>
                            </h4>
                            <p>Join us today and discover the Morsap Profitzone  White Fashion difference. Empower yourself with quality products and financial freedom, and start on your journey to a better life.</p>
                        </div>
                    </div>
                    <!-- single service item end -->
                    <!-- single service item start -->
                    <div class="col-md-4">
                        <div class="service-item text-center mt-30">
                            <div class="service-icon">
                                <img src="{{asset('')}}main/img/icon/icon-3.png" alt="icon">
                            </div>
                            <h4 class="service-title">
                                <a href="#">Best Product</a>
                            </h4>
                            <p>Their mission is to empower and promote growth for its end consumers. With a focus on fashion and style, the company is dedicated to helping customers look and feel their best</p>
                        </div>
                    </div>
                    <!-- single service item end -->
                </div>
            </div>
        </section>
        <!-- service section end -->

        <!-- about section start -->
        <section class="about-area position-relative section-padding--ptb_40 ptsm-0">
            <span class="shape-dot-2"><img src="{{asset('')}}main/img/shape/shape-dot-2.png" alt="shape-img"></span>
            <span class="shape-4"><img src="{{asset('')}}main/img/shape/shape-4.png" alt="shape-img"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-inner">
                            <h2 class="title">Take a Risk <br> And Keep <span>Testing...</span></h2>
                            <p>In addition to our quality products, we also offer a unique business opportunity to our customers. With our comprehensive training and support program, you'll have everything you need to build a successful business and reach your financial goals. Whether you're looking to earn extra income or build a full-time career, our business opportunity is designed to work for you.</p>
                        
                        </div>
                     
                    </div>
                    <div class="col-lg-6">
                        <div class="about-thumb text-center text-lg-end">
                            <img src="{{asset('')}}main/img/about/about.png" alt="about thumb">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- pricing section start -->
        <section class="pricing-area section-padding--ptb_120 pb-100 pbsm-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title position-relative mb-60">
                            <h2 class="title">Latest <span>Products</span></h2>
                            <h6 class="subtitle">The company's business model is based on direct selling, which allows individuals to become a part of the company as independent representatives and earn money by selling its products. The company's focus is to provide high-quality products that not only meet but exceed customer's expectations</h6>
                            <span class="shape-title">
                                <img src="{{asset('')}}main/img/shape/shape-title.png" alt="shape title">
                           </span>
                        </div>
                    </div>
                </div>
                <div class="row mtn-30">
                    <!-- single pricing item start -->


                    <?php $products = \DB::table('products')->where('activeStatus',1)->orderBy('id','DESC')->limit(6)->get();?>
                    @foreach($products as $key => $value)
                    <div class="col-md-4 mt-30">
                        <div class="pricing-item">
                            <div class="pricing-inner">
                                <div class="pricing-header">
                                    <h6 class="pricing-plan">PRIMARY</h6>
                                    <h4 class="pricing-title">{{$value->productName}}</h4>
                                </div>
                                <ul class="pricing-list">
                                    <li>{{$value->ProductDiscription}}</li>
                                 
                                </ul>
                                <div class="pricing-value">
                                    <span>&#8377; {{$value->productPrice}}</span>
                                </div>
                            </div>
                            <a  href="{{route('login')}}" class="pricing-btn">BUY NOW</a>
                        </div>
                    </div>

                    @endforeach

                
                    <!-- single pricing item end -->

                  
                </div>
            </div>
        </section>
        <!-- pricing section end -->

        <!-- video description section start -->
        <section class="video-description-area position-relative">
            <span  class="shape-5"><img src="{{asset('')}}main/img/shape/shape-5.png" alt="shape img"></span>
            <span class="shape-dot-3"><img src="{{asset('')}}main/img/shape/shape-dot-3.png" alt="shape-img"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-inner video-content">
                            <h2 class="title">Vision & Mission</span></h2>
                            <p>Morsap Profitzone  white fashion Pvt Ltd's vision is to become a leading direct selling company in the fashion and style industry, providing customers with the best products and services while empowering individuals to achieve financial and personal success.</p>
                           
                            <a class="btn btn-arrow" href="{{route('login')}}">ABOUT MORE
                                <img class="btn-arrow-primary" src="{{asset('')}}main/img/icon/shape-arrow.png" alt="btn arrow">
                                <img class="btn-arrow-secondary" src="{{asset('')}}main/img/icon/shape-arrow-hover.png" alt="btn arrow">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="video-thumb text-center text-lg-end position-relative">
                            <img src="{{asset('')}}main/img/video/video-thumb.png" alt="video thumb">
                            <div class="video-play-btn">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                                <a class="play-btn" href="#">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video description section end -->

        <!-- newsletter section start -->
        <section class="newsletter-area section-padding--ptb_110 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrapper text-center bg-secondary">
                            <h2 class="newsletter-title">STAY WITH US</h2>
                            <p class="newsletter-desc">injected humour, or randomised words which don't look even slightly believable.</p>
                            <form class="newsletter-inner">
                                <input type="text" class="text-field" placeholder="Your email...">
                                <button class="btn-newsletter">SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter section end -->

        <!-- faq section start -->
        <section class="faq-area section-padding position-relative">
            <span><img class="shape-6" src="{{asset('')}}main/img/shape/shape-6.png" alt="shape img"></span>
            <span class="shape-dot-4"><img src="{{asset('')}}main/img/shape/shape-dot-4.png" alt="shape-img"></span>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-thumb text-center text-lg-start">
                            <img src="{{asset('')}}main/img/faq/faq.png" alt="thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-inner">
                            <div class="accordion" id="general-question">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                What do you mean by best Product?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            Morsap Profitzone  white fashion Pvt Ltd's mission is to empower and promote growth for its end consumers by providing high-quality products, a direct selling business model, and excellent customer service
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">
                                                Can i use card for my online purchase?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            There are many variations of passages the majority have suffered lteration in some fo injected humour, or randomised words elievable type and scrambled it to make a type spec book. It has survived not only five centuries.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree">
                                                How to edit my order?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            There are many variations of passages the majority have suffered lteration in some fo injected humour, or randomised words elievable type and scrambled it to make a type spec book. It has survived not only five centuries.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour">
                                                How to pay online for shopping?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly azer duskam believable.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive">
                                                When i can expect my order?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly azer duskam believable.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h5 class="mb-0">
                                            <button class="accordio-heading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-controls="collapseSix">
                                               Can i refund the Products?
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-bs-parent="#general-question">
                                        <div class="card-body">
                                            Suffered alteration in some form, by injected humour, or randomised words which don't look even slightly azer duskam believable.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq section end -->

        <!-- latest news section start -->
        <section class="latest-news-area pb-100 position-relative">
            <span class="shape-7"><img src="{{asset('')}}main/img/shape/shape-7.png" alt="shape img"></span>
            <span class="shape-dot-5"><img src="{{asset('')}}main/img/shape/shape-dot-5.png" alt="shape-img"></span>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header d-flex justify-content-between align-items-center">
                            <div class="section-title position-relative mb-60">
                                <h2 class="title">Latest <span>News</span></h2>
                                <h6 class="subtitle">looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution of agency, as opposed</h6>
                                <span class="shape-title">
                                    <img src="{{asset('')}}main/img/shape/shape-title.png" alt="shape title">
                                </span>
                            </div>
                            <div class="slick-append slick-arrow-style d-flex"></div>
                        </div>
                    </div>
                </div>
                <div class="blog-post-carousel slick-shadow slick-row-15">
                    <!-- blog single item start -->
                    <div class="col">
                        <div class="blog-post">
                            <div class="blog-post__content">
                                <h4 class="blog-title">
                                    <a href="blog-details.html">International activities of the online world</a>
                                </h4>
                                <p class="blog-desc">We are proud to announce the very first edition of the frankfurt news We are proud to announce</p>
                                <div class="blog-meta d-flex justify-content-between">
                                    <div class="date">
                                        <a href="#">Dec 07, 23</a>
                                    </div>
                                    <ul class="blog-meta-action">
                                        <li><a href="#"><i class="fa fa-heart-o"></i>32</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>17</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->

                    <!-- blog single item start -->
                    <div class="col">
                        <div class="blog-post">
                            <div class="blog-post__content">
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Themoment necessary of the online world charity</a>
                                </h4>
                                <p class="blog-desc">We are proud to announce the very first edition of the frankfurt news We are proud to announce</p>
                                <div class="blog-meta d-flex justify-content-between">
                                    <div class="date">
                                        <a href="#">Jan 14, 23</a>
                                    </div>
                                    <ul class="blog-meta-action">
                                        <li><a href="#"><i class="fa fa-heart-o"></i>18</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>36</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->

                    <!-- blog single item start -->
                    <div class="col">
                        <div class="blog-post">
                            <div class="blog-post__content">
                                <h4 class="blog-title">
                                    <a href="blog-details.html">Occasionally ocean of the online world content</a>
                                </h4>
                                <p class="blog-desc">We are proud to announce the very first edition of the frankfurt news We are proud to announce</p>
                                <div class="blog-meta d-flex justify-content-between">
                                    <div class="date">
                                        <a href="#">Feb 20, 23</a>
                                    </div>
                                    <ul class="blog-meta-action">
                                        <li><a href="#"><i class="fa fa-heart-o"></i>40</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>65</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->

                    <!-- blog single item start -->
                    <div class="col">
                        <div class="blog-post">
                            <div class="blog-post__content">
                                <h4 class="blog-title"><a href="blog-details.html">International activities of the online world</a></h4>
                                <p class="blog-desc">We are proud to announce the very first edition of the frankfurt news We are proud to announce</p>
                                <div class="blog-meta d-flex justify-content-between">
                                    <div class="date">
                                        <a href="#">Feb 20, 23</a>
                                    </div>
                                    <ul class="blog-meta-action">
                                        <li><a href="#"><i class="fa fa-heart-o"></i>40</a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i>65</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog single item end -->
                </div>
            </div>
        </section>
        <!-- latest news section end -->
    </main>
@include('layouts.mainsite.footer')