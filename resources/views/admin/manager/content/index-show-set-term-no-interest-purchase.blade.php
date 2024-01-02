@extends('admin.manager.body.discount-rate')
@section('discount-rate-content')
<div class="page-content">
    <div class="row mb-3">
        <div class="col-md-12 stretch-card">
            <div class="card-body">
                <form action="{{ route('manager.store.set.term') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Additional: This will be how many term to be payed for No Interest Purchase" data-feather="help-circle" class=""></i></span>Additional Feature</h4>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label for="set_term" class="form-label">Set Term in Months<span style="font-size:12px; color: #0DCAF0;"> (No Interest Purchase)</span></label>
                                                <input type="number" step="any" name="set_term" id="set_term" value="{{ optional($termThatHasBeenSet)->term_in_months}}" class="form-control @error('set_term') is-invalid @enderror" placeholder="0.000%">
                                                @error('set_term')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <button type="submit" class="btn btn-primary submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection