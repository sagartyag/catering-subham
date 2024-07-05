   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Vendor Product</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Vendor Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.vendor_product') }}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Name</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Name" type="text" name="productName">
                                            </div>
     
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Price</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Price" type="number" name="productPrice">
                                            </div>
                                          
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Discount Price</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Discount Price" type="text" name="productDiscountPrice">
                                            </div>
                               


                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Discription</label>
                                              
                                                <textarea name="ProductDiscription" class="form-control" ></textarea>
                                            </div>               
                                        </div>
     
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
     
     
     
     
                </div>
            </div>
        </div>
        <!--**********************************
                 Content body end
             ***********************************-->
     