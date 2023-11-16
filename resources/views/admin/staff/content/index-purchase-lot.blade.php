@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Customers</h6>
                <div class="table-responsive">
                  <table id="showUserCustomer" class="table table-hover">
                        <thead>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
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

      var editUrl = "{{ route('staff.show.personalinfo.form', ':id') }}";
      var showUrl = "{{ route('staff.show.productdetail.form', ':id') }}";

      var purchaseLotTable = $('#showUserCustomer').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('staff.show.customer.user') }}"
          },
          columns: [
            {
            data: 'id',
            name: 'id',
            render: function(data, type, row) {
                var actions = '';
                actions += '<a href="' + editUrl.replace(':id', data) + ' }}" class="btn btn-outline-primary btn-icon" style="margin-right: 3px"><i class="fa-solid fa-edit fa-sm"></i></a>';
                actions += '<a href="' + showUrl.replace(':id', data) + ' }}" class="btn btn-outline-success btn-icon"><i class="fa-solid fa-cart-plus fa-sm"></i></a>';
                return actions.replace(':id', data);
              }
            },
            {data: 'name', name: 'name' },
            {data: 'address', name: 'address' },
            {data: 'email', name: 'email' },
            {data: 'phone', name: 'phone' },
            {data: 'created_at', name: 'created_at',
            render: function (data, type, row) {
                return moment(data).fromNow();
            }}, 
          ]
      });
  });
</script>

@endsection