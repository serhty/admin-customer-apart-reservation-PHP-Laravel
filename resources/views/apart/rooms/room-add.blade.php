@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Room Add</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('apart.rooms.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Name</label>
                                                        <input type="text" class="form-control" name="room_name" id="room_name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Concept</label>
                                                        <input type="text" class="form-control" name="room_concept" id="room_concept" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Price</label>
                                                        <input type="number" class="form-control" name="room_price" id="room_price">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Discount (%)</label>
                                                        <input type="number" class="form-control" name="room_discount" id="room_discount">
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
                                                                                <input type="checkbox" class="custom-control-input" name="wifi" id="wifi">
                                                                                <span class="custom-control-label">Wifi</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="mini_bar" id="mini_bar">
                                                                                <span class="custom-control-label">Mini Bar</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="bathtub" id="bathtub">
                                                                                <span class="custom-control-label">bathtub</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="ac_dryer_machine" id="ac_dryer_machine">
                                                                                <span class="custom-control-label">ac dryer machine</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="tv" id="tv">
                                                                                <span class="custom-control-label">tv</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="safe" id="safe">
                                                                                <span class="custom-control-label">safe</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="balcony" id="balcony">
                                                                                <span class="custom-control-label">balcony</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="kitchen" id="kitchen">
                                                                                <span class="custom-control-label">kitchen</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="washing_machine" id="washing_machine">
                                                                                <span class="custom-control-label">washing machine</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="refrigerator" id="refrigerator">
                                                                                <span class="custom-control-label">refrigerator</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="dishwasher" id="dishwasher">
                                                                                <span class="custom-control-label">dishwasher</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="air_conditioning" id="air_conditioning">
                                                                                <span class="custom-control-label">air conditioning</span>
                                                                            </label>
                                                                            <label class="custom-control custom-checkbox" style="width: fit-content; margin-bottom: 10px; display: inline-block; margin-right: 25px;">
                                                                                <input type="checkbox" class="custom-control-input" name="smoke_detector" id="smoke_detector">
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
                                                        <label class="form-label">Room Description</label>
                                                        <textarea name="room_description" class="summernote"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Info</label>
                                                        <textarea name="room_info" class="summernote"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Images <small>(The image format can be jpeg,jpg,png and the image size must be less than 5MB.)</small></label>
                                                        <input type="file" class="form-control" name="image[]" id="image[]" multiple="multiple">
                                                        @if($errors->any())
                                                            @foreach($errors->all() as $error)
                                                                <p class="image_upload_error">{{$error}}</p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-success" type="submit" name="add" value="add">Add</button>
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

            $('#air_conditioning').click(function() {
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

        @endsection


@endsection