

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
                                <h4 class="mb-sm-0 font-size-18">Withdrawal Request </h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Withdrawal</a></li>
                                        <li class="breadcrumb-item active">Withdrawal Request </li>
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
                                        <code class="badge badge-rounded badge-outline-warning" style="color:#000;font-size:15px">Available Balance : <b>{{ currency() }} {{ number_format(Auth::user()->available_balance(), 2) }}</b></code>
                                        <br>
                                        <form onsubmit="return onsubmit_func()"  action="{{ route('user.Withdraw-Request') }}" method="POST">
                                         {{ csrf_field() }}
    
                                         <br>    
                                            <div class="row">
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Enter Amount</label>
                                                    <input class="form-control" placeholder="Enter Amount" id="withdrawal_amt" min="5" required type="number" name="amount"
                                                        value="" >
                                                </div>
         
                                                <div class="mb-3 col-md-12">
                                                    <label class="form-label">Payment Mode</label>
                                                   
                                                        <select class="form-control"  name="payment_mode" >
                                                            <option value="BANK">BANK</option>
                                                          
                                                        </select>
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
