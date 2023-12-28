@extends('admin.manager.body.memorial-lot-entry')

@section('memorial-lot-entry-content')
    <div class="page-content">
       <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <a href="{{ route('manager.add.product.entry') }}" class="btn btn-outline-primary">New</a>
            </div>
            <!--  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <a href="checkbox" class="btn-check" id="btncheck1" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck1">WDP</label>

                <a href="checkbox" class="btn-check" id="btncheck2" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck2">NDP</label>

                <a href="checkbox" class="btn-check" id="btncheck3" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck3">WDPNI</label>

                <a href="checkbox" class="btn-check" id="btncheck4" autocomplete="off"></a>
                <label class="btn btn-outline-primary" for="btncheck4">NDPNI</label>
            </div>-->
        </div> 
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    @foreach($showEntryInfo as $entryInfo)
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card hoverable-card">
                                <div class="card-body d-flex justify-content-between">
                                    <div>
                                        <p class="card-text mb-1">Phase: {{ optional($entryInfo->phase)->phase_name }}</p>
                                        <p class="card-text mb-2">Block Number: {{ optional($entryInfo->block)->block_number }}</p>
                                        <p class="card-text mb-2">Quantity: {{ optional($entryInfo->block)->block_quantity }}</p>
                                        <p class="card-text mb-2">Price: {{ optional($entryInfo->productListPrice)->list_price }}</p>
                                        <p class="card-text mb-2">Phase Status: {{ optional($entryInfo->phase)->status }}</p>
                                        <p class="card-text mb-2">Entry Status: {{ $entryInfo->status }}</p>
                                    </div>
                                    <div>
                                        <!-- Icon for delete aligned with Phase -->
                                        <a href="{{ route ('manager.delete.product.entry.now', [$entryInfo->id]) }}" id="delete-agent-account"><i data-feather="trash"></i></a>
                                    </div>
                                </div>
                                <div class="card-footer" style="text-align: center;">{{ optional($entryInfo)->product_entry_code }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
