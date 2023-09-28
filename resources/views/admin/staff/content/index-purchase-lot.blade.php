@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Purchase Memorial Lot</h6>
                <div class="table-responsive">
                  <table id="purchaseLot" class="table">
                        <thead>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </thead>
                        <tbody>

                        </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function() {
      var purchaseLotTable = $('#purchaseLot').DataTable({
          ajax: {
              url: "/admin/staff/purchase-lot",
              dataSrc: '', // Use an empty string to indicate that the data is at the root level
              error: function (xhr, error, thrown) {
                  console.log('DataTables error: ', error);
                  console.log('Response:', xhr.responseText);
              },
          },
          columns: [
              { data: 'name' },
              { data: 'address' },
              { data: 'email' },
              { data: 'phone' }
          ]
      });
  });
</script>
@endsection