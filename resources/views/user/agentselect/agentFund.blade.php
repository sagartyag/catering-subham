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
                        <h4 class="mb-sm-0 font-size-18">Billing Details</h4>

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
                                            <label for="name">Customer Name</label>
                                            <input id="name" name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="seller_id">Phone</label>
                                            <input id="seller_id"  name="phone" type="number"
                                                class="form-control"  placeholder="Phone">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Initially hide the product select box
        $('#product_id').parent().hide();
    });

    function fetchProducts() {
        var selectedCategories = $('#category_id').val();
        
        if (selectedCategories.length > 0) {
            $('#product_id').parent().show();
            $.ajax({
                url: '{{route("fetch.products")}}', // Update with your route
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    categories: selectedCategories
                },
                success: function(response) {
                    $('#product_id').empty(); // Clear previous options
                    $.each(response.products, function(index, product) {
                        $('#product_id').append('<option value="' + product.id + '">' + product.name + '</option>');
                    });
                },
                error: function(xhr) {
                    console.log('Error:', xhr);
                }
            });
        } else {
            // Hide the product select box if no categories are selected
            $('#product_id').parent().hide();
            $('#product_id').empty(); // Clear previous options
        }
    }
</script>