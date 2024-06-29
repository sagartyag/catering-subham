

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
                                <h4 class="mb-sm-0 font-size-18">Support Ticket </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Supports</a></li>
                                        <li class="breadcrumb-item active">Support Ticket </li>
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
                                        
                                        <form action="{{ route('user.SubmitTicket') }}" method="POST">
                                            {{ csrf_field() }}
                                         <br>    
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Select Category</label>
                                                <select class="form-control" name="category" required="true">
                                                    <option value="">Select Category</option>
                                                    <option value="Verification">Verification </option>
                                                    <option value="Technical">Technical</option>
                                                    <option value="Team Building">Team Building </option>
                                                    <option value="Financial">Financial</option>
                                                    <option value="Fund Issue">Fund Issue</option>
                                                    <option value="Others">Others</option>
                                            </select>
                                                </div>
         
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Ticket No</label>
                                                <input type="number" class="form-control "
                                                name="ticket_no"
                                                placeholder=" Tickets Number (Optional)">
                                                </div>
    
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Message</label>
                                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                                </div>
                                               
                                            </div>
         
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" required type="checkbox">
                                                    <label class="form-check-label">
                                                        Check me out
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
