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
                            <h1 class="page-title">Support Detail</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.supports.update',$support->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name" id="name" value="{{$support->name}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Surname</label>
                                                        <input type="text" class="form-control" name="surname" id="surname" value="{{$support->surname}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone" id="phone" value="{{$support->phone}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Mail</label>
                                                        <input type="text" class="form-control" name="mail" id="mail" value="{{$support->mail}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Support Date</label>
                                                        <input type="text" class="form-control" name="support_date" id="support_date" value="{{$support->support_date}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Message</label>
                                                        <textarea name="message" class="summernote">{{$support->message}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            @if($support->status==2)
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Reply Date</label>
                                                        <input type="text" class="form-control" name="reply_date" id="reply_date" value="{{$support->reply_date}}" >
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Reply</label>
                                                        <textarea name="reply" class="summernote">{{$support->reply}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Description</label>
                                                        <textarea name="description" class="summernote">{{$support->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
                                                @if($support->status==1)
                                                <button class="btn btn-info" type="submit" name="reply" value="reply">Reply</button>
                                                @endif
                                                <button class="btn btn-danger" type="submit" name="delete" value="delete">Delete</button>
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