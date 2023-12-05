@extends('admin.staff.body.purchase-lot')

@section('purchase-lot-content')
<div class="page-content">
    <div class="row d-flex align-items-start">
        <!-- Left card with fixed height -->
        <div class="col-md-4 mb-3 stretch-card">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Purchase Memorial Lot</h6>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Phase</label>
                                    <select name="role" class="form-select mb-3 @error('role') is-invalid @enderror">
                                            <option selected disabled>Open this select menu</option>
                                            <option value="AB">AB</option>
                                            <option value="AC">AC</option>
                                            <option value="AD">AD</option>
                                    </select>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="product_list_price_mode" class="form-label">PLP Mode</label>
                                    <select name="product_list_price_mode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror" id="product_list_price_mode">
                                        <option selected disabled>Open this select menu</option>
                                        <option value="At-Need">At-Need</option>
                                        <option value="Spot Cash">Spot Cash</option>	
                                        <option value="With Down Payment">With Down Payment</option>
                                        <option value="No Down Payment">No Down Payment</option>
                                        <option value="With Down Payment No Interest">With Down Payment No Interest</option>
                                        <option value="No Down Payment No Interest">No Down Payment No Interest</option>										
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="product_list_price_mode" class="form-label">Term</label>
                                    <select name="product_list_price_mode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror" id="product_list_price_mode">
                                        <option selected disabled>Open this select menu</option>
                                        <option value="12">1 year/s or 12 Months</option>
                                        <option value="24">2 year/s or 24 Months</option>
                                        <option value="36">3 year/s or 36 Months</option>
                                        <option value="48">4 year/s or 48 Months</option>
                                        <option value="60">5 year/s or 60 Months</option>										
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Entry Code</label>
                                    <select name="role" class="form-select mb-3 @error('role') is-invalid @enderror">
                                            <option selected disabled>Open this select menu</option>
                                        @foreach($entryCode as $code)
                                            <option value="{{ $code->id }}">{{ $code->product_entry_code }}</option>
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="date" name="name" id="name" class="form-control @error('name') is-invalid @enderror" readonly>
                                    @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <button type="submit" class="btn btn-primary submit">Buy</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Right card -->
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Purchase Detail</h6>
                    <form action="{{ route('store.customer.account') }}" method="POST">
                        @csrf
                        <div class="row">
						<div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Interest</label>
                                    <input type="hidden" name="user_code" id="user_code" value="">
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" readonly>
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Monthly</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" readonly>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="password" class="form-label">End Amount</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" readonly>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Term</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" readonly>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
