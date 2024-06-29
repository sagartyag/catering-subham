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
                        <h4 class="mb-sm-0 font-size-18">Royal Bonus</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profit Summary</a></li>
                                <li class="breadcrumb-item active">Royal Bonus</li>
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
                                        <th>SR#</th>


                                     
                                        <th>Amount</th>
                                        <th>Date</th>

                                        <th>Remarks </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($level_income) || is_object($level_income)){ ?>

                                    <?php $cnt = $level_income->perPage() * ($level_income->currentPage() - 1); ?>
                                    @foreach ($level_income as $value)
                                        <tr>
                                            <td><?= $cnt += 1 ?></td>
                                          
                                            <td>{{currency()}} {{ $value->comm }} </td>
                                            <td>{{ $value->created_at }}</td>

                                            <td>{{ $value->remarks }}</td>

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
