@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Rezervasyon Add</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="javascript:void(0);" enctype="multipart/form-data" id="reservation_inquire">
                                @csrf
                                <input type="hidden" name="status" id="status" value="reservation_check">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room</label>
                                                        <select name="room_id" id="room_id" class="form-control form-select" required>
                                                            <option>Room Choice</option>
                                                            @foreach($rooms as $room)
                                                                <option value="{{$room->id}}">{{$room->room_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="text" class="form-control mydatepicker" name="start_date" id="start_date" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">End Date</label>
                                                        <input type="text" class="form-control mydatepicker2" name="end_date" id="end_date" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-success" type="submit" name="price_inquire" id="price_inquire" value="price_inquire">Inquire Price</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <form>
                        </div>
                        <!-- End Row -->

                        <div class="row" id="available_room">
                            <!-- Row -->
                            <div class="row room_found_row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-4 mb-0">
                                                    <div class="form-group">
                                                        <p class="form-label room_found_result"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->


                            <!-- Row -->
                            <div class="row rez_room_row">
                                <form method="post" action="javascript:void(0);" enctype="multipart/form-data" id="rezervasyon_yap">
                                    @csrf
                                    <input type="hidden" name="rez_status" id="rez_status" value="reservation_make">
                                    <input type="hidden" name="rez_room_id" id="rez_room_id" >
                                    <div class="col-md-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Start Date</label>
                                                            <input type="text" class="form-control rez_start_date" name="rez_start_date" id="rez_start_date" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">End Date</label>
                                                            <input type="text" class="form-control rez_end_date" name="rez_end_date" id="rez_end_date" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Price</label>
                                                            <input type="text" class="form-control rez_price" name="rez_price" id="rez_price" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Discount %</label>
                                                            <input type="text" class="form-control rez_discount" name="rez_discount" id="rez_discount" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Final Price</label>
                                                            <input type="text" class="form-control rez_final_price" name="rez_final_price" id="rez_final_price" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Person Count</label>
                                                            <input type="number" class="form-control rez_person_num" name="rez_person_num" id="rez_person_num" placeholder="Person Count" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Customer Name</label>
                                                            <input type="text" class="form-control rez_customer_name" name="rez_customer_name" id="rez_customer_name" placeholder="Customer Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Customer Surname</label>
                                                            <input type="text" class="form-control rez_customer_surname" name="rez_customer_surname" id="rez_customer_surname" placeholder="Customer Surname" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Customer Phone</label>
                                                            <input type="text" class="form-control rez_customer_phone" name="rez_customer_phone" id="rez_customer_phone" placeholder="Customer Phone" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Customer Mail</label>
                                                            <input type="text" class="form-control rez_customer_mail" name="rez_customer_mail" id="rez_customer_mail" placeholder="Customer Mail" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12 mb-0">
                                                        <div class="form-group">
                                                            <label class="form-label">Customer Address</label>
                                                            <input type="text" class="form-control rez_customer_address" name="rez_customer_address" id="rez_customer_address" placeholder="Customer Address" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-footer mt-2">
                                                    <button class="btn btn-success" type="submit" name="rez_reservation_make" id="rez_reservation_make" value="rez_reservation_make">Make Reservation</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Row -->

                        </div>

                    </div>
                    <!-- CONTAINER CLOSED -->


                </div>
            </div>
            <!--app-content closed-->
        </div>

       
        @section('script')
            <script>
                $(document).ready(function() {
                    $('#available_room').hide();
                    $('.room_found_row').hide();
                    $('.rez_room_row').hide();
                    $('#price_inquire').click(function(){
                        $('#available_room').hide();
                        $('.room_found_row').hide();
                        $('.rez_room_row').hide();
                        var data = $('#reservation_inquire').serialize();
                        $.ajax({
                            type: "POST",
                            url: "{{route('apart.reservation-check')}}",
                            data: data,
                            success: function(data) {
                                var jsonData = JSON.parse(data);
                                if(jsonData.result == 0){
                                    $('#available_room').show();
                                    $('.rez_room_row').hide();
                                    $('.room_found_row').show();
                                    $(".room_found_result").html("No Available Rooms Found!");
                                }
                                if(jsonData.result == 1){
                                    $('#available_room').show();
                                    $('.room_found_row').hide();
                                    $('.rez_room_row').show();
                                    $(".rez_start_date").val(jsonData.start_date);
                                    $(".rez_end_date").val(jsonData.end_date);
                                    $(".rez_price").val(jsonData.price);
                                    $(".rez_discount").val(jsonData.discount);
                                    $(".rez_final_price").val(jsonData.final_price);
                                }
                            },
                            error: function(data) {
                                
                            }
                        });
                    });
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('#room_id').change(function() {
                        var selectoda = $(this).val();
                        $('#rez_room_id').val(selectoda);
                    });
                    $('#rez_reservation_make').click(function(){
                        $.ajax({
                            type: "POST",
                            url: "/myapart/reservation-make",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "rez_status": "reservation_make",
                                "rez_room_id": $('#rez_room_id').val(),
                                "rez_start_date": $('.rez_start_date').val(),
                                "rez_end_date": $('.rez_end_date').val(),
                                "rez_price": $('.rez_price').val(),
                                "rez_discount": $('.rez_discount').val(),
                                "rez_final_price": $('.rez_final_price').val(),
                                "rez_person_num": $('.rez_person_num').val(),
                                "rez_customer_name": $('.rez_customer_name').val(),
                                "rez_customer_surname": $('.rez_customer_surname').val(),
                                "rez_customer_phone": $('.rez_customer_phone').val(),
                                "rez_customer_mail": $('.rez_customer_mail').val(),
                                "rez_customer_address": $('.rez_customer_address').val(),
                            },
                            success: function(data) {
                                swal('Operation Successful', 'Information Added', 'success');
                            },
                            error: function(data) {
                                swal('Rezervasyon Eklendi', 'You will be redirected to the Reservations Page in 5 Seconds.', 'success');
                                setTimeout(function(){   
                                    window.location.assign("/myapart/reservations");
                                }, 5000);
                            }
                        });
                    });
                });
            </script>
        @endsection


@endsection