<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Sellers </a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Product Request</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Product Request</h4>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <form method="POST" action="{{route('admin.product-request-done')}}">
                                {{ csrf_field() }}

                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr><th>
                                        Sr No
                                        </th>
                                        <th>Seller ID</th>

                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Discount Price</th>
                                        <th>Coupon</th>
                                        <th>Discription</th>
                                        <th>Quantity</th>
                                        <th>Request Date</th>
                                     
                                        <th>Success</th>
                                        <th>Reject</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                

                                    <?php if(is_array($product_list) || is_object($product_list)){ ?>

                                    <?php $cnt = $product_list->perPage() * ($product_list->currentPage() - 1); ?>
                                    @foreach ($product_list as $value)
                                        <tr>
                                            <td>
                                              <?= $cnt += 1?>
                                            </td>

                                            <td> {{ $value->user->username }}</td>


                                            <td> {{ $value->product ? $value->product->productName : '' }}</td>
                                            <td> {{ currency() }}
                                                {{ $value->product ? $value->product->productPrice : '' }}</td>
                                            <td> {{ currency() }}
                                                {{ $value->product ? $value->product->productDiscountPrice : '' }}</td>
                                            <td> {{ currency() }}
                                                {{ $value->product ? $value->product->ProductCoupon : '' }}</td>
                                            <td> {{ $value->product ? $value->product->ProductDiscription : '' }}</td>
                                            <td> {{ $value->quantity }}</td>

                                            <td>{{ date('D, d M Y h:i:s a', strtotime($value->created_at)) }} </td>
                                           
                                              <td >
                                            <a href="{{ route('admin.confirm_product', ['id'=> Crypt::encrypt($value->id)]) }}" class="badge green" style="    background: green;">Approved </a></td>
                                            <td ><a href="{{route('admin.rejectProduct')}}?id={{$value->id}}" class="badge green" style="    background: red;">Reject </a>
                                            </td>

                                          

                                        </tr>
                                    @endforeach

                                    <?php }?>
                                </tbody>

                            </table>

                            <br>

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
