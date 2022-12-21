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
                            <h1 class="page-title">Blog Update</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.blogs.update',$blog->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="title" id="title" value="{{$blog->title}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Description</label>
                                                        <input type="text" class="form-control" name="description" id="description" value="{{$blog->description}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Keywords</label>
                                                        <input type="text" class="form-control" name="keywords" id="keywords" value="{{$blog->keywords}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Content</label>
                                                        <textarea name="content" class="summernote">{{$blog->content}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Image <small>(The image format can be jpeg,jpg,png and the image size must be less than 5MB.)</small></label>
                                                        <input type="file" class="form-control" name="image" id="image">
                                                        @if(!empty($blog->image))
                                                        <div class="card-body">
                                                            <ul id="lightgallery" class="list-unstyled row">
                                                                <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0" data-responsive="/public/{{$blog->image}}" data-src="/public/{{$blog->image}}">
                                                                    <a href="">
                                                                        <img class="img-responsive br-5" src="/public/{{$blog->image}}">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @endif
                                                        @if($errors->any())
                                                            @foreach($errors->all() as $error)
                                                                <p class="image_upload_error">{{$error}}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-success" type="submit" name="save" value="save">Save</button>
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