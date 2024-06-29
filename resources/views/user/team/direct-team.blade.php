
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
                                <h4 class="mb-sm-0 font-size-18">Direct team</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">My Team</a></li>
                                        <li class="breadcrumb-item active">Direct Team</li>
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
                                                    <th>Name</th>
                                                    <th>User ID</th>
                                                    <th>Email ID</th>
                                                    <th>Mobile No</th>
                                                    <th>Joining Date</th>
                                                    <th >Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($direct_team) || is_object($direct_team)){ ?>

                                            <?php $cnt = $direct_team->perPage() * ($direct_team->currentPage() - 1); ?>
                                            @foreach($direct_team as $value)
                                                <tr >
                                                    <td ><?= $cnt += 1?></td>
                                                    <td >{{ $value->name }}</td>
                                                    <td >{{ $value->username }}</td>
                                                    <td >{{ $value->email }}</td>
                                                    <td >{{ $value->phone }}</td>
                                                    <td >{{ $value->created_at }}</td>

                                                    <td><span
                                                            class="btn btn-{{ ($value->active_status=='Active')?'success':'danger' }} btn-sm btn-rounded waves-effect waves-light">{{ $value->active_status }}</span>
                                                    </td>


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
