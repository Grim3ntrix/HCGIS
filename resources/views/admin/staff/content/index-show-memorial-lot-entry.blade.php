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
                        <div class="card-body d-flex justify-content-between">
                            <div>
                                <p class="card-text mb-1">Phase: {{ $entryInfo->phase }}</p>
                                <p class="card-text mb-2">Quantity: {{ $entryInfo->blockQuantity->block_quantity }}</p>
                                <p class="card-text mb-2">PLP Mode: {{ $entryInfo->product_list_price_mode }}</p>
                                <p class="card-text mb-2">Price: {{ $entryInfo->productListPrice->list_price }}</p>
                                <p class="card-text mb-2">WDP Price: {{ $entryInfo->balance }}</p>
                                <p class="card-text">Status: {{ $entryInfo->status }}</p>
                            </div>
                            <!-- Icon for delete aligned with Phase -->
                            <a href="{{ route ('staff.delete.product.entry', ['id'=> $entryInfo] ) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                            </a>
                        </div>
                        <div class="card-footer">Code: {{ $entryInfo->product_entry_code }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    </div>
@endsection
