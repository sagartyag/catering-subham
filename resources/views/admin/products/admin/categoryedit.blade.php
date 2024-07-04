
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Category</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Category</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Category
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.editcategory') }}" method="POST">
                                     {{ csrf_field() }}

                                     <input  type="hidden" name="id"
                                       value="{{ $product ? $product->id : '0' }}"
                                       >
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Category Status</label>
                                              
                                                <select class="form-control" id="inputEmail3" placeholder="Category Status" type="text" value="{{$product->status}}" name="status">
                    <option value="0">On</option>
                    <option value="1">Off</option>
                </select>
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
     