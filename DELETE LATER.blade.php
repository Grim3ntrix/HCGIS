        <!-- Right card -->
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="down_payment_amount" class="form-label">Product Price</label>
                                    <input type="number" name="down_payment_amount" id="down_payment_amount" value="" class="form-control @error('down_payment_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('down_payment_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="remaining_balance" class="form-label">Description</label>
                                    <input type="number" name="remaining_balance" id="remaining_balance" value="" class="form-control @error('remaining_balance') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('remaining_balance')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="down_payment_amount" class="form-label">DP Amount</label>
                                    <input type="number" name="down_payment_amount" id="down_payment_amount" value="" class="form-control @error('down_payment_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('down_payment_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="remaining_balance" class="form-label">Balance</label>
                                    <input type="number" name="remaining_balance" id="remaining_balance" value="" class="form-control @error('remaining_balance') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('remaining_balance')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="at_need" class="form-label">At Need Price</label>
                                    <input type="number" name="at_need" id="at_need" value="" class="form-control @error('at_need') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('at_need')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="spot_cash" class="form-label">Pre Need (Spot Cash)</label>
                                    <input type="number" name="spot_cash" id="spot_cash" value="" class="form-control @error('spot_cash') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('spot_cash')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->  
                        </div><!-- Row -->

						<div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">  
                                    <label for="wdp_annual_interest" class="form-label">WDP Interest</label>
                                    <input type="number" name="wdp_annual_interest" id="wdp_annual_interest" value="" class="form-control @error('wdp_annual_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_annual_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">      
                                    <label for="wdp_monthly_payment" class="form-label">WDP Monthly</label>
                                    <input type="number" name="wdp_monthly_payment" id="wdp_monthly_payment" value="" class="form-control @error('wdp_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="wdp_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="wdp_end_price" id="wdp_end_price" value="" class="form-control @error('wdp_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    
                                    <label for="ndp_annual_interest" class="form-label">NDP Interest</label>
                                    <input type="number" name="ndp_annual_interest" id="ndp_annual_interest" value="" class="form-control @error('ndp_annual_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_annual_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_monthly_payment" class="form-label">NDP Monthly</label>
                                    <input type="number" name="ndp_monthly_payment" id="ndp_monthly_payment" value="" class="form-control @error('ndp_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="ndp_end_price" id="ndp_end_price" value="" class="form-control @error('ndp_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
							<div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="wdpni_monthly_payment" class="form-label">WDPNI Monthly</label>
                                    <input type="number" name="wdpni_monthly_payment" id="wdpni_monthly_payment" value="" class="form-control @error('wdpni_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="wdpni_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="wdpni_end_price" id="wdpni_end_price" value="" class="form-control @error('wdpni_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
							<div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="ndpni_monthly_payment" class="form-label">NDPNI Monthly</label>
                                    <input type="number" name="ndpni_monthly_payment" id="ndpni_monthly_payment" value="" class="form-control @error('ndpni_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="ndpni_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="ndpni_end_price" id="ndpni_end_price" value="" class="form-control @error('ndpni_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                    </form>
                </div>
            </div>
        </div>