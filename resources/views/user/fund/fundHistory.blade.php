
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
                                <h4 class="mb-sm-0 font-size-18">Product Reports</h4>

                                <div class="page-title-right">
                                    <!-- <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Buy Product</a></li>
                                        <li class="breadcrumb-item active">Product Reports</li>
                                    </ol> -->
                                </div>
                               

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="overflow-x: auto;">

                                    

                                    <table id="datatable" class="table table-bordered  w-100">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Username</th>
                                                <th>Amount</th>
                                                <th>Payment Mode </th>
                                                <th>Total Amount </th>
                                              
                                                <th>Added Date </th>
                                                <th>Status</th>
                                                <th>action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                                <?php $cnt =$level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                                @foreach($level_income as $value)
                                                <tr>
                                                    <td>
                                                        <?= $cnt += 1?>
                                                    </td>
            
            
                                                    <td> {{$value->user_id_fk}}</td>
                                                    <td> {{$value->amount}}</td>
                                                    <td> {{$value->payment_mode}}</td>
                                                    <td> {{$value->grandTotal}}</td>
                                                   
                                                    
                                           
                                                    <td>{{date("D, d M Y h:i:s a", strtotime($value->created_at));}} </td>
                                                    
                                                    <td class="btn-success btn-sm"><span
                                                            class="badge badge-{{($value->status==1)?'danger':'success'}}">{{($value->status)?"Approved":"Pending"}}</span>
                                                    </td>
                                                    
                                                    <td>  <div class="d-flex flex-wrap gap-2">
                                            <a href="{{route('user.invoices_details', ['id' => $value->id])}}">view</a>
                                          
                                        </div></td>
            
                                                </tr>
                                                @endforeach
            
                                                <?php }?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

              

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
