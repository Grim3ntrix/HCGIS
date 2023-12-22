@extends('admin.staff.body.payment')
@section('payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-12">
            <form method="post" action="" class="mb-3">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <select class="form-control mr-2" name="">
                                <option value="" selected="" disabled>Select Order Number</option>
                                <option value="">#00123</option>
                                <option value="">#00123</option>
                            </select>
                            <button type="submit" class="btn btn-success ml-2">Go</button>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <select class="form-control mr-2" name="">
                                <option value="" selected="" disabled>Select Payment</option>
                                <option value="">Payment For At-Need</option>
                                <option value="">Payment For Spot-Cash</option>
                                <option value="">Payment For With DP With Interest</option>
                                <option value="">Payment For No DP With Interest</option>
                                <option value="">Payment For With DP and No Interest</option>
                                <option value="">Payment For No DP No Interest</option>
                            </select>
                            <button type="submit" class="btn btn-success ml-2">Go</button>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                            <select class="form-control mr-2" name="">
                                <option value="" selected="" disabled>View Payment Detail</option>
                                <option value="">Detail for Order #00123</option>
                                <option value="">Detail for Order #00123</option>
                            </select>
                            <button type="submit" class="btn btn-success ml-2">Go</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Payment for Order: #002301</h6>
                    <div class="table-responsive w-100">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-start">Action</th>
                                    <th class="text-start">#</th>
                                    <th class="text-start">Payment Schedule</th>
                                    <th class="text-start">Due Amount</th>
                                    <th class="text-start">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">1</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">2</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">3</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">4</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">5</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">6</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">7</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">8</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">9</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">10</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">11</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
                                </tr>
                                <tr class="text-end">
                                    <td class="text-start"><button class="btn btn-primary">Pay</button></td>
                                    <td class="text-start">12</td>
                                    <td class="text-start">2023-24-12</td>
                                    <td class="text-start">3300</td>
                                    <td class="text-start">Unpaid</td>
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
