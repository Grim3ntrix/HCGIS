@extends('admin.staff.body.payment')
@section('payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Customers</h6>
                <div class="table-responsive">
                  <table id="showCustomers" class="table table-hover">
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

      var paymentUrl = "{{ route('staff.show.order.number', ':id') }}";

      var payment = $('#showCustomers').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "{{ route('staff.show.customer') }}"
          },
          columns: [
            {
            data: 'id',
            name: 'id',
            render: function(data, type, row) {
                var actions = '';
                actions += '<a href="' + paymentUrl.replace(':id', data) + ' }}" class="btn btn-outline-primary" style="margin-right: 3px;"><i class="fa-solid fa-peso-sign"></i>&nbsp;Pay</a>';
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