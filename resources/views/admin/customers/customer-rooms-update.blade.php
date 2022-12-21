@extends('admin.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Room update</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('admin.rooms.update',$room->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Name</label>
                                                        <input type="text" class="form-control" name="room_name" id="room_name" value="{{$room->room_name}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Concept</label>
                                                        <input type="text" class="form-control" name="room_concept" id="room_concept" value="{{$room->room_concept}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Price</label>
                                                        <input type="number" class="form-control" name="room_price" id="room_price" value="{{$room->room_price}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Discount (%)</label>
                                                        <input type="number" class="form-control" name="room_discount" id="room_discount" value="{{$room->room_discount}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h3 class="card-title">Room Features</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row mt-4">
                                                                <div class="col-xl-12 col-md-12">
                                                                    <div class="form-group m-0">
                                                                        <div class="custom-controls-stacked">
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="wifi" id="wifi" value="{{$room->wifi}}" @if(!empty($room->wifi)) checked @endif>
                                                                                <span class="custom-control-label">Wifi</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="mini_bar" id="mini_bar" value="{{$room->mini_bar}}" @if(!empty($room->mini_bar)) checked @endif>
                                                                                <span class="custom-control-label">Mini Bar</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="bathtub" id="bathtub" value="{{$room->bathtub}}" @if(!empty($room->bathtub)) checked @endif>
                                                                                <span class="custom-control-label">bathtub</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="ac_dryer_machine" id="ac_dryer_machine" value="{{$room->ac_dryer_machine}}" @if(!empty($room->ac_dryer_machine)) checked @endif>
                                                                                <span class="custom-control-label">ac dryer machine</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="tv" id="tv" value="{{$room->tv}}" @if(!empty($room->tv)) checked @endif>
                                                                                <span class="custom-control-label">tv</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="safe" id="safe" value="{{$room->safe}}" @if(!empty($room->safe)) checked @endif>
                                                                                <span class="custom-control-label">safe</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="balcony" id="balcony" value="{{$room->balcony}}" @if(!empty($room->balcony)) checked @endif>
                                                                                <span class="custom-control-label">balcony</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="kitchen" id="kitchen" value="{{$room->kitchen}}" @if(!empty($room->kitchen)) checked @endif>
                                                                                <span class="custom-control-label">kitchen</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="washing_machine" id="washing_machine" value="{{$room->washing_machine}}" @if(!empty($room->washing_machine)) checked @endif>
                                                                                <span class="custom-control-label">washing machine</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="refrigerator" id="refrigerator" value="{{$room->refrigerator}}" @if(!empty($room->refrigerator)) checked @endif>
                                                                                <span class="custom-control-label">refrigerator</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="dishwasher" id="dishwasher" value="{{$room->dishwasher}}" @if(!empty($room->dishwasher)) checked @endif>
                                                                                <span class="custom-control-label">dishwasher</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="air conditioning" id="air conditioning" value="{{$room->air conditioning}}" @if(!empty($room->air conditioning)) checked @endif>
                                                                                <span class="custom-control-label">air conditioning</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="smoke_detector" id="smoke_detector" value="{{$room->smoke_detector}}" @if(!empty($room->smoke_detector)) checked @endif>
                                                                                <span class="custom-control-label">smoke detector</span>
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
                                                        <label class="form-label">Room description</label>
                                                        <textarea name="room_description" class="summernote">{{$room->room_description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room info</label>
                                                        <textarea name="room_info" class="summernote">{{$room->room_info}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Images <small>(The image format can be jpeg,jpg,png and the image size must be less than 5MB.)</small></label>
                                                        <input type="file" class="form-control" name="resim[]" id="resim[]" multiple="multiple">
                                                        @if(!empty($room_pictures))
                                                            <div class="card-body">
                                                                <ul class="list-unstyled row">
                                                                    @foreach($room_pictures as $picture)
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
                                                <button class="btn btn-warning" type="submit" name="save" value="save">save</button>
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

        @section('script')

        <script>
        $(function(){
            $('#wifi').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#mini_bar').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#bathtub').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#ac_dryer_machine').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#tv').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#safe').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#balcony').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#kitchen').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#washing_machine').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#refrigerator').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#dishwasher').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#air conditioning').click(function() {
                if($(this).is(':checked'))
                    $(this).val('1');
                else
                    $(this).val('0');
            });

            $('#smoke_detector').click(function() {
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