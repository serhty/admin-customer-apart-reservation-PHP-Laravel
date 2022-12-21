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
                            <h1 class="page-title">Customerler <small>( {{$customers->count()}} Customer) </small></h1>
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
                                                        <th class="border-bottom-0">ID</th>
                                                        <th class="border-bottom-0">status</th>
                                                        <th class="border-bottom-0">Name</th>
                                                        <th class="border-bottom-0">Surname</th>
                                                        <th class="border-bottom-0">Apart Name</th>
                                                        <th class="border-bottom-0">Start</th>
                                                        <th class="border-bottom-0">End</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($customers as $customer)
                                                    <tr>
                                                        <td>{{$customer->id}}</td>
                                                        <td>
                                                            @if($customer->status==1) Active @elseif($customer->status==2) Expired @endif
                                                        </td>
                                                        <td>{{$customer->name}}</td>
                                                        <td>{{$customer->surname}}</td>
                                                        <td>{{$customer->apart_name}}</td>
                                                        <td>{{$customer->started_date}}</td>
                                                        <td>{{$customer->ended_date}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('admin.customers.edit',$customer->id)}}">
                                                                    <button class="btn btn-sm btn-warning badge" type="button">Detail</button>
                                                                </a>
                                                            </div>
                                                            @foreach($aparts as $apart)
                                                                @if($apart->customer_id == $customer->id)
                                                                <div class="btn-group align-top">
                                                                    <a href="{{route('admin.aparts.edit',$apart->id)}}">
                                                                        <button class="btn btn-sm btn-info badge" type="button">Customer Apart</button>
                                                                    </a>
                                                                </div>
                                                                <div class="btn-group align-top">
                                                                    <a href="{{route('admin.rooms',$apart->id)}}">
                                                                        <button class="btn btn-sm btn-primary badge" type="button">Rooms</button>
                                                                    </a>
                                                                </div>
                                                                <div class="btn-group align-top">
                                                                    <a href="{{route('admin.reservations',$apart->id)}}">
                                                                        <button class="btn btn-sm btn-success badge" type="button">Reservations</button>
                                                                    </a>
                                                                </div>
                                                                @endif
                                                            @endforeach
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

@endsection