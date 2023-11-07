@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">List Price (With DownPayment)</h6>
                  <a href="{{ route('add.pricelist.withdown') }}" class="btn btn-dark btn-xs" style="margin-right: 3px; margin-bottom:15px;">New</a>
                  <a href="" class="btn btn-dark btn-xs" style="margin-right: 3px; margin-bottom:15px;">Download</a>
                <div class="table-responsive">
                  <table id="listPriceWithDP" class="table table-hover">
                    <thead>
                        <tr>                                                                    
                            <th>Action</th>
                            <th>No.</th>
                            <th>Product Type</th>
                            <th>Product Category</th>                     
                            <th>Pre-Need (Contract) / List Price</th>
                            <th>Pre-Need (Spot Cash)</th>
                            <th>At Need Price</th>
                            <th>DP Rate (%)</th>
                            <th>Down Payment Amount</th>
                            <th>Balance</th>
                            <th>Description</th>
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

      var editUrl = "{{ route('edit.pricelist.withdown', ':id') }}";
      var deleteUrl = "{{ route('delete.pricelist.withdown', ':id') }}";
      var moneyUrl = "{{ route('show.installment.pricelist.withdown', ':id') }}";

      var listPriceTable = $('#listPriceWithDP').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('show.pricelist.withdown') }}"
          },
          columns: [
            {
              data: 'id',
              name: 'id',
              render: function(data, type, row) {
                var actions = '';
                actions += '<a href="' + editUrl.replace(':id', data) + '" class="btn btn-outline-primary btn-icon" style="margin-right: 3px"><i class="fa-solid fa-pen fa-xs"></i></a>';
                actions += '<a href="' + deleteUrl.replace(':id', data) + '" id="delete" class="btn btn-outline-danger btn-icon" style="margin-right: 3px"><i class="fa-solid fa-trash fa-xs"></i></a>';
                actions += '<a href="' + moneyUrl.replace(':id', data) + '" class="btn btn-outline-info btn-icon" style="margin-right: 3px"><i class="fa-solid fa-money-bills fa-xs"></i></a>';
                return actions.replace(':id', data);
              }
            },
            { data: 'id', name: 'id' },
            { data: 'product_type', name: 'product_type' },
            { data: 'product_category', name: 'product_category' },
            { data: 'contract_price', name: 'contract_price' },
            { data: 'spot_cash', name: 'spot_cash' },
            { data: 'at_need_price', name: 'at_need_price' },
            { data: 'down_payment_rate', name: 'down_payment_rate' },
            { data: 'down_payment_amount', name: 'down_payment_amount' },
            { data: 'balance', name: 'balance' },
            { data: 'description', name: 'description' },
          ]
      });
  });
</script>

@endsection