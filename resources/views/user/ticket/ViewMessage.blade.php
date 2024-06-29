
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
                                <h4 class="mb-sm-0 font-size-18">Support Message</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Supports</a></li>
                                        <li class="breadcrumb-item active">Support Message</li>
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

                                    

                                    <table id="example" class="display" style="min-width: 845px">
                                        <?php if(is_array($open_ticket_msg) || is_object($open_ticket_msg)){ ?>
                                            <?php $count= 0; ?>
                                            <?php foreach ($open_ticket_msg as $item): ?>
                                            <?php if($item->reply_by == 'user'){ }  ?>

                                            <h5 class="form-header" style="width: 233px; background:#e92266;padding: 7px;color: #fff;border-radius: 10px;"> <?= $item->category ?> (<?=$item->gen_date?>)</h5>
                                            <br>
                                           <p class="comp_bank_p" style="color:#000" ><?= $item->msg ?></p>
                                           <p class="text-right" style="margin-right: 30px;color:#000;margin-left:300px"><?=($item->reply_by == 'admin')? 'Admin' : 'You'?></p>
                                           <?php endforeach; ?>
                                           <?php } ?>
                                       
                                    </table>
                                   

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

              

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
