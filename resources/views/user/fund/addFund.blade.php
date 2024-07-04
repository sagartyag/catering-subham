

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
                                <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                        <li class="breadcrumb-item active">Add Product</li>
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

                                    <h4 class="card-title">Add Product</h4>
                                    <p class="card-title-desc">Fill all information below</p>

                                    <form action="{{ route('user.SubmitBuyFund') }}" method="POST" enctype="multipart/form-data">

                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="productname">Seller ID</label>
                                                    <input id="productname" readonly name="user_id" type="text"
                                                        class="form-control" value="{{Auth::user()->username}}" placeholder="Customer ID">
                                                </div>
                                             
                                            </div>
                                            

                                            <div class="col-sm-12">
                                             
                                                <div class="mb-3">
                                                    <label class="control-label">Products</label>

                                                    <select class="select2 form-control select2-multiple"
                                                        multiple="multiple"  name="products" data-placeholder="Choose ...">
                                                        <?php if(is_array($product) || is_object($product)){
                                                            
                                                         
                                                            ?>

                                                        @foreach ($product as $log)
                                                        <option value="{{$log->id}}">{{$log->productName}}</option>
                                                          
                                                         @endforeach

                                                         <?php }?>
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

  