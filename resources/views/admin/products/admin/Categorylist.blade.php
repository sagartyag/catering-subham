<!-- Content body start -->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Category Report</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Category Report</a></li>
            </ol>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Category Report</h4>
                    </div>
                    <div class="card-body">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <form action="" method="GET" style="display: none">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group mb-3">
                                            <input type="text" style="height: 3rem;" placeholder="Search Users" name="search" class="form-control" value="{{ @$search }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="form-group mb-3">
                                            <select name="limit" style="height: 3rem;" class="form-control">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="form-group mb-3">
                                            <input type="submit" style="padding: 0.6rem 2rem;" name="submit" class="btn btn-outline-theme btn-lg d-block w-100 btn-primary" value="Search" />
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="form-group mb-3">
                                            <a href="" style="padding: 0.6rem 2rem;" name="reset" class="btn btn-outline-theme btn-lg d-block w-100 btn-primary" value="Reset">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S NO.</th>
                                        <th>Category Name</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($product_list) || is_object($product_list)){ ?>
                                        <?php $cnt = $product_list->perPage() * ($product_list->currentPage() - 1); ?>
                                        @foreach ($product_list as $value)
                                            <tr>
                                                <td><?= $cnt += 1 ?></td>
                                                <td>{{ $value->categoryname }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn btn-primary toggle-status" data-id="{{ $value->id }}" data-status="{{ $value->status }}">
                                                        <i class="fas fa-toggle-{{ $value->status == 0 ? 'on' : 'off' }}"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    <?php } ?>
                                </tbody>
                            </table>

                            <br>

                            {{$product_list->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content body end -->

<script>
$(document).ready(function() {
    $('.toggle-status').on('click', function() {
        var categoryId = $(this).data('id');
        var currentStatus = $(this).data('status');

        $.ajax({
            url: "{{ route('toggle.status') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: categoryId,
            },
            success: function(response) {
                if(response.success) {
                    var newStatus = response.status;
                    var icon = newStatus == 0 ? 'fa-toggle-on' : 'fa-toggle-off';
                    $('a[data-id="' + categoryId + '"]').data('status', newStatus).find('i').attr('class', 'fas ' + icon);
                }
            }
        });
    });
});
</script>
