

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
                                <h4 class="mb-sm-0 font-size-18">Edit Profile</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                        <li class="breadcrumb-item active">Edit Profile</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                  
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                  

                                    <form class="custom-validation" action="{{ route('user.update-profile') }}" method="POST" >
                                       

                                        {{ csrf_field() }}

                                        <div class="mb-3">
                                            <label class="form-label">Sponsor ID</label>
                                            <div>
                                                <input class="form-control" type="text" name=""
                                                value="{{ $profile_data->sponsor_detail ? $profile_data->sponsor_detail->username : '0' }}"
                                                readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Customer ID</label>
                                            <div>
                                                <input class="form-control" type="text" name="memberID"
                                                value="{{ $profile_data ? $profile_data->username : '' }}" readonly>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <div>
                                                <input class="form-control" type="text" id="firstName" name="name"
                                                    value="{{ $profile_data ? $profile_data->name : '0' }}" autofocus />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Customer Email ID</label>
                                            <div>
                                                <input class="form-control" type="email" name="email"
                                                value="{{ $profile_data ? $profile_data->email : '' }}" placeholder="Email ID" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Customer Mobile No</label>
                                            <div>
                                                <input type="text" value="{{($profile_data)?$profile_data->phone:''}}" id="phoneNumber" name="phone" class="form-control"
                                                placeholder="202 555 0111" />
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Customer Address</label>
                                            <div>
                                                <input type="text" value="{{($profile_data)?$profile_data->address:''}}"  name="address" class="form-control"
                                                placeholder="Customer Address" />
                                            </div>
                                        </div>

                                      
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                  

                                    <form action="{{ route('user.bank-update') }}" method="POST">
                                        @csrf
                                        <div class="box-body">
                                          <div class="row ">
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                <label class="form-control-label">Bank Name <span class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" <?=(@$bank_value->bank_name)?"readonly":""?>  onkeyup="this.value=this.value.toUpperCase()"  name="bank_name" value="{{ @$bank_value->bank_name }}"
                                                  placeholder="Enter Bank Name">
                                              </div>
                                            </div>
                    
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                  <label class="form-control-label">Branch Name <span class="tx-danger">*</span></label>
                                                  <input class="form-control" type="text" name="branch_name" onkeyup="this.value=this.value.toUpperCase()" <?=(@$bank_value->branch_name)?"readonly":""?>   value="{{ @$bank_value->branch_name }}"
                                                    placeholder="Enter Branch Name">
                                                </div>
                                              </div>
                    
                                            <div class="col-lg-12">
                                 
                                              <div class="form-group">
                                                <label class="form-control-label">A/C Holder First Name <span
                                                    class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" <?=(@$bank_value->account_holder)?"readonly":""?>  name="account_holder" value="{{ @$bank_value->account_holder }}"
                                                  placeholder="Enter a/c holder first name">
                                              </div>
                                            </div>
                                          
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                <label class="form-control-label">Bank IFSC <span class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" <?=(@$bank_value->ifsc_code)?"readonly":""?> onkeyup="this.value=this.value.toUpperCase()"  name="ifsc_code" value="{{ @$bank_value->ifsc_code }}"
                                                  placeholder="Enter IFS Code " required>
                                              </div>
                                            </div>
                    
                    
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                <label class="form-control-label">Bank A/c Number <span class="tx-danger">*</span></label>
                                                <input class="form-control" type="text" onkeyup="this.value=this.value.toUpperCase()"  <?=(@$bank_value->account_no)?"readonly":""?>  name="account_number" value="{{ @$bank_value->account_no }}"
                                                  placeholder="Enter Account Number" required>
                                              </div>
                                            </div>
          
                                            <div class="col-lg-12">
                                              <div class="form-group">
                                                <label class="form-control-label">Pancard No <span class="tx-danger">*</span></label>
                                                <input type="text" value="{{@$bank_value->pancard_no}}" name="pancard_no" <?=(@$bank_value->pancard_no)?"readonly":""?>  onkeyup="this.value=this.value.toUpperCase()" class="form-control" >
                                              </div>
                                            </div>
          
                                          </div>
                                          <br>
                                          <div class="">
                                            <a href="{{route('user.BankDetail')}}" class="btn btn-primary " type="button">CANCEL</a>
                                            <button class="btn btn-success " type="submit" name="Bank89655656">UPDATE</button>
                                          </div>
                                        </div>
                                      </form>

                                </div>
                            </div>
                        </div> <!-- end col -->


                        

            
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
