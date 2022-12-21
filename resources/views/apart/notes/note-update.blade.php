@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Note Update</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('apart.notes.update',$note->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Note</label>
                                                        <input type="text" class="form-control" name="note" id="note" value="{{$note->note}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
                                                @if($note->status==2)
                                                <button class="btn btn-info" type="submit" name="done" value="done">Done</button>
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