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
                        <h4 class="mb-sm-0 font-size-18">Add Vendor Product</h4>

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

                            <form action="{{ route('user.agentActivation') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="seller_id">Seller ID</label>
                                            <input id="seller_id" readonly name="user_id" type="text"
                                                class="form-control" value="{{ Auth::user()->username }}" placeholder="Customer ID">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="name">Name</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="address">Address</label>
                                            <input id="address" name="address" type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="category_id" class="control-label">Category</label>
                                            <select id="category_id" class="select2 form-control select2-multiple" name="categories[]"
                                                multiple="multiple" data-placeholder="Choose ..." onchange="fetchProducts()">
                                                @foreach($categoryname as $log)
                                                    <option value="{{ $log->id }}">{{ $log->categoryname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="product_id" class="control-label">Product</label>
                                            <select id="product_id" class="select2 form-control select2-multiple" name="products[]"
                                                multiple="multiple" data-placeholder="Choose ...">
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
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
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    function fetchProducts() {
    var selectedCategories = $('#category_id').val();

    if (selectedCategories && selectedCategories.length > 0) {
        $.ajax({
            url: '/user/addagent', // Correct URL for the endpoint
            type: 'POST', // Use POST method
            data: { categoryIds: selectedCategories.join(',') },
            dataType: 'json',
            success: function(data) {
                let productsSelect = $('#product_id');
                productsSelect.empty(); 
                $.each(data, function(index, product) {
                    productsSelect.append('<option value="' + product.id + '">' + product.productName + '</option>');
                });
                productsSelect.trigger('change');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    } else {
        $('#product_id').empty(); // Clear products dropdown if no category selected
    }
}

</script>
