@include('layouts.frontend.header')

<!-- Inner Pages Banner Section Start -->
<div class="rac_inr_pages_banner rac_menu_banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_page_title">
            <h1>Menus</h1>
            <div class="rac_breadcrumbs">
              <a href="index.html">Home</a>
              <span>/</span>
              <p>Menus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner Pages Banner Section End -->
  <!-- Menu Section Start -->
  <div class="rac_section rac_menu_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_section_heading">
            <h5>Our Menu</h5>
            <h3>Most Popular Food In The World</h3>
          </div>
        </div>
        <div class="col-12">
          <ul class="rac_menu_tab">
              @foreach($categories as $category)
                  <li>
                      <a class="rac_btn category-tab" data-category-id="{{ $category->id }}" href="javascript:void(0)">{{ $category->categoryname }}</a>
                  </li>
              @endforeach
          </ul>
      </div>
      
        <div class="col-12">
          <!-- Starter Tab -->
          <div class="rac_tab_pane" id="tab-1" style="display:block;">
            <div class="row" id="product-list">
                @foreach($products as $product)
                    <div class="col-sm-6 product-item" data-category-id="{{ $product->category_id }}">
                        <div class="rac_menu_box">
                            <div class="rac_menu_img">
                                <img src="{{ asset($product->image) }}" class="img-fluid" style="width:100px;;">
                            </div>
                            <div class="rac_menu_text">
                                <div class="rac_menu_title">
                                    <h4>{{ $product->productName }}</h4>
                                    <!-- <h2>$ {{ $product->productPrice }}</h2> -->
                                </div>
                                <p>{{ $product->ProductDiscription }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- Menu Section End -->
  <!-- Offer Zone Section Start -->
  <div class="rac_section rac_offer_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_section_heading">
            <h5>Offer Zone</h5>
            <h3>Popular Dishes Of Our Caterers</h3>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rac_offer_box">
            <div class="rac_offer_img">
              <img src="main/images/ofr-1.webp" class="img-fluid">
            </div>
            <div class="rac_offer_content">
              <div class="rac_offer_text">
                <h4>Delicious Sweets</h4>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.</p>
              </div>
              <div class="rac_offer_btm">
                <div class="rac_offer_rating">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                </div>
                <div class="rac_offer_price">
                  <h4><del>$ 42</del></h4>
                  <h4>$ 32</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rac_offer_box">
            <div class="rac_offer_img">
              <img src="main/images/ofr-2.webp" class="img-fluid">
            </div>
            <div class="rac_offer_content">
              <div class="rac_offer_text">
                <h4>Sandwich</h4>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.</p>
              </div>
              <div class="rac_offer_btm">
                <div class="rac_offer_rating">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star1.svg">
                  <img src="main/images/star2.svg">
                </div>
                <div class="rac_offer_price">
                  <h4><del>$ 36</del></h4>
                  <h4>$ 28</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rac_offer_box">
            <div class="rac_offer_img">
              <img src="main/images/ofr-3.webp" class="img-fluid">
            </div>
            <div class="rac_offer_content">
              <div class="rac_offer_text">
                <h4>Italian Source Mushroom</h4>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.</p>
              </div>
              <div class="rac_offer_btm">
                <div class="rac_offer_rating">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star2.svg">
                </div>
                <div class="rac_offer_price">
                  <h4><del>$ 32</del></h4>
                  <h4>$ 22</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rac_offer_box">
            <div class="rac_offer_img">
              <img src="main/images/ofr-4.webp" class="img-fluid">
            </div>
            <div class="rac_offer_content">
              <div class="rac_offer_text">
                <h4>Barberton Chicken</h4>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim.</p>
              </div>
              <div class="rac_offer_btm">
                <div class="rac_offer_rating">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star.svg">
                  <img src="main/images/star1.svg">
                </div>
                <div class="rac_offer_price">
                  <h4><del>$ 52</del></h4>
                  <h4>$ 42</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Offer Zone Section Start -->
  <!-- Testimonials Section Start -->
  <div class="rac_section rac_testimonial_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_section_heading">
            <h5>Our Testimonials</h5>
            <h3>What Our Customers Says!</h3>
          </div>
        </div>
        <div class="col-12">
          <div class="rac_testimonial_slider">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="rac_testimonial_slide">
                    <div class="rac_testimonial_box">
                      <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Duis aute irure dolor in reprehenderit in voluptate</p>
                      <div class="rac_testi_btm">
                        <div class="rac_testi_user">
                          <img src="main/images/testi1.webp" class="img-fluid">
                          <div class="rac_testi_user_info">
                            <h6>Leslie Alexander</h6>
                            <p>Decoration Chef</p>
                          </div>
                        </div>
                        <div class="rac_testi_rating">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star2.svg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="rac_testimonial_slide">
                    <div class="rac_testimonial_box">
                      <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Duis aute irure dolor in reprehenderit in voluptate</p>
                      <div class="rac_testi_btm">
                        <div class="rac_testi_user">
                          <img src="main/images/testi1.webp" class="img-fluid">
                          <div class="rac_testi_user_info">
                            <h6>Leslie Alexander</h6>
                            <p>Decoration Chef</p>
                          </div>
                        </div>
                        <div class="rac_testi_rating">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star2.svg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="rac_testimonial_slide">
                    <div class="rac_testimonial_box">
                      <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Duis aute irure dolor in reprehenderit in voluptate</p>
                      <div class="rac_testi_btm">
                        <div class="rac_testi_user">
                          <img src="main/images/testi1.webp" class="img-fluid">
                          <div class="rac_testi_user_info">
                            <h6>Leslie Alexander</h6>
                            <p>Decoration Chef</p>
                          </div>
                        </div>
                        <div class="rac_testi_rating">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star.svg">
                          <img src="main/images/star2.svg">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var initialCategoryId = 1; // Set the initial category ID here

        // Filter products based on initial category ID
        $('.product-item').each(function() {
            var productCategoryId = $(this).data('category-id');
            if (productCategoryId != initialCategoryId) {
                $(this).show();
            }
        });

        $('.category-tab').on('click', function() {
            var categoryId = $(this).data('category-id');

            // Show all products initially
            $('.product-item').hide();

            // Filter products based on category
            $('.product-item').each(function() {
                var productCategoryId = $(this).data('category-id');
                if (categoryId == 'all' || productCategoryId == categoryId) {
                    $(this).show();
                }
            });
        });
    });
</script>

  @include('layouts.frontend.footer')
