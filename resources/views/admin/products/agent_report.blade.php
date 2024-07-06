

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Agent </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Agent Report</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Agent Report</h4>
                            </div>
                            <div class="card-body">

                                
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                          <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>User Id</th>
                                              
                                                <th>Name</th>
                                                <th>Email</th>
                                                <!--<th>Coupon</th>-->
                                                <th>Mobile Number</th>
                                                <th>transaction Id</th>
                                                <th>join Date</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($product_list) || is_object($product_list)){ ?>

                                                <?php $cnt =$product_list->perPage() * ($product_list->currentPage() - 1); ?>
                                                @foreach($product_list as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1?></td>
                    
                                                        <td> {{$value->user_id_fk}}</td>
                                                      
                                                        <td> {{$value->name}}</td>
                                                        <td> {{$value->email}}</td>
                                                        <!--<td> {{currency()}}  {{$value->ProductCoupon}}</td>-->
                                                        <td>  {{$value->phone}}</td>
                                                        <td>  {{$value->transaction_id}}</td>
                                                        <td>  {{$value->created_at}}</td>
                                                      
                    
                                                    
                                                       
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
