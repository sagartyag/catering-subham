

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Layout</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Blank</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card mt-3">
                            <div class="card-header"> Invoice <strong>  {{date("D, d M Y", strtotime($investment->sdate))}}</strong> <span class="float-end">
                                    <strong>Status:</strong> <span style="color: green;font-weight:800">PAID</span> </div>
                            <div class="card-body">
                                <div class="row mb-5">
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>From:</h6>
                                        <div> <strong>Webz Poland</strong> </div>
                                        <div>Madalinskiego 8</div>
                                        <div>71-101 Szczecin, Poland</div>
                                        <div>Email: info@webz.com.pl</div>
                                        <div>Phone: +48 444 666 3333</div>
                                    </div>
                                    <div class="mt-4 col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <h6>To:</h6>
                                        <div> <strong> {{$investment->user->name}}</strong> </div>
                                        <div> {{$investment->user->address}}</div>
                                      
                                        <div>Email:  {{$investment->user->email}}</div>
                                        <div>Phone:  {{$investment->user->phone}}</div>
                                    </div>
                                    <div
                                        class="mt-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-xs-start">
                                        <div class="row align-items-center">
                                            <div class="col-sm-9">
                                                <div class="brand-logo mb-3">
                                                    <img class="logo-abbr me-2" width="50"
                                                        src="{{asset('main/img/logo.png')}}" alt="">
                                                  
                                                </div>
                                                <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th class="right">Unit Cost</th>
                                                <th class="center">Qty</th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php $cnt = 0; ?>
                                            @foreach ($investment->userProduct as $value)

                                            <tr>
                                                <td  class="center"><?= $cnt += 1?></td>
                                                <td class="left strong">{{$value->product->productName}} </td>
                                                <td class="left">{{$value->product->ProductDiscription}}</td>
                                                <td class="right">&#8377; {{$value->product->productPrice}}</td>
                                                <td class="center">{{$value->quantity}} </td>
                                                <td class="right">&#8377; {{$value->product->productDiscountPrice}}</td>
                                            </tr>
                                                
                                            @endforeach


                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">&#8377; {{$investment->grandTotal}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Discount </strong></td>
                                                    <td class="right">&#8377; {{$investment->discount}}</td>
                                                </tr>
                                               
                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>&#8377; {{$investment->amount}}</strong><br>
                                                     
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
