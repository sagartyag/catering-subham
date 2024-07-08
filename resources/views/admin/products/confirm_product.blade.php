   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">Product</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">Add Product</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-8 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Add Product</h4>
                       </div>
                       <div class="card-body">

                           <form action="{{ route('admin.approvedProduct') }}" method="POST">

                               {{ csrf_field() }}

                               <div class="table-responsive" id="cart">
                                   <table class="table align-middle mb-0 table-nowrap">
                                       <thead class="table-light" #cart>
                                           <tr>
                                               <th>Product</th>
                                               <th>Product Desc</th>
                                               <th>Price</th>
                                               <th>Discount Price</th>
                                               <th>Coupon</th>
                                               <th>Quantity</th>
                                               <th colspan="2">Total</th>
                                           </tr>
                                       </thead>
                                       <tbody>

                                       </tbody>
                                   </table>
                               </div>
                               <div class="row mt-4">
                                   <div class="col-sm-6">
                                       <a href="{{ route('admin.product-request') }}" class="btn btn-secondary">
                                           <i class="mdi mdi-arrow-left me-1"></i> Back </a>
                                   </div> <!-- end col -->

                               </div> <!-- end row-->
                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Order Summary</h4>
                       </div>
                       <div class="card-body">

                          
                           <input type="hidden" name="product_id" value="{{ @$product->id }}">
                           <div class="table-responsive">
                               <table class="table mb-0">
                                   <tbody>
                                       <tr>
                                           <td>Grand Total :</td>
                                           <td> <span id="grandTotal">0</span></td>
                                       </tr>
                                       <tr>
                                           <td>Discount : </td>
                                           <td>- <span id="DiscountTotal">0</span></td>
                                       </tr>
                                       <tr>
                                           <td>Coupon : </td>
                                           <td>- <span id="CouponTotal">0</span></td>
                                       </tr>
                                       <tr>
                                           <th>Total :</th>
                                           <th><span id="cartTotal"></span></th>
                                       </tr>
                                   </tbody>




                               </table>
                           </div>
                          
                           <div class="row mt-4">
                               <div class="col-sm-4">
                                   <input type="hidden" name="cartTotal" class="cartTotal">
                                   <input type="hidden" name="grandTotal" class="grandTotal">
                                   <input type="hidden" name="DiscountTotal" class="DiscountTotal">
                                   <input type="hidden" name="CouponTotal" class="CouponTotal">
                               </div>
                               <div class="col-sm-4">
                                   <div class="text-sm-end mt-2 mt-sm-0">
                                       <button type="submit" class="btn btn-success">
                                           <i class="mdi mdi-cart-arrow-right me-1"></i> Confirm </button>
                                   </div>
                               </div> <!-- end col -->
                               <div class="col-sm-4">
                               </div>
                            </form>
                           </div> <!-- end row-->
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>
   <!--**********************************
                 Content body end
             ***********************************-->

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
    // Cart array to store items
    var cart = [];

    // Add item to cart
    function addToCart(product, productDescription, price, DiscountPrice, coupon, product_id, balanceQuantity, quantity) {
        var item = {
            product: product,
            productDescription: productDescription,
            price: price,
            DiscountPrice: DiscountPrice,
            coupon: coupon,
            product_id: product_id,
            balanceQuantity: balanceQuantity,
            quantity: quantity
        };

        // Check if item already exists in cart
        var existingItem = cart.find(function(element) {
            return element.product_id === product_id;
        });

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push(item);
        }

        updateCart();
    }

    // Remove item from cart
    function removeFromCart(product_id) {
        cart = cart.filter(function(element) {
            return element.product_id !== product_id;
        });

        updateCart();
    }

    // Update item quantity
    function updateQuantity(product_id, quantity) {
        var item = cart.find(function(element) {
            return element.product_id === product_id;
        });

        if (item) {
            item.quantity = quantity;
        }

        updateCart();
    }

    // Update the cart display
    function updateCart() {
        var cartTable = $('#cart tbody');
        cartTable.empty();

        var total = 0;
        var grandTotal = 0;
        var DiscountTotal = 0;
        var coupon = 0;

        cart.forEach(function(item) {
            var totalPrice = (item.DiscountPrice * item.quantity) - item.coupon;
            var grandPrice = item.price * item.quantity;
            var couponValue = item.coupon;
            var discount = grandPrice - totalPrice;
            total += totalPrice;
            grandTotal += grandPrice;
            DiscountTotal += discount;
            coupon += couponValue;

            var row = $('<tr>');
            row.append('<td><input type="hidden" name="products[]" value="' + item.product_id +
                '"> ' + item.product + '</td>');
            row.append('<td>' + item.productDescription + '</td>');
            row.append('<td>&#8377; ' + item.price + '</td>');
            row.append('<td>&#8377; ' + item.DiscountPrice + '</td>');
            row.append('<td>&#8377; ' + item.coupon + '</td>');
            row.append(
                '<td><div class="me-3" style="width: 120px;"><input type="number" min="1" value="' +
                item.quantity + '" data-product_id="' + item.product_id +
                '" class="form-control" name="quantity[]"></div></td>');
            row.append('<td>&#8377;' + totalPrice.toFixed(2) + '</td>');
            row.append(
                '<td><a href="javascript:void(0);" class="action-icon text-danger remove" data-product_id="' +
                item.product_id + '"> <i class="mdi mdi-trash-can font-size-18"></i></a> </td>');

            cartTable.append(row);
        });
        $('#cartTotal').text('₹' + total.toFixed(2));
        $('#grandTotal').text('₹' + grandTotal.toFixed(2));
        $('#DiscountTotal').text('₹' + DiscountTotal.toFixed(2));
        $('#CouponTotal').text('₹' + coupon.toFixed(2));
        $('.cartTotal').val(total.toFixed(2));
        $('.grandTotal').val(grandTotal.toFixed(2));
        $('.DiscountTotal').val(DiscountTotal.toFixed(2));
        $('.CouponTotal').val(coupon.toFixed(2));
    }

    // Event handlers
    $('#cart').on('change', 'input[type="number"]', function() {
        var product_id = $(this).data('product_id');
        var quantity = parseInt($(this).val());

        updateQuantity(product_id, quantity);
    });

    $('#cart').on('click', '.remove', function() {
        var product_id = $(this).data('product_id');

        removeFromCart(product_id);
    });

    @foreach($products as $product)
    addToCart(
        '{{ $product->product->productName }}',
        '{{ $product->product->ProductDescription }}',
        {{ $product->product->productPrice }},
        {{ $product->product->productDiscountPrice }},
        {{ $product->product->ProductCoupon }},
        {{ $product->product->id }},
        0,
        {{ $product->quantity }}
    );
    @endforeach
});

</script>


