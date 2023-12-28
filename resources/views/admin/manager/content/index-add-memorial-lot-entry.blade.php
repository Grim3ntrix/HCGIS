@extends('admin.manager.body.memorial-lot-entry')
@section('memorial-lot-entry-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Make Entry based on Product List Price" data-feather="help-circle" class=""></i></span>Memorial Lot Entry</h4>
                    <form action="{{ route('manager.store.product.entry') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="product_list_price_code" class="form-label">PLP Code</label>
                                    <select name="product_list_price_code" class="form-select mb-3 @error('product_list_price_code') is-invalid @enderror" id="product_list_price_code">
                                        <option selected disabled>Open this select menu</option>
                                        @foreach($PLP_CODE as $PLP)
                                        <option value="{{ $PLP->id }}">
                                                {{ $PLP->product_list_price_code }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('product_list_price_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="phase_id" class="form-label">Phase</label>
                                    <select name="phase_id" class="form-select mb-3 @error('phase_id') is-invalid @enderror" id="phase_id">
                                        <option selected disabled>Open this select menu</option>
                                        @foreach($showEntry as $phase)
                                            <option value="{{ $phase->id }}">{{ $phase->phase_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('phase_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="block_number" class="form-label">Block Number</label>
                                    <input type="text" name="block_number" id="block_number" value="{{ old('block_number') }}" class="form-control @error('block_number') is-invalid @enderror" autocomplete="on" placeholder="0">
                                    @error('block_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="block_quantity" class="form-label">Quantity (Block Slot)</label>
                                    <input type="number" name="block_quantity" id="block_quantity" value="{{ old('block_quantity') }}" class="form-control @error('block_quantity') is-invalid @enderror" autocomplete="on" placeholder="0">
                                    @error('block_quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                    </div><!-- Row -->

                    <button type="submit" class="btn btn-primary submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection