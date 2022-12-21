@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Apart Infos</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('apart.apart.update',$apart[0]->customer_id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Name</label>
                                                        <input type="text" class="form-control" name="apart_name" id="apart_name" value="{{$apart[0]->apart_name}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Concept</label>
                                                        <input type="text" class="form-control" name="apart_concept" id="apart_concept" value="{{$apart[0]->apart_concept}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Address</label>
                                                        <input type="text" class="form-control" name="apart_address" id="apart_address" value="{{$apart[0]->apart_address}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Phone 1</label>
                                                        <input type="text" class="form-control" name="apart_phone1" id="apart_phone1" value="{{$apart[0]->apart_phone1}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Phone 2</label>
                                                        <input type="text" class="form-control" name="apart_phone2" id="apart_phone2" value="{{$apart[0]->apart_phone2}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Whatsapp</label>
                                                        <input type="text" class="form-control" name="apart_whatsapp" id="apart_whatsapp" value="{{$apart[0]->apart_whatsapp}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Mail</label>
                                                        <input type="text" class="form-control" name="apart_mail" id="apart_mail" value="{{$apart[0]->apart_mail}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Facebook</label>
                                                        <input type="text" class="form-control" name="apart_facebook" id="apart_facebook" value="{{$apart[0]->apart_facebook}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Instagram</label>
                                                        <input type="text" class="form-control" name="apart_instagram" id="apart_instagram" value="{{$apart[0]->apart_instagram}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Youtube</label>
                                                        <input type="text" class="form-control" name="apart_youtube" id="apart_youtube" value="{{$apart[0]->apart_youtube}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Twitter</label>
                                                        <input type="text" class="form-control" name="apart_twitter" id="apart_twitter" value="{{$apart[0]->apart_twitter}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Description</label>
                                                        <textarea name="apart_description" class="summernote">{{$apart[0]->apart_description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Info</label>
                                                        <textarea name="apart_info" class="summernote">{{$apart[0]->apart_info}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Price</label>
                                                        <input type="number" class="form-control" name="apart_price" id="apart_price" value="{{$apart[0]->apart_price}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Apart Discount %</label>
                                                        <input type="number" class="form-control" name="apart_discount" id="apart_discount" value="{{$apart[0]->apart_discount}}">
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
                                                                                    <input type="checkbox" class="custom-control-input" name="next_sea" id="next_sea" value="{{$apart[0]->next_sea}}" @if(!empty($apart[0]->next_sea)) checked @endif>
                                                                                    <span class="custom-control-label">next sea</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="spa" id="spa" value="{{$apart[0]->spa}}" @if(!empty($apart[0]->spa)) checked @endif>
                                                                                    <span class="custom-control-label">Spa</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="restaurant" id="restaurant" value="{{$apart[0]->restaurant}}" @if(!empty($apart[0]->restaurant)) checked @endif>
                                                                                    <span class="custom-control-label">Restaurant</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="disabled_friendly" id="disabled_friendly" value="{{$apart[0]->disabled_friendly}}" @if(!empty($apart[0]->disabled_friendly)) checked @endif>
                                                                                    <span class="custom-control-label">disabled friendly</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="laundry" id="laundry" value="{{$apart[0]->laundry}}" @if(!empty($apart[0]->laundry)) checked @endif>
                                                                                    <span class="custom-control-label">laundry</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="car_park" id="car_park" value="{{$apart[0]->car_park}}" @if(!empty($apart[0]->car_park)) checked @endif>
                                                                                    <span class="custom-control-label">car_park</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="wifi" id="wifi" value="{{$apart[0]->wifi}}" @if(!empty($apart[0]->wifi)) checked @endif>
                                                                                    <span class="custom-control-label">Wifi</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="rent_car" id="rent_car" value="{{$apart[0]->rent_car}}" @if(!empty($apart[0]->rent_car)) checked @endif>
                                                                                    <span class="custom-control-label">rent car</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="transfer" id="transfer" value="{{$apart[0]->transfer}}" @if(!empty($apart[0]->transfer)) checked @endif>
                                                                                    <span class="custom-control-label">transfer</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="bath" id="bath" value="{{$apart[0]->bath}}" @if(!empty($apart[0]->bath)) checked @endif>
                                                                                    <span class="custom-control-label">bath</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="pool" id="pool" value="{{$apart[0]->pool}}" @if(!empty($apart[0]->pool)) checked @endif>
                                                                                    <span class="custom-control-label">pool</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="wheelchair" id="wheelchair" value="{{$apart[0]->wheelchair}}" @if(!empty($apart[0]->wheelchair)) checked @endif>
                                                                                    <span class="custom-control-label">wheelchair</span>
                                                                                </label>
                                                                                <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                    <input type="checkbox" class="custom-control-input" name="kid_friendly" id="kid_friendly" value="{{$apart[0]->kid_friendly}}" @if(!empty($apart[0]->kid_friendly)) checked @endif>
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

        @if($errors->any())
            <script>swal('Hata!', 'Please try again', 'error')</script>
        @endif
        @if(isset($_GET['update']))
            <script>swal('Operation Successful', 'Information Updated', 'success')</script>
        @endif

        @endsection

@endsection