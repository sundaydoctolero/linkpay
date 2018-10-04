@extends('layouts.admin.dashboard')

@section('title')
    <h3>SSS Table <span>Setup</span></h3>
@endsection

@section('template')
    <section class="section" id="root">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <!--
                            <h3 class="title">
                                <button type="button" class="btn btn-pill-right btn-primary"> Add New Record</button>
                            </h3>
                            -->
                            <a class="btn btn-pill-right btn-primary" href="#" data-toggle="modal" data-target="#modal-form">
                                <i class="fa fa-plus-circle icon"></i> Add New Record</a>
                        </div>
                        <section class="example">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">Range of Compensation</th>
                                        <th rowspan="3" class="text-center">Monthly Salary Credit</th>
                                        <th colspan="7" class="text-center">Employer - Employee</th>
                                        <th rowspan="3" class="text-center">Action</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center" rowspan="2">From</th>
                                        <th class="text-center" rowspan="2">To</th>
                                        <th colspan="3" class="text-center">Social Security</th>
                                        <th class="text-center">EC</th>
                                        <th colspan="3" class="text-center">Total Contribution</th>

                                    </tr>
                                    <tr>
                                        <th class="text-center">ER</th>
                                        <th class="text-center">EE</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center">ER</th>
                                        <th class="text-center">ER</th>
                                        <th class="text-center">EE</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="sss in get_sss">
                                        <td class="text-center" v-text="sss.salary_from"></td>
                                        <td class="text-center" v-text="sss.salary_to"></td>
                                        <td v-text="sss.salary_credit"></td>
                                        <td v-text="sss.employer_share"></td>
                                        <td v-text="sss.employee_share"></td>
                                        <td v-text="sss.sss_total"></td>
                                        <td v-text="sss.employer_ec_share"></td>
                                        <td v-text="sss.employer_share_total"></td>
                                        <td v-text="sss.employee_share_total"></td>
                                        <td v-text="sss.total_contribution"></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-pill-left btn-info" data-toggle="modal" data-target="#modal-form">Modify</button>
                                            <button type="button" class="btn btn-pill-right btn-danger" data-toggle="modal" data-target="#confirm-modal">Delete</button>
                                        </td>
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
@endsection

@section('modal')
    <div class="modal fade" id="modal-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Record</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <form role="form">
                    <div class="modal-body modal-tab-container">
                        <div class="card card-block">
                            <div class="title-block">
                                <h3 class="title"></h3>
                            </div>
                                <div class="form-group">
                                    <label class="control-label">Salary From</label>
                                    <input type="text" class="form-control underlined" v-model="form.salary_from"> </div>
                                <div class="form-group">
                                    <label class="control-label">Salary To</label>
                                    <input type="text" class="form-control underlined" v-model="form.salary_to"> </div>
                                <div class="form-group">
                                    <label class="control-label">Salary Credit</label>
                                    <input type="text" class="form-control underlined" v-model="form.salary_credit"> </div>
                                <div class="form-group">
                                    <label class="control-label">Employer Share</label>
                                    <input type="text" class="form-control underlined" v-model="form.employer_share"> </div>
                                <div class="form-group">
                                    <label class="control-label">Employee Share</label>
                                    <input type="text" class="form-control underlined" v-model="form.employee_share"> </div>
                                <div class="form-group">
                                    <label class="control-label">Employer EC Share</label>
                                    <input type="text" class="form-control underlined" v-model="form.employer_ec_share"> </div>
                                <div class="form-group">
                                    <label class="control-label">Employer Share Total</label>
                                    <input type="text" class="form-control underlined" v-model="form.employer_share_total"> </div>
                                <div class="form-group">
                                    <label class="control-label">Employee Share Total</label>
                                    <input type="text" class="form-control underlined" v-model="form.employee_share_total"> </div>
                                <div class="form-group">
                                    <label class="control-label">Total Contribution</label>
                                    <input type="text" class="form-control underlined" v-model="form.total_contribution"> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection


@push('scripts')
    <script>
        class Errors {
            constructor(){
                this.errors = {};
            }

            get(field){
                if(this.errors[field]){
                    return this.errors[field][0];
                }
            }

            has(field){
                return this.errors.hasOwnProperty(field);
            }

            put(errors){
                this.errors = errors;
            }

            clear(field){
                delete this.errors[field];
            }

            any(){
                return Object.keys(this.errors).length > 0;
            }

        }
        class Form {
            constructor(data){
                this.originalData = data;

                for(let field in data){
                    this[field] = data[field];
                }

                this.errors = new Errors();

            }
            reset(){
                for(let field in this.originalData) {
                    this[field]  = '';
                }
                this.errors.clear();
            }

            data(){
                //let data = Object.assign({},this);
                //delete data.originalData;
                //delete data.errors;
                let data = {};

                for(let property in this.originalData){
                    data[property] = this[property];
                }

                return data;
            }

            submit(requestType, url ){
                return new Promise((resolve,reject)=>{
                            axios[requestType](url,this.data())
                                    .then(response => {
                                    this.onSuccess(response.data);
                                    resolve(response.data);
                            })
                            .catch(error => {
                                    this.onFail(error.response.data);
                                    reject(error.response.data);
                                });
                            });
        }

        onSuccess(data){
            alert(data.message);
            this.reset();
        }


        onFail(errors){
            this.errors.put(errors)
        }
        }

        app = new Vue({
           el: '#root',
           data: {
               get_sss: [],
           },
           mounted(){
            axios.get('/admin/setup/get_sss')
                    .then(response => this.get_sss = response.data);
           }
        });

        app = new Vue({
            el: '#modal-form',
            data: {
                form: new Form({
                    salary_from: 0,
                    salary_to: 0,
                    salary_credit: 0,
                    employer_share: 0,
                    employee_share: 0,
                    sss_total: 0,
                    employer_ec_share: 0,
                    employer_share_total: 0,
                    employee_share_total:0,
                    total_contribution: 0
                })
            },
        });


    </script>
@endpush
