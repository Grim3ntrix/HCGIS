@extends('admin.staff.body.payment')
@section('payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <div class="d-flex align-items-center">
                        <select class="form-select" name="">
                            <option value="" selected="" disabled>Select order number</option>
                            <option value="">ORDER-00001</option>
                            <option value="">ORDER-00002</option>
                        </select>
                       <!-- <button type="submit" class="btn btn-primary ml-2">Go</button>-->
                    </div>
                </div>
                <div class="d-flex align-items-center flex-wrap text-nowrap">
                    <a href="{{ route('staff.show.payment.details', $customer->id) }}" class="btn btn-outline-primary" id="payment-details">Payment Details</a>
                </div>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-md-12 stretch-card">
			<div class="card">
				<div class="card-body">
                    <h6 class="card-title">Payment Mode: With Down Payment</h6>
                    <h6 class="card-title">Term: 12 Months</h6>
                    <div class="table-responsive">
                        
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>

</script>
@endsection
