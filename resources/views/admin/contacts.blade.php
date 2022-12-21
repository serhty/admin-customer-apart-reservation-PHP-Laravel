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
                            <h1 class="page-title">Contact</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.contacts.update',1)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone" id="phone" value="{{$contacts->phone}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Mail</label>
                                                        <input type="text" class="form-control" name="mail" id="mail" value="{{$contacts->mail}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" class="form-control" name="address" id="address" value="{{$contacts->address}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Location</label>
                                                        <input type="text" class="form-control" name="location" id="location" value="{{$contacts->location}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Facebook</label>
                                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{$contacts->facebook}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Instagram</label>
                                                        <input type="text" class="form-control" name="instagram" id="instagram" value="{{$contacts->instagram}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Twitter</label>
                                                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$contacts->twitter}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Youtube</label>
                                                        <input type="text" class="form-control" name="youtube" id="youtube" value="{{$contacts->youtube}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Linkedin</label>
                                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$contacts->linkedin}}">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-warning" type="submit" name="save" value="save">save</button>
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
        

        @if($errors->any())
            @section('script')
                <script>swal('Hata!', 'Please try again', 'error')</script>
            @endsection
        @endif

        @if(isset($_GET['update']))
            @section('script')
                <script>swal('Operation Successful', 'Information Updated', 'success')</script>
            @endsection
        @endif

@endsection