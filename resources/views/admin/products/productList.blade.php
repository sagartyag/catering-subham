

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Products </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Product Report</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product Report</h4>
                            </div>
                            <div class="card-body">

                                
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                          <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Name</th>
                                              
                                                <th>Price</th>
                                                <th>Discount Price</th>
                                                <!--<th>Coupon</th>-->
                                                <th>Discription</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($product_list) || is_object($product_list)){ ?>

                                                <?php $cnt =$product_list->perPage() * ($product_list->currentPage() - 1); ?>
                                                @foreach($product_list as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1?></td>
                    
                                                        <td> {{$value->productName}}</td>
                                                      
                                                        <td> {{currency()}} {{$value->productPrice}}</td>
                                                        <td> {{currency()}}  {{$value->productDiscountPrice}}</td>
                                                        <!--<td> {{currency()}}  {{$value->ProductCoupon}}</td>-->
                                                        <td>  {{$value->ProductDiscription}}</td>
                                                      
                    
                                                        <td ><span class="badge bg-{{ $value->activeStatus == 1 ? 'success' : 'danger' }}">{{($value->activeStatus)?'Active':'Pending'}}</span></td>
                                                  <td><a  href="{{ route('admin.edit-product', ['id'=> Crypt::encrypt($value->id)]) }}" class="btn btn-primary"> <i class="fas fa-edit"></i> </a> <a href="{{route('admin.deleteProduct')}}?id={{$value->id}}" class="btn btn-primary"> <i class="fas fa-trash"></i> </a></td>
                    
                                                       
                                                    </tr>
                                                @endforeach
                    
                                                <?php }?>
                                        </tbody>
                                       
                                    </table>

                                    <br>

                                    {{ $product_list->withQueryString()->links() }}
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
