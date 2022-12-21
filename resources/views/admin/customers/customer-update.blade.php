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
                            <h1 class="page-title">Customer Update / {{$customer->name}} / @if($customer->status==1) Active @elseif($customer->status==2) Expired @endif</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.customers.update',$customer->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" value="{{$customer->name}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Surname</label>
                                                        <input type="text" class="form-control" name="surname" id="surname" value="{{$customer->surname}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                    <label class="form-label">Customer Phone</label>
                                                        <input type="text" class="form-control" name="phone" id="phone" value="{{$customer->phone}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Mail</label>
                                                        <input type="text" class="form-control" name="mail" id="mail" value="{{$customer->mail}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Start Date</label>
                                                        <input type="text" class="form-control mydatepicker" name="started_date" value="{{$customer->started_date}}" id="started_date">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer End Date</label>
                                                        <input type="text" class="form-control mydatepicker2" name="ended_date" value="{{$customer->ended_date}}" id="ended_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Apart Name</label>
                                                        <input type="text" class="form-control" name="apart_name" id="apart_name" value="{{$customer->apart_name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Description & Note</label>
                                                        <textarea name="description" class="summernote">{{$customer->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                @if($customer->status==1)
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
                                                <button class="btn btn-secondary" type="submit" name="expired" value="expired">Expired</button>
                                                <button class="btn btn-danger" type="submit" name="delete" value="delete">Delete</button>
                                                @endif
                                                @if($customer->status==2)
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
                                                <button class="btn btn-info" type="submit" name="active" value="active">Active</button>
                                                <button class="btn btn-danger" type="submit" name="delete" value="delete">Delete</button>
                                                @endif
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

        @if(isset($_GET['add']))
            @section('script')
                <script>swal('Operation Successful', 'Information Added', 'success')</script>
            @endsection
        @endif

        @if(isset($_GET['update']))
            @section('script')
                <script>swal('Operation Successful', 'Information Updated', 'success')</script>
            @endsection
        @endif

        
@endsection