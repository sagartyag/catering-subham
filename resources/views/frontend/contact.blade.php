@include('layouts.frontend.header')

<div class="rac_inr_pages_banner rac_contact_banner">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_page_title">
            <h1>Contact Us</h1>
            <div class="rac_breadcrumbs">
              <a href="index.html">Home</a>
              <span>/</span>
              <p>Contact Us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rac_section rac_about_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_about_content">
            <div class="rac_about_box">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="rac_about_img">
                    <img src="main/images/about_img.webp" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="rac_about_text">
                    <h3>Contact Lalji Caterers</h3>
                    <p>
                      Thank you for considering Lalji Caterers for your upcoming event. Whether you're planning
                      a wedding, corporate gathering, or special celebration in Akola, Maharashtra, we are here to
                      cater to your needs with our exceptional culinary services.
                     </p>
                    <p>
                      Have questions or ready to discuss your event? Please feel free to contact us via phone, email,
                      or by filling out the contact form below. Our dedicated team will respond promptly to ensure
                      your event planning experience with Lalji Caterers is seamless and enjoyable.
                                          </p>
                  </div>
                  <div class="rac_about_bottom">
                    
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner Pages Banner Section End -->
  <!-- Book Us Section Start -->
  <div class="rac_section rac_booking_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="rac_section_heading">
            <h5>Book Us</h5>
            <h3>Where You Want Our Services</h3>
          </div>
        </div>
        <div class="col-12">
          <div class="rac_booking_content">
            <div class="row">
              <div class="col-lg-7">
                <div class="rac_booking_box">
                  <form>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="full_name">Your Name</label>
                          <input type="text" placeholder="Your Email Here.." autocomplete="off" name="full_name" id="full_name" class="require">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="email">Your Email</label>
                          <input type="email" placeholder="Your Email Here.." autocomplete="off" name="email" id="email" class="require" data-valid="email" data-error="Email should be valid.">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="subject">Subject</label>
                          <input type="text" placeholder="Subject Here.." name="subject" id="subject" class="require" autocomplete="off"/>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="date">Date</label>
                          <input type="date" id="date" name="date" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="country">Select Country</label>
                          <span>
                            <select name="country" id="country">
                              <option selected disabled value="">Country Here..</option>
                              <option value="country1">Country1</option>
                              <option value="country2">Country2</option>
                              <option value="country3">Country3</option>
                              <option value="country4">Country4</option>
                            </select>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="city">Select City</label>
                          <span>
                            <select name="city" id="city">
                              <option selected disabled value="">City Here..</option>
                              <option value="city1">City1</option>
                              <option value="city2">City2</option>
                              <option value="city3">City3</option>
                              <option value="city4">City4</option>
                            </select>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="place">Select Place</label>
                          <span>
                            <select name="place" id="place">
                              <option selected disabled value="">Place Here..</option>
                              <option value="place1">Place1</option>
                              <option value="place2">Place2</option>
                              <option value="place3">Place3</option>
                              <option value="place4">Place4</option>
                            </select>
                          </span>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="rac_form_input">
                          <label for="people">No. of People</label>
                          <span>
                            <select name="people" id="people">
                              <option selected disabled value="">People Here..</option>
                              <option value="people1">1</option>
                              <option value="people2">2</option>
                              <option value="people3">3</option>
                              <option value="people4">4</option>
                            </select>
                          </span>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="rac_form_input">
                          <label for="message">Your Message</label>
                          <textarea name="message" id="message" class="require" placeholder="Your Message Here.." autocomplete="off"></textarea>
                        </div>
                        <div class="response"></div>
                      </div>

                      <div class="col-12">
                        <div class="rac_form_btn">
                          <button type="button" class="rac_btn submitForm">Send Request</button>
                        </div>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="rac_booking_img">
                  <img src="main/images/booking_img.webp" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Book Us Section End -->
  <!-- Map Section Start -->
  <div class="rac_map_wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="rac_map_content">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10390.586844541494!2d76.04834779555189!3d22.963952478203076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3963172b725b9649%3A0xca9958ddaa36af60!2sPixelNX!5e0!3m2!1sen!2sin!4v1710943150690!5m2!1sen!2sin" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.frontend.footer')
