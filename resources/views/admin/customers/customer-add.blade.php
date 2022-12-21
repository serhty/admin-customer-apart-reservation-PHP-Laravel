@extends('admin.body')
@section('title','Apart Admin')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Customer Add</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.customers.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Name</label>
                                                        <input type="text" class="form-control" name="name" id="name">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Surname</label>
                                                        <input type="text" class="form-control" name="surname" id="surname">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                    <label class="form-label">Customer Phone</label>
                                                        <input type="text" class="form-control" name="phone" id="phone">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Mail</label>
                                                        <input type="text" class="form-control" name="mail" id="mail">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Username</label>
                                                        <input type="text" class="form-control" name="username" id="username">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Password</label>
                                                        <input type="text" class="form-control" name="password" id="password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Start Date</label>
                                                        <input type="text" class="form-control mydatepicker" name="start_date" id="start_date">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer End Date</label>
                                                        <input type="text" class="form-control mydatepicker2" name="end_date" id="end_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Apart Name</label>
                                                        <input type="text" class="form-control" name="apart_name" id="apart_name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Note</label>
                                                        <textarea name="description" class="summernote"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-success" type="submit">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <form>
                        </div>
                        <!-- End Row -->

                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>

        
@endsection