@extends('layouts.admin.dashboard')

@section('css')

@endsection

@section('title')
    <h3>Payroll</h3>
@endsection

@section('template')
    <div id="root">
            <form name="item">
                <div class="card card-block">
                    <div class="row sameheight-container">
                        <div class="col-md-6">
                            <div class="card card-block sameheight-item" style="height: 307px;">
                                <form>
                                    <div class="form-group row">
                                        <label for="employee" class="col-sm-3 form-control-label">Employee</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="employee" placeholder="Employee Name"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="daily_rate" class="col-sm-3 form-control-label">Daily Rate</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="daily_rate" placeholder="Rate"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tax_code" class="col-sm-3 form-control-label">Tax Code</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tax_code" placeholder="Tax Code"> </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-block sameheight-item" style="height: 307px;">
                                <form>
                                    <div class="form-group row">
                                        <label for="payroll_period" class="col-sm-3 form-control-label">Payroll Period</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="payroll_period" placeholder="Payroll Period"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pay_date" class="col-sm-3 form-control-label">Pay Date</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="pay_date" placeholder="Pay Date"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="pay_mode" class="col-sm-3 form-control-label">Pay Mode</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="pay_mode" placeholder="Pay Mode"> </div>
                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-pill-left btn-primary pull-right">View DTR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row sameheight-container">
                        <div class="col-md-6">
                            <div class="card card-block sameheight-item" style="height: 307px;">
                                <form>
                                    <h5>Earnings</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="regular_day" class="col-sm-3 form-control-label">Regular Day</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="regular_day" placeholder="Regular Day"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="special_holiday" class="col-sm-3 form-control-label">Special Holiday</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="special_holiday" placeholder="Special Holiday"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="regular_holiday" class="col-sm-3 form-control-label">Regular Holiday</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="regular_holiday" placeholder="Regular Holiday"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="allowance" class="col-sm-3 form-control-label">Allowance</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="allowance" placeholder="Allowance"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total_taxable" class="col-sm-3 form-control-label">Total Taxable</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total_taxable" placeholder="Total Taxable"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="emergency_allowance" class="col-sm-3 form-control-label">Emerg. Allow</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="emergency_allowance" placeholder="Emergency Allowance"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="regular_ot" class="col-sm-3 form-control-label">Regular OT</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="regular_ot" placeholder="Regular OT"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="rest_day_ot" class="col-sm-3 form-control-label">Rest Day OT</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rest_day_ot" placeholder="Rest Day OT"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="de_minimis" class="col-sm-3 form-control-label">De Minimis</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="de_minimis" placeholder="De Minimis"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="adjustments" class="col-sm-3 form-control-label">Adjustments</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="adjustments" placeholder="Adjustments"> </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-block sameheight-item" style="height: 307px;">
                                <form>
                                    <h5>Deductions</h5>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="lates" class="col-sm-3 form-control-label">Lates</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lates" placeholder="Lates"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="with_tax" class="col-sm-3 form-control-label">With Tax</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="with_tax" placeholder="With Tax"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sss" class="col-sm-3 form-control-label">SSS</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="sss" placeholder="SSS"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hdmf" class="col-sm-3 form-control-label">HDMF</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="hdmf" placeholder="HDMF"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phic" class="col-sm-3 form-control-label">PHIC</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="phic" placeholder="PHIC"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="loans" class="col-sm-3 form-control-label">Loans</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="loans" placeholder="Loans"> </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="total" class="col-sm-3 form-control-label">Total</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="total" placeholder="Total"> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row sameheight-container">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="gross_pay" class="col-sm-3 form-control-label">Gross Pay</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="gross_pay" placeholder="Gross Pay"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="deduction" class="col-sm-3 form-control-label">Deduction</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="deduction" placeholder="Deductions"> </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="net_pay" class="col-sm-3 form-control-label">Net Pay</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="net_pay" placeholder="Net Pay"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
@endsection

@push('scripts')

@endpush
