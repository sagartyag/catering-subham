            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Products</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li> -->
                                            <li class="breadcrumb-item active">Products</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Filter</h4>

                                        <div>
                                            <h5 class="font-size-14 mb-3">Category</h5>
                                            <ul class="list-unstyled product-list">
                                                @foreach($categories as $category)
                                                <li><a href="javascript: void(0);"><i class="mdi mdi-chevron-right me-1"></i> <span class="tablist-name">{{ $category->categoryname }}</span></a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                      

                                       
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-9">
                                    
                                <div class="row mb-3">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="mt-2">
                                            <h5>Menu</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-sm-6">
                                        <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                                            <div class="search-box me-2">
                                                <!-- <div class="position-relative">
                                                    <input type="text" class="form-control border-0" id="searchProductList" autocomplete="off" placeholder="Search...">
                                                    <i class="bx bx-search-alt search-icon"></i>
                                                </div> -->
                                            </div>
                                            <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> GO to cart
                                                                </button>
</div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row" id="product-list">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <div class="avatar-sm product-ribbon">
                                                        
                                                    </div>
                                                    <img src="assets/images/product/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-shirt </a></h5>
                                                    
                                                    
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button>
</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <img src="assets/images/product/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Light blue T-shirt</a></h5>
                                                    
                                                    
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <div class="avatar-sm product-ribbon">
                                                        <!-- <span class="avatar-title rounded-circle  bg-primary">
                                                            - 20 %
                                                        </span> -->
                                                    </div>
                                                    <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Black Color T-shirt</a></h5>
                                                    
                                                    
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button>
</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Hoodie (Blue)</a></h5>
                                                    
                                                    
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                
                                                <div class="product-img position-relative">
                                                    <div class="avatar-sm product-ribbon">
                                                        <!-- <span class="avatar-title rounded-circle  bg-primary">
                                                            - 22 %
                                                        </span> -->
                                                    </div>
                                                    <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-Shirt</a></h5>
                                                    
                                                   
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">
                                                    <div class="avatar-sm product-ribbon">
                                                        <!-- <span class="avatar-title rounded-circle bg-primary">
                                                            - 28 %
                                                        </span> -->
                                                    </div>
                                                    <img src="assets/images/product/img-6.png" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Green color T-shirt</a></h5>
                                                    
                                                    
                                                    <div class="text-center">
                                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                                </button></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                