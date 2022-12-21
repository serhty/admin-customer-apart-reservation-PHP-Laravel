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
                            <h1 class="page-title">Apartments Edit </h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.aparts.update',$apart->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Name</label>
                                                        <input type="text" class="form-control" name="apart_name" id="apart_name" value="{{$apart->apart_name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Concept</label>
                                                        <input type="text" class="form-control" name="apart_concept" id="apart_concept" value="{{$apart->apart_concept}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Address</label>
                                                        <input type="text" class="form-control" name="apart_address" id="apart_address" value="{{$apart->apart_address}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Phone 1</label>
                                                        <input type="text" class="form-control" name="apart_phone1" id="apart_phone1" value="{{$apart->apart_phone1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Phone 2</label>
                                                        <input type="text" class="form-control" name="apart_phone2" id="apart_phone2" value="{{$apart->apart_phone2}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Whatsapp</label>
                                                        <input type="text" class="form-control" name="apart_whatsapp" id="apart_whatsapp" value="{{$apart->apart_whatsapp}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Mail</label>
                                                        <input type="text" class="form-control" name="apart_mail" id="apart_mail" value="{{$apart->apart_mail}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Location</label>
                                                        <input type="text" class="form-control" name="apart_location" id="apart_location" value="{{$apart->apart_location}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Facebook</label>
                                                        <input type="text" class="form-control" name="apart_facebook" id="apart_facebook" value="{{$apart->apart_facebook}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Instagram</label>
                                                        <input type="text" class="form-control" name="apart_instagram" id="apart_instagram" value="{{$apart->apart_instagram}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Youtube</label>
                                                        <input type="text" class="form-control" name="apart_youtube" id="apart_youtube" value="{{$apart->apart_youtube}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Twitter</label>
                                                        <input type="text" class="form-control" name="apart_twitter" id="apart_twitter" value="{{$apart->apart_twitter}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Bank 1</label>
                                                        <input type="text" class="form-control" name="apart_bank1" id="apart_bank1" value="{{$apart->apart_bank1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Bank 2</label>
                                                        <input type="text" class="form-control" name="apart_bank2" id="apart_bank2" value="{{$apart->apart_bank2}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Populer Aparts</label>
                                                        <select name="populer" id="populer" class="form-control form-select" required>
                                                            <option value="1" @if($apart->populer==1) selected @endif >Yes</option>
                                                            <option value="0" @if($apart->populer==0) selected @endif >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Recommended Apartments</label>
                                                        <select name="recommended" id="recommended" class="form-control form-select" required>
                                                            <option value="1" @if($apart->recommended==1) selected @endif >Yes</option>
                                                            <option value="0" @if($apart->recommended==0) selected @endif >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Recently Visited Apartments</label>
                                                        <select name="last_visited" id="last_visited" class="form-control form-select" required>
                                                            <option value="1" @if($apart->last_visited==1) selected @endif >Yes</option>
                                                            <option value="0" @if($apart->last_visited==0) selected @endif >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Price</label>
                                                        <input type="number" class="form-control" name="apart_price" id="apart_price" value="{{$apart->apart_price}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Discount %</label>
                                                        <input type="number" class="form-control" name="apart_discount" id="apart_discount" value="{{$apart->apart_discount}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Apartment Features</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mt-4">
                                                                <div class="col-xl-12 col-md-12">
                                                                    <div class="form-group m-0">
                                                                        <div class="custom-controls-stacked">
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="next_sea" id="next_sea" value="{{$apart->next_sea}}" @if(!empty($apart->next_sea)) checked @endif>
                                                                                <span class="custom-control-label">next sea</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="spa" id="spa" value="{{$apart->spa}}" @if(!empty($apart->spa)) checked @endif>
                                                                                <span class="custom-control-label">Spa</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="restaurant" id="restaurant" value="{{$apart->restaurant}}" @if(!empty($apart->restaurant)) checked @endif>
                                                                                <span class="custom-control-label">Restaurant</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="disabled_friendly" id="disabled_friendly" value="{{$apart->disabled_friendly}}" @if(!empty($apart->disabled_friendly)) checked @endif>
                                                                                <span class="custom-control-label">disabled friendly</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="laundry" id="laundry" value="{{$apart->laundry}}" @if(!empty($apart->laundry)) checked @endif>
                                                                                <span class="custom-control-label">laundry</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="car_park" id="car_park" value="{{$apart->car_park}}" @if(!empty($apart->car_park)) checked @endif>
                                                                                <span class="custom-control-label">car_park</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="wifi" id="wifi" value="{{$apart->wifi}}" @if(!empty($apart->wifi)) checked @endif>
                                                                                <span class="custom-control-label">Wifi</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="rent_car" id="rent_car" value="{{$apart->rent_car}}" @if(!empty($apart->rent_car)) checked @endif>
                                                                                <span class="custom-control-label">rent car</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="transfer" id="transfer" value="{{$apart->transfer}}" @if(!empty($apart->transfer)) checked @endif>
                                                                                <span class="custom-control-label">transfer</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="bath" id="bath" value="{{$apart->bath}}" @if(!empty($apart->bath)) checked @endif>
                                                                                <span class="custom-control-label">bath</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="pool" id="pool" value="{{$apart->pool}}" @if(!empty($apart->pool)) checked @endif>
                                                                                <span class="custom-control-label">pool</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="wheelchair" id="wheelchair" value="{{$apart->wheelchair}}" @if(!empty($apart->wheelchair)) checked @endif>
                                                                                <span class="custom-control-label">wheelchair</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="kid_friendly" id="kid_friendly" value="{{$apart->kid_friendly}}" @if(!empty($apart->kid_friendly)) checked @endif>
                                                                                <span class="custom-control-label">kid friendly</span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">description (Customer Added Apart description)</label>
                                                        <textarea name="apart_description" class="summernote">{{$apart->apart_description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">info (Customer Added Apart info)</label>
                                                        <textarea name="apart_info" class="summernote">{{$apart->apart_info}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Note (Our Note The Customer Does Not See)</label>
                                                        <textarea name="apart_note" class="summernote">{{$apart->apart_note}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row col-md-12 mb-0">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Images <small>(The image format can be jpeg,jpg,png and the image size must be less than 5MB.)</small></label>
                                                        <input type="file" class="form-control" name="image[]" id="image[]" multiple="multiple">
                                                        @if(!empty($apart_pictures))
                                                            <div class="card-body">
                                                                <ul class="list-unstyled row">
                                                                    @foreach($apart_pictures as $picture)
                                                                    <li class="col-xs-6 col-sm-4 col-md-4 col-xl-3 mb-5 border-bottom-0 Detail_img_li" data-responsive="/public/{{$picture->image}}" data-src="/public/{{$picture->image}}">
                                                                    <a href="/public/{{$picture->image}}"
                                                                        data-fancybox="Apart Images"
                                                                        data-caption="Apart Images"
                                                                        data-speed="700">
                                                                            <img class="img-responsive br-5 Detail_img" src="/public/{{$picture->image}}">
                                                                        </a>
                                                                        @if($picture->cover!=1)
                                                                        <button class="btn btn-success" type="submit" name="make_cover" value="{{$picture->id}}" style="width:49%; margin-top:2px;">Make Cover</button>
                                                                        @endif
                                                                        <button class="btn btn-danger" type="submit" name="image_delete" value="{{$picture->id}}" style="width:49%; margin-top:2px;">Delete</button>
                                                                    </li>
                                                                    @endforeach
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

        @section('script')
        <script>
        $(function(){
            $('#next_sea').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#spa').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#restaurant').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#disabled_friendly').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#laundry').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#car_park').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#wifi').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#rent_car').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#transfer').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#bath').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#pool').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#wheelchair').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#kid_friendly').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });
        });
        </script>

        @if(isset($_GET['add']))
            <script>swal('Operation Successful', 'Information Added', 'success')</script>
        @endif
        @if(isset($_GET['update']))
            <script>swal('Operation Successful', 'Information Updated', 'success')</script>
        @endif

        @endsection

        
@endsection