
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | {{siteName()}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('')}}assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">{{siteName()}}</h5>
                                            <p>Get your free Skote account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{asset('')}}assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{asset('')}}main/img/logo.png" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form class="needs-validation" novalidate method="POST" action="{{ route('registers') }}">
                                        {{ csrf_field() }}
                                        @php
                                        $sponsor = @$_GET['ref'];
                                        $name = \App\Models\User::where('username', $sponsor)->first();
                                        @endphp
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Sponsor ID</label>
                                            <input type="text" class="form-control check_sponsor_exist" value="{{($sponsor)?$sponsor:''}}" data-response="sponsor_res" name="sponsor" required placeholder="Sponsor ID">  
                                            <div class="invalid-feedback"> 
                                                Please Sponsor ID 
                                            </div>  
                                            <span id="sponsor_res"></span>    
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}" required placeholder="Your Name">
                                            <div class="invalid-feedback">
                                                Please Enter Name
                                            </div>  
                                        </div>

                                        <!--<div class="mb-3">-->
                                        <!--    <label for="email" class="form-label">Your Email</label>-->
                                        <!--    <input type="email" class="form-control" name="email" value="{{old('email')}}" required placeholder="Your Email ID">-->
                                        <!--    <div class="invalid-feedback">-->
                                        <!--        Please Enter Email ID-->
                                        <!--    </div>  -->
                                        <!--</div>-->
                
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Your Mobile No</label>
                                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" required placeholder="Your Mobile No">
                                            <div class="invalid-feedback">
                                                Please Enter Mobile No
                                            </div>  
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>       
                                        </div>
                    
                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign up using</h5>
            
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the {{siteName()}} <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>Already have an account ? <a href="{{route('login')}}" class="fw-medium text-primary"> Login</a> </p>
                                <p>© <script>document.write(new Date().getFullYear())</script> {{siteName()}}. Crafted with <i class="mdi mdi-heart text-danger"></i> by www.morsapprofitzone.com</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('partials.notify')
        <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
        <script>
    
            $('.check_sponsor_exist').keyup(function(e) {
                var ths = $(this);
                var res_area = $(ths).attr('data-response');
                var sponsor = $(this).val();
                // alert(sponsor); 
                $.ajax({
                    type: "POST"
                    , url: "{{ route('getUserName') }}"
                    , data: {
                        "user_id": sponsor
                        , "_token": "{{ csrf_token() }}"
                    , }
                    , success: function(response) {
                        // alert(response);      
                        if (response != 1) {
                            // alert("hh");
                            $(".submit-btn").prop("disabled", false);
                            $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                                .css('margin-buttom', '10px');
                        } else {
                            // alert("hi");
                            $(".submit-btn").prop("disabled", true);
                            $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                                'margin-buttom', '10px');
                        }
                    }
                });
            });
    
        </script>
    
        <!-- JAVASCRIPT -->
        <script src="{{asset('')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{asset('')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('')}}assets/libs/node-waves/waves.min.js"></script>

        <!-- validation init -->
        <script src="{{asset('')}}assets/js/pages/validation.init.js"></script>
        
        <!-- App js -->
        <script src="{{asset('')}}assets/js/app.js"></script>

    </body>
</html>
