   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"> Add Member</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Member</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
     
     
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Member</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin.agent_post')}}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label"> Name</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Name" type="text" name="name">
                                            </div>
     
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Email" type="email" name="email">
                                            </div>
                                           
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Select Member</label>
                                              
                                                <select   name="role" class="form-control" id="inputEmail3"> 
  <option value="Agent">Agent</option>
  <option value="Vendor">Vendor</option>
 
</select>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Mobile No</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Mobile NO" type="" name="phone">
                                            </div>

                                          
                                            <div class="mb-3 col-md-12">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" id="inputEmail3" placeholder="Enter Password" type="" name="password">
                                            </div>

                                          
     
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
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
     
     
     
     
                </div>
            </div>
        </div>
        <!--**********************************
                 Content body end
             ***********************************-->
     