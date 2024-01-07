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
                            <option value=""><a href="{{ route('staff.show.payment.form', $customer->id) }}">ORDER-00001</a></option>
                            <option value=""><a href="{{ route('staff.show.payment.form', $customer->id) }}">ORDER-00002</a></option>
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-start">#</th>
                                    <th class="text-start">Payment Schedule</th>
                                    <th class="text-start">Due Amount</th>
                                    <th class="text-start">Status</th>
                                    <th class="text-start">Paid Date</th>
                                    <th class="text-start">Payment Type</th>
                                    <th class="text-start">O.R Number</th>
                                    <th class="text-start">Standing Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-end">
                                    <td class="text-start">1</td>
                                    <td class="text-start">2023-24-January</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">2</td>
                                    <td class="text-start">2023-24-February</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">3</td>
                                    <td class="text-start">2023-24-March</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">4</td>
                                    <td class="text-start">2023-24-April</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">5</td>
                                    <td class="text-start">2023-24-May</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">6</td>
                                    <td class="text-start">2023-24-June</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">7</td>
                                    <td class="text-start">2023-24-July</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">8</td>
                                    <td class="text-start">2023-24-August</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">9</td>
                                    <td class="text-start">2023-24-September</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">10</td>
                                    <td class="text-start">2023-24-October</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">11</td>
                                    <td class="text-start">2023-24-November</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start">12</td>
                                    <td class="text-start">2023-24-December</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                    <td class="text-start"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
