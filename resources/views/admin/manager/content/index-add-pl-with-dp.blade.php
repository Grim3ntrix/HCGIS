@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">List Price (With DownPayment)</h6>
                
                <a href="{{ route('staff.show.personalinfo.form', ':id') }}" class="btn btn-inverse-info" style="margin-right: 3px;"><i class="fa-solid fa-plus fa-xs"></i> New</a>
                <div class="table-responsive">
                  <table id="listPriceWithDP" class="table table-hover">
                    <thead>
                        <tr>                                                                    
                            <th>Action</th>
                            <th>No.</th>
                            <th>Product Type</th>
                            <th>Product Category</th>
                            <th>Pre-Need Price (Spot Cash)</th>
                            <th>Pre-Need Price (Contract Price)</th>
                            <th>At-Need Price</th>
                            <th>20% Downpayment</th>
                            <th>80% Balance</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                        </tr>
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
      var listPriceTable = $('#listPriceWithDP').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('showpricelist.withdown') }}"
          },
          columns: [
            {
            data: 'id',
            name: 'id',
            render: function(data, type, row) {
                var actions = '';
                actions += '<a href="{{ route('staff.show.personalinfo.form', ':id') }}" class="btn btn-outline-primary btn-icon" style="margin-right: 3px"><i class="fa-solid fa-pen-to-square fa-xs"></i></a>';
                actions += '<a href="{{ route('staff.show.personalinfo.form', ':id') }}" class="btn btn-outline-danger btn-icon"><i class="fa-solid fa-trash-can fa-xs"></i></a>';
                return actions.replace(':id', data);
              }
            },
            {data: 'id', name: 'id' },
            {data: 'product_type_id', name: 'product_type_id' },
            {data: 'product_category_id', name: 'product_category_id' },
            {data: 'pre_need_price_spot_cash', name: 'pre_need_price_spot_cash' },
            {data: 'pre_need_price_contract_price', name: 'pre_need_price_contract_price' },
            {data: 'at_need_price', name: 'at_need_price' },
            {data: 'created_by', name: 'created_by' },
            {data: 'updated_by', name: 'updated_by' },
            {data: 'created_at', name: 'created_at' },         
            {data: 'updated_at', name: 'updated_at',
            render: function (data, type, row) {
                return moment(data).fromNow();
            }}, 
          ]
      });
  });
</script>
@endsection