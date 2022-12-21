@extends('apart.body')
@section('title','Apart Admin')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Reservations <small>( {{$reservations->count()}} Reservation) </small></h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example2" class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">status</th>
                                                        <th class="border-bottom-0">Room Name</th>
                                                        <th class="border-bottom-0">Customer</th>
                                                        <th class="border-bottom-0">Start Date</th>
                                                        <th class="border-bottom-0">End Date</th>
                                                        <th class="border-bottom-0">Final Price</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($reservations as $reservation)
                                                    <tr>
                                                        <td>
                                                            @if($reservation->status==1)
                                                                Approved
                                                            @elseif($reservation->status==2)
                                                                Waiting for approval
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @foreach($rooms as $room)
                                                                @if($room->id == $reservation->room_id)
                                                                    {{$room->room_name}}
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>{{$reservation->customer_name}} {{$reservation->customer_surname}}</td>
                                                        <td>{{$reservation->start_date}}</td>
                                                        <td>{{$reservation->end_date}}</td>
                                                        <td>{{$reservation->final_price}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('apart.reservations.edit',$reservation->id)}}">
                                                                    <button class="btn btn-sm btn-warning badge" type="button">Detail</button>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>

        @if(isset($_GET['delete']))
            @section('script')
                <script>swal('Operation Successful', 'Information Deleted', 'success')</script>
            @endsection
        @endif

        @if(isset($_GET['add']))
            @section('script')
                <script>swal('Operation Successful', 'Information Added', 'success')</script>
            @endsection
        @endif

@endsection