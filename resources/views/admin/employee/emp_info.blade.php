@extends('layouts.admin.dashboard')

@section('css')

@endsection

@section('title')
    <h3>Employee Information</h3>
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
                                <label for="optr_no" class="col-sm-3 form-control-label">Operator No.</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="optr_no" placeholder="Operator No.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="position" class="col-sm-3 form-control-label">Position</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="position" placeholder="Position"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="employee_name" class="col-sm-3 form-control-label">Employee Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="employee_name" placeholder="Employee Name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-block sameheight-item" style="height: 307px;">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <div class="images-container pull-right">
                                        <div class="image-container">
                                            <div class="controls">
                                                <a href="" class="control-btn move">
                                                    <i class="fa fa-arrows"></i>
                                                </a>
                                                <!--
                                -->
                                                <a href="" class="control-btn star">
                                                    <i class="fa"></i>
                                                </a>
                                                <!--
                                -->
                                                <a href="#" class="control-btn remove" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </div>
                                            <div class="image" style="background-image:url('#')"></div>
                                        </div>
                                        <a href="#" class="add-image" data-toggle="modal" data-target="#modal-media">
                                            <div class="image-container new">
                                                <div class="image">
                                                    <i class="fa fa-plus"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row sameheight-container">
                <div class="col-md-6">
                    <div class="card card-block sameheight-item" style="height: 307px;">
                        <form>
                            <div class="form-group row">
                                <label for="daily_rate" class="col-sm-3 form-control-label">Daily Rate</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="daily_rate" placeholder="Daily Rate"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="sss_no" class="col-sm-3 form-control-label">SSS No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="sss_no" placeholder="SSS No."> </div>
                            </div>
                            <div class="form-group row">
                                <label for="pagibig_no" class="col-sm-3 form-control-label">Pagibig No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pagibig_no" placeholder="Pagibig No."> </div>
                            </div>
                            <div class="form-group row">
                                <label for="philheath" class="col-sm-3 form-control-label">Philhealth</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="philheath" placeholder="Philhealth"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="tin_id" class="col-sm-3 form-control-label">TIN ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tin_id" placeholder="TIN ID"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="tax_status" class="col-sm-3 form-control-label">Tax Status</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tax_status" placeholder="Tax Status"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="pay_mode" class="col-sm-3 form-control-label">Pay Mode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pay_mode" placeholder="Pay Mode"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="late" class="col-sm-3 form-control-label">No. of Minutes (Late)</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="late" placeholder="Lates"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="break_hr" class="col-sm-3 form-control-label">Break Time Hr</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="break_hr" placeholder="Break Time Hour"> </div>
                            </div>
                            <div class="form-group row">
                                <label for="working_hr" class="col-sm-3 form-control-label">Working Hour</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="working_hr" placeholder="Working Hour"> </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <section class="section">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block row">
                                            <div class="col-md-6">
                                                <h3 class="title"> Work Schedule </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-pill-right btn-primary pull-right">Add Data</button>
                                            </div>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Day</th>
                                                        <th>Time Schedule</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block row">
                                            <div class="col-md-6">
                                                <h3 class="title"> Leave Entitlement </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-pill-right btn-primary pull-right">Add Data</button>
                                            </div>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Credit</th>
                                                        <th>Forfeited</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block row">
                                            <div class="col-md-6">
                                                <h3 class="title"> Allowance </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-pill-right btn-primary pull-right">Add Data</button>
                                            </div>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Ammount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block row">
                                            <div class="col-md-6">
                                                <h3 class="title"> De Minimis </h3>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-pill-right btn-primary pull-right">Add Data</button>
                                            </div>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Ammount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Table cell</td>
                                                        <td>Table cell</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <hr>
        </div>
    </form>
</div>
@endsection

@section('modal')

@endsection

@push('scripts')

@endpush
