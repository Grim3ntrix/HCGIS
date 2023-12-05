@extends('admin.manager.body.listprice')
@section('listprice-content')
<div class="page-content">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <a href="{{ route('manager.show.list.price') }}" class="btn btn-outline-primary">New</a>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                    <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Product List Price</h6>
                    <div class="table-responsive">
                        <table id="allListPrice" class="table table-hover">
                            <thead>
                                <th>Action</th>
                                <th>PLP Code</th>
                                <th>Product Type</th>
                                <th>Product Category</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Created</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var viewUrl = "{{ route('manager.view.list.price', ':id') }}";
        var deleteUrl = "{{ route('manager.delete.list.price', ':id') }}";

        var allListPrice = $('#allListPrice').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('manager.show.all.list.price') }}"
            },
            columns: [
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row) {
                        var actions = '';
                        actions += '<a href="' + viewUrl.replace(':id', data) + ' }}" class="btn btn-outline-primary btn-icon" style="margin-right: 3px"><i class="fa-solid fa-eye fa-sm"></i></a>';
                        actions += '<a href="' + deleteUrl.replace(':id', data) + ' }}" id="delete" class="btn btn-outline-danger btn-icon" style="margin-right: 3px"><i class="fa-solid fa-trash fa-sm"></i></a>';
                        return actions.replace(':id', data);
                    }
                },
                { data: 'product_list_price_code', name: 'product_list_price_code' },
                { data: 'product_type', name: 'product_type' },
                { data: 'product_category', name: 'product_category' },
                { data: 'list_price', name: 'list_price' },
                { data: 'product_description', name: 'product_description' },
                {
                    data: 'created_at',
                    name: 'created_at',
                    render: function (data, type, row) {
                        return moment(data).fromNow();
                    }
                },
            ]
        });
    });
</script>

@endsection
