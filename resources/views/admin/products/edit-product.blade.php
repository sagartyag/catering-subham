   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a  href="{{route('admin.productList')}}" class="btn btn-primary"> <i class="fa fa-arrow-left"></i> </a> </li>
                        
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Product</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.editProduct') }}" method="POST" enctype="multipart/form-data">
                                     {{ csrf_field() }}

                                     <input  type="hidden" name="id"
                                       value="{{ $product ? $product->id : '0' }}"
                                       >

                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Name</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Name" value="{{$product->productName}}" type="text" name="productName">
                                            </div>
     
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Price</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Price" value="{{$product->productPrice}}" type="number" name="productPrice">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Discount Price</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Discount Price" value="{{$product->productDiscountPrice}}" type="text" name="productDiscountPrice">
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Coupon</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Product Coupon" value="{{$product->ProductCoupon}}" type="text" name="ProductCoupon">
                                            </div>
                                             <div class="mb-3 col-md-12">
                                                <label class="form-label">Image</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Image" value="{{$product->image}}" type="file" name="image">
                                            </div>


                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Product Discription</label>
                                              
                                                <textarea name="ProductDiscription" class="form-control" > {{$product->ProductDiscription}}</textarea>
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
     