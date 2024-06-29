
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
                                <h4 class="mb-sm-0 font-size-18">Withdrawal Reports</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Withdrawal</a></li>
                                        <li class="breadcrumb-item active">Withdrawal Reports</li>
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
                                                <th class="wd-15p">#S.NO</th>
                                                <th class="wd-15p">User ID</th>
                                                <th class="wd-15p">Amount</th>
                                              
                                                <th class="wd-15p">Date </th>
                                                <th class="wd-15p">Payment Mode </th>
                                                <th class="wd-15p">Transaction ID</th>
                                                <th class="wd-15p">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($withdraw_report) || is_object($withdraw_report)){ ?>

                                            <?php $cnt = $withdraw_report->perPage() * ($withdraw_report->currentPage() - 1); ?>
                                            @foreach($withdraw_report as $value)
                                                <tr>
                                                    <td><?= $cnt += 1 ?></td>
                                                    <td>{{ ($value->user_id_fk) }}</td>
                                                    <td>{{currency()}} {{ ($value->amount) }}</td>
                                                    
                                                    <td>{{ $value->created_at }}</td>
                                                    <td>{{ $value->payment_mode }}</td>
                                                    <td>{{ $value->txn_id }}</td>
                                                    <td><span
                                                        class="badge badge-{{ ($value->status=='Approved')?'success':'danger' }}">{{ $value->status }}</span></td>

                                                </tr>
                                            @endforeach

                                            <?php }?>

                                        </tbody>
                                    </table>

                                    {{ $withdraw_report->withQueryString()->links() }}

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

              

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
