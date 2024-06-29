

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
                                <h4 class="mb-sm-0 font-size-18">Change Password</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                        <li class="breadcrumb-item active">Change Password</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                  
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                              
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('user.edit-password') }}" method="POST">
                                         {{ csrf_field() }}
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Old Password</label>
                                                    <input class="form-control" id="inputEmail3" placeholder="Old password" type="password" name="old_password">
                                                </div>
         
                                               
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">New Password</label>
                                                    <input class="form-control" id="inputEmail3" placeholder="New password" type="password" name="password">
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Retype New password</label>
                                                    <input class="form-control" id="inputEmail3" placeholder="Retype New password" type="password" name="password_confirmation">
                                                </div>
                                             
         
                                            </div>
         
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">
                                                        Check me out
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
