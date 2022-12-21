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
                            <h1 class="page-title">Rooms <small>( {{$rooms->count()}} Oda) </small></h1>
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
                                                        <th class="border-bottom-0">Room Name</th>
                                                        <th class="border-bottom-0">price</th>
                                                        <th class="border-bottom-0">discount %</th>
                                                        <th class="border-bottom-0">Final Price</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($rooms as $room)
                                                    <tr>
                                                        <td>{{$room->room_name}}</td>
                                                        <td>{{$room->room_price}}</td>
                                                        <td>% {{$room->room_discount}}</td>
                                                        <td>{{$room->room_final_price}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('apart.rooms.edit',$room->id)}}">
                                                                    <button class="btn btn-sm btn-warning badge" type="button">Detail</button>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('apart.periods.edit',$room->id)}}">
                                                                    <button class="btn btn-sm btn-success badge" type="button">Periods</button>
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