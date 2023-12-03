@extends('admin.staff.body.memorial-lot-entry')

@section('memorial-lot-entry-content')
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <a href="{{ route('staff.add.product.entry') }}" class="btn btn-outline-primary">New</a>
            </div>
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <a href="checkbox" class="btn-check" id="btncheck1" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck1">WDP</label>

                <a href="checkbox" class="btn-check" id="btncheck2" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck2">NDP</label>

                <a href="checkbox" class="btn-check" id="btncheck3" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck3">WDPNI</label>

                <a href="checkbox" class="btn-check" id="btncheck4" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck4">NDPNI</label>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    @foreach($showEntryInfo as $entryInfo)
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card hoverable-card">
                                <div class="card-body">
                                    <p class="card-text mb-1">Phase: {{ $entryInfo->phase }}</p>
                                    <p class="card-text mb-2">Quantity: {{ $entryInfo->blockQuantity->block_quantity }}</p>
                                    <p class="card-text mb-2">PLP Mode: {{ $entryInfo->product_list_price_mode }}</p>
                                    <p class="card-text mb-2">Price: {{ $entryInfo->productListPrice->list_price }}</p>
                                    <p class="card-text mb-2">WDP Price: {{ $entryInfo->balance }}</p>
                                    <p class="card-text">Status: {{ $entryInfo->status }}</p>
                                </div>
                                <div class="card-footer">{{ $entryInfo->product_entry_code }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
