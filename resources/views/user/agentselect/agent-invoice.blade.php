
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
                                <h4 class="mb-sm-0 font-size-18">Seller Invoice</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Add Product</a></li>
                                        <li class="breadcrumb-item active">Seller Invoice</li>
                                    </ol>
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
                                                <th>#</th>
                                                <th>User ID</th>
                                                <th>Amount</th>
                                                <th>Transection Date</th>
                                                <th>Transection ID</th>
                                                <th>Status</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                                <?php $cnt = 0; ?>
                                                @foreach($deposit_list as $value)
                                                    <tr>
                                                        <td><?= $cnt += 1?></td>
                                                        <td>{{ $value->user_id_fk }}</td>
    
                                                        <td>{{currency()}} {{ $value->amount }}</td>
                                                        <td>{{ $value->created_at }}</td>
                                                        <td>{{ $value->transaction_id }}</td>
                                                        <td><span
                                                            class="badge badge-{{ ($value->status=='Active')?'success':'danger' }}">{{ $value->status }}</span></td>

                                                            <td><a href="{{ route('user.ViewSellerInvoice', ['id'=> Crypt::encrypt($value->id)]) }}" class="btn btn-primary btn-sm btn-rounded" >
                                                                View Details
                                                            </a></td>
    
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
