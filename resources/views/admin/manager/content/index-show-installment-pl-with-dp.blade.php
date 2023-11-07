@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
    <div class="row">
        <div class="row">  
            <div class="col-sm-4">
                <div class="mb-3">
                    <select class="form-select mb-3" name="installment" id="installmentSelect">
                        <option value="with_down_payment" selected>Installment With Down Payment</option>
                        <option value="no_down_payment">Installment No Down Payment</option>
                    </select>
                </div>
            </div><!-- Col -->
            <div class="col-sm-4">
                <div class="mb-3">
                    <button type="button" class="btn btn-success" id="viewButton">View</button>
                </div>
            </div><!-- Col -->
        </div><!-- Row -->
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">List Price (Contract) / Installment Price with Down Payment</h6>
                    <a href="{{ route('add.installment.pricelist.withdown', ['id' => $product->id]) }}" class="btn btn-dark btn-xs" style="margin-right: 3px; margin-bottom:15px;">New</a>
                    <a href="{{ route('delete.installment.pricelist.withdown', ['id' => $product->id]) }}" id="delete-installment" class="btn btn-dark btn-xs" style="margin-right: 3px; margin-bottom:15px;">Remove All</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Term (month)</th>
                                    <th>Interest Rate</th>
                                    <th>Annual interest</th>
                                    <th>Monthly Interest</th>
                                    <th>End Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($installmentPrice as $installmentPrices)
                                <tr>
                                    <td>{{ $installmentPrices->contract_term }}</td>
                                    <td>{{ $installmentPrices->interest_rate }}</td>
                                    <td>{{ $installmentPrices->annual_interest_amount }}</td>
                                    <td>{{ $installmentPrices->monthly_interest_amount }}</td>
                                    <td>{{ $installmentPrices->end_price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const installmentSelect = document.getElementById("installmentSelect");
    const viewButton = document.getElementById("viewButton");

    viewButton.addEventListener("click", function() {
        const selectedOption = installmentSelect.value;
        if (selectedOption === "with_down_payment") {
            window.location.href = "{{ route('show.installment.pricelist.withdown', ['id' => $product]) }}";
        } else if (selectedOption === "no_down_payment") {
            window.location.href = "{{ route('show.installment.pricelist.nodown', ['id' => $product]) }}";
        }
    });
});
</script>
@endsection
