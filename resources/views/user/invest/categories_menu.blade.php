<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Products</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Products</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End page title -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Filter</h4>
                            <div>
                                <h5 class="font-size-14 mb-3">Category</h5>
                                <ul class="list-unstyled product-list">
                                    @foreach($categories as $category)
                                    <li><a href="javascript:void(0);" class="category-link" data-category-id="{{ $category->id }}"><i class="mdi mdi-chevron-right me-1"></i> <span class="tablist-name">{{ $category->categoryname }}</span></a></li>
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
                    </div>
                    <div class="row" id="product-list">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.category-link').click(function() {
            var categoryId = $(this).data('category-id');
            fetchProducts([categoryId]);
        });
    });

    function fetchProducts(selectedCategories) {
        if (selectedCategories.length > 0) {
            $.ajax({
                url: '{{ route("add.fatch") }}', // Update with your route
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    categories: selectedCategories
                },
                success: function(response) {
                    $('#product-list').empty(); // Clear previous products
                    $.each(response.products, function(index, product) {
                        // Append each product with its image
                        var productHtml = `
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <div class="avatar-sm product-ribbon"></div>
                                            <img src="` + product.image + `" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">` + product.productName + `</a></h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                                    <i class="bx bx-cart me-2"></i> Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>`;
                        $('#product-list').append(productHtml);
                    });
                },
                error: function(xhr) {
                    console.log('Error:', xhr);
                }
            });
        } else {
            // Hide the product list if no categories are selected
            $('#product-list').empty(); // Clear previous products
        }
    }
</script>
