@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
      <div>
        <h5 class="mb-3 mb-md-0"></h5>
      </div>
      <div class="d-flex align-items-center flex-wrap text-nowrap">
        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
            <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
            <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Product List Price</h6>
                <div class="table-responsive">
                  <table id="allListPrice" class="table table-hover">
                        <thead>
                            <th>Id</th>
                            <th>PLP Code</th>
                            <th>Product Type</th>
                            <th>Product Category</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Created</th>
                        </thead>
                        <tbody>
                        </tbody>
                  </table><br>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {


      var allListPrice = $('#allListPrice').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('staff.show.all.list.price') }}"
          },
          columns: [
            {
            data: 'id',
            name: 'id',
            },
            {data: 'product_list_price_code', name: 'product_list_price_code' },
            {data: 'product_type', name: 'product_type' },
            {data: 'product_category', name: 'product_category' },
            {data: 'list_price', name: 'list_price' },
            {data: 'product_description', name: 'product_description'},
            {data: 'created_at', name: 'created_at',
            render: function (data, type, row) {
                return moment(data).fromNow();
            }}, 
          ]
      });
  });
</script>
@endsection