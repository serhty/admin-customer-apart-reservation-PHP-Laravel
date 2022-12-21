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
                            <h1 class="page-title">Settings</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.settings.update',1)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Site URL</label>
                                                        <input type="text" class="form-control" name="site_url" id="site_url" value="{{$settings->site_url}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Site Title</label>
                                                        <input type="text" class="form-control" name="site_title" id="site_title" value="{{$settings->site_title}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Site Description</label>
                                                        <input type="text" class="form-control" name="site_description" id="site_description" value="{{$settings->site_description}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Site Keywords</label>
                                                        <input type="text" class="form-control" name="site_keywords" id="site_keywords" value="{{$settings->site_keywords}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">About</label>
                                                        <textarea name="about" class="summernote">{{$settings->about}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">User Agreement</label>
                                                        <textarea name="user_agreement" class="summernote">{{$settings->user_agreement}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Cookie Policy</label>
                                                        <textarea name="cookie_policy" class="summernote">{{$settings->cookie_policy}}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Logo <small>(The image format can be jpeg,jpg,png and the image size must be less than 5MB.)</small></label>
                                                        @if(!empty($settings->logo))
                                                        <div class="card-body">
                                                            <ul id="lightgallery" class="list-unstyled row">
                                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="/public/{{$settings->logo}}" data-src="/public/{{$settings->logo}}">
                                                                    <a href="">
                                                                        <img class="img-responsive br-5" src="/public/{{$settings->logo}}">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @endif
                                                        <input type="file" class="form-control" name="logo" id="logo">
                                                        @if($errors->any())
                                                            @foreach($errors->all() as $error)
                                                                <p class="image_upload_error">{{$error}}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
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