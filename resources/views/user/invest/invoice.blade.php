

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
                                    <h4 class="mb-sm-0 font-size-18">Detail</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                                            <li class="breadcrumb-item active">Detail</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="invoice-title">
                                            <h4 class="float-end font-size-16">Order  #{{($investment)?$investment->plan:0}}</h4>
                                            <div class="mb-4">
                                                <img src="{{asset('')}}main/img/logo.png" alt="logo" height="80"/>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <address>
                                                    <strong>Billed To:</strong><br>
                                                    John Smith<br>
                                                    1234 Main<br>
                                                    Apt. 4B<br>
                                                    Springfield, ST 54321
                                                </address>
                                            </div>
                                            <div class="col-sm-6 text-sm-end">
                                                <address class="mt-2 mt-sm-0">
                                                    <strong>Shipped To:</strong><br>
                                                    {{$investment->user->name}}<br>
                                                    {{$investment->user->address}}<br>
                                                    {{$investment->user->email}}<br>
                                                    {{$investment->user->phone}}<br>
                                                  
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mt-3">
                                                <address>
                                                    <strong>Payment Method:</strong><br>
                                                    Cash<br>
                                                    {{$investment->user->email}}
                                                </address>
                                            </div>
                                            <div class="col-sm-6 mt-3 text-sm-end">
                                                <address>
                                                    <strong>Order Date:</strong><br>
                                                    {{date("D, d M Y", strtotime($investment->sdate))}}<br><br>
                                                </address>
                                            </div>
                                        </div>

                                      
                                        <div class="py-2 mt-3">
                                            <h3 class="font-size-15 fw-bold">Order summary</h3>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 70px;">No.</th>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th class="text-end">Price</th>
                                                   
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $cnt = 0; ?>
                                                @foreach ($investment->userProduct as $value)

                                                <tr>
                                                    <td><?= $cnt += 1?></td>
                                                    <td>{{$value->productName}} - {{$value->ProductDiscription}}</td>
                                                    <td>{{$value->quantity}} </td>
                                                    <td class="text-end">&#8377; {{$value->productPrice}}</td>
                                                </tr>
                                                    
                                                @endforeach

                                                   
                                                  
                                                    <tr>
                                                        <td colspan="3" class="text-end">Sub Total</td>
                                                        <td class="text-end">&#8377; {{$investment->grandTotal}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="border-0 text-end">
                                                            <strong>Discount</strong></td>
                                                        <td class="border-0 text-end">&#8377; {{$investment->discount}}</td>
                                                    </tr>

                                                 
                                                    <tr>
                                                        <td colspan="3" class="border-0 text-end">
                                                            <strong>Total</strong></td>
                                                        <td class="border-0 text-end"><h4 class="m-0">&#8377; {{$investment->amount}}</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-print-none">
                                            <div class="float-end">
                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i class="fa fa-print"></i></a>
                                                <a href="{{route('user.DepositHistory')}}" class="btn btn-primary w-md waves-effect waves-light"><i class="fa fa-arrow-left"></i>Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
