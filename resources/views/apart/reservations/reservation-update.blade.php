@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Reservation Update / @if($reservation->status == 1)Approved @elseif($reservation->status == 2) Waiting for approval @endif</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row">
                            <form method="post" action="{{route('apart.reservations.update',$reservation->id)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room</label>
                                                        @foreach($rooms as $room)
                                                            @if($room->id == $reservation->room_id)
                                                                <input type="text" class="form-control" value="{{$room->room_name}}" readonly>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">reservation date</label>
                                                        <input type="text" class="form-control" name="reservation_date" id="reservation_date" value="{{$reservation->reservation_date}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="text" class="form-control" name="start_date" id="start_date" value="{{$reservation->start_date}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">End Date</label>
                                                        <input type="text" class="form-control" name="end_date" id="end_date" value="{{$reservation->end_date}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">price</label>
                                                        <input type="text" class="form-control" name="price" id="price" value="{{$reservation->price}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Discount</label>
                                                        <input type="text" class="form-control" name="discount" id="discount" value="{{$reservation->discount}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">payable</label>
                                                        <input type="text" class="form-control" name="payable" id="payable" value="{{$reservation->payable}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">booker</label>
                                                        <input type="text" class="form-control" name="booker" id="booker" value="{{$reservation->booker}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">person count</label>
                                                        <input type="text" class="form-control" name="count_people" id="count_people" value="{{$reservation->count_people}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Name</label>
                                                        <input type="text" class="form-control" name="customer_name" id="customer_name" value="{{$reservation->customer_name}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Surname</label>
                                                        <input type="text" class="form-control" name="customer_surname" id="customer_surname" value="{{$reservation->customer_surname}}" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Phone</label>
                                                        <input type="text" class="form-control" name="customer_phone" id="customer_phone" value="{{$reservation->customer_phone}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Mail</label>
                                                        <input type="text" class="form-control" name="customer_mail" id="customer_mail" value="{{$reservation->customer_mail}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer Address</label>
                                                        <input type="text" class="form-control" name="customer_address" id="customer_address" value="{{$reservation->customer_address}}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-warning" type="submit" name="save" value="save">Save</button>
                                                @if($reservation->status == 2)
                                                <button class="btn btn-success" type="submit" name="done" value="done">Done</button>
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