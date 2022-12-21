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
                            <h1 class="page-title">{{\Auth::guard('apart')->user()->apart_name}}</h1>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Rooms</h6>
                                                        <h2 class="mb-0 number-font">{{$rooms->count()}} Room</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('apart.rooms.index')}}" class="btn btn-success">Rooms</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Reservations</h6>
                                                        <h2 class="mb-0 number-font">{{$reservations->count()}} Reservation</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('apart.reservations.index')}}" class="btn btn-info">Reservations</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Support</h6>
                                                        <h2 class="mb-0 number-font">{{$supports->count()}} Support</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('apart.supports.index')}}" class="btn btn-primary">Support</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Notes</h6>
                                                        <h2 class="mb-0 number-font">{{$notes->count()}} Note</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('apart.notes.index')}}" class="btn btn-default">Notes</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-3 -->
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Waiting Supports</h4>
                                        <small>(Waiting 10 supports)</small>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="task-list">
                                            @foreach($pending_supports as $support)
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-primary"></i>
                                                    <h6 class="fw-semibold">{{$support->name}} {{$support->surname}}<span
                                                            class="text-muted fs-11 mx-2 fw-normal">{{$support->support_date}}</span>
                                                    </h6>
                                                    <p class="text-muted fs-12">{{ Str::limit($support->message, 60) }}
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="{{route('apart.supports.edit',$support->id)}}" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Detail" aria-label="Detail"><span
                                                            class="fe fe-edit"></span></a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Pending Notes </h4>
                                        <small>(Pending 10 Notes)</small>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="task-list">
                                            @foreach($pending_notes as $note)
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-primary"></i>
                                                    <p class="text-muted fs-12">{{ Str::limit($note->note, 60) }}
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="{{route('apart.notes.edit',$note->id)}}" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Detail" aria-label="Detail"><span
                                                            class="fe fe-edit"></span></a>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Reservations</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
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
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->
        </div>


        @if(isset($_GET['update']))
            @section('script')
                <script>swal('Operation Successful', 'Information Updated', 'success')</script>
            @endsection
        @endif

@endsection