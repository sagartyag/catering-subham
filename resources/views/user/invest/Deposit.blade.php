

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Billings</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Buy product</a></li>
                                        <li class="breadcrumb-item active">Billings</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Billings Information</h4>
                                    <p class="card-title-desc">Fill all information below</p>

                                    <form method="POST" action="{{route('user.ecommerce_cart')}}">

                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productname">Customer ID</label>
                                                    <input id="productname" name="user_id" type="text"
                                                        class="form-control check_sponsor_exist" data-response="username_res"  placeholder="Customer ID">
                                                    <span id="username_res"></span>
                                                </div>
                                             
                                            </div>

                                            <div class="col-sm-12">
                                             
                                                <div class="mb-3">
                                                    <label class="control-label">Products</label>

                                                    <select class="select2 form-control select2-multiple"
                                                        multiple="multiple" name="products[]" data-placeholder="Choose ...">

                                                        @foreach ($product as $log)
                                                        <option value="{{$log->product_id}}">{{$log->product?$log->product->productName:"No Products Found"}}</option>
                                                          
                                                         @endforeach

                                                       
                                                    </select>

                                                </div>
                                             

                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            <button type="button"
                                                class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                       

                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

  
            <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
            <script>
                function amtValue() {
                    var amt = document.getElementById('PACKAGE_AMT').value;
                    if (amt % 20 == 0) {
                        return true;
                    } else {
                        alert('Please enter valid amount Multiple of Rs. 20  ');
                        return false;
                    }
                }
        
        
        
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
                                $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                                    'margin-buttom', '10px');
                            }
                        }
                    });
                });
        
                function copyFunctionwallet(inputID) {
        
                    var copyText = document.getElementById("wallet-address");
        
                    copyText.select();
        
                    document.execCommand("copy");
                    $(".copyToClipboard").html("Copied");
        
                    }
        
        
            </script>
        