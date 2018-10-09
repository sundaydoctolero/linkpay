@extends('layouts.admin.dashboard')

@section('title')
    <h3>Leave Type Table <span>Setup</span></h3>
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
                                            <th class="text-center">#</th>
                                            <th class="text-center">Type</th>
                                            <th class="text-center">Code</th>
                                            <th class="text-center">%</th>
                                            <th class="text-center">Remarks</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="(leave_type,index) in get_leave_type">
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
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
                <form method="post" action="/admin/setup/pagibig" @submit.prevent="onSubmit">
                    <div class="modal-body modal-tab-container">
                        <div class="card card-block">
                            <div class="title-block">
                                <h3 class="title"></h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Type</label>
                                        <input type="text" class="form-control" v-model="form.leave_type"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Code</label>
                                        <input type="text" class="form-control" v-model="form.leave_code"> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">%</label>
                                        <input type="text" class="form-control" v-model="form.leave_percentage"> </div>
                                    <div class="form-group">
                                        <label class="control-label">Remarks</label>
                                        <input type="text" class="form-control" v-model="form.remarks"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
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
               get_leave_type: [],
           },
           mounted(){
            axios.get('/admin/setup/get_leave_type')
                    .then(response => this.get_leave_type = response.data);
           }
        });

        app = new Vue({
            el: '#modal-form',
            data: {
                form: new Form({
                    leave_type: 0,
                    leave_code: 0,
                    leave_percentage: 0,

                })
            },
            methods: {
                onSubmit(){
                    console.log(this.form);
                }
            }
        });
    </script>
@endpush
