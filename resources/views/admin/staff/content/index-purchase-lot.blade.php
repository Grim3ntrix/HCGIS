@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Purchase Memorial Lot</h6>
                <div class="table-responsive">
                    {!! $datatable->render() !!}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
