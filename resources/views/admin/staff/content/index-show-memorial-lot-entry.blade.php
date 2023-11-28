@extends('admin.staff.body.memorial-lot-entry')
@section('memorial-lot-entry-content')
<div class="page-content">
	<div class="row">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <a href="{{ route('staff.add.product.entry') }}" class="btn btn-outline-primary">New</a>
            </div>
            <div>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <a href="checkbox" class="btn-check" id="btncheck1" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck1">WDP</label></a>

                <a href="checkbox" class="btn-check" id="btncheck2" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck2">NDP</label></a>

                <a href="checkbox" class="btn-check" id="btncheck3" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck3">WDPNI</label>

                <a href="checkbox" class="btn-check" id="btncheck3" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck3">NDPNI</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Entry Code:</h5>
                            <p class="card-text mb-1">Phase: AB</p>
                            <p class="card-text mb-2">Entity: </p>
                            <p class="card-text mb-2">Price: </p>
                            <p class="card-text">Status: Available</p>
                        </div>
                        <div class="card-footer">PLP-Garden Lot-Prime-00</div>
                    </div>
                </div>
            </div><!-- Col -->
        </div><!-- Row -->
	</div>
</div>
@endsection