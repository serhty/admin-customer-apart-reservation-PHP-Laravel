@extends('apart.body')
@section('content')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Periods</h1>
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
                                                        <th class="border-bottom-0">Period Start Date</th>
                                                        <th class="border-bottom-0">Period End Date</th>
                                                        <th class="border-bottom-0">Daily Room Price</th>
                                                        <th class="border-bottom-0">Discount</th>
                                                        <th class="border-bottom-0">Final Price</th>
                                                        <th class="border-bottom-0">Room Count</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($periods as $period)
                                                    <tr>
                                                        <td>{{$period->period_start}}</td>
                                                        <td>{{$period->period_end}}</td>
                                                        <td>{{$period->period_price}}</td>
                                                        <td>% {{$period->period_discount}}</td>
                                                        <td>{{$period->period_discounted_price}}</td>
                                                        <td>{{$period->room_count}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                
                                                                    <form method="post" action="{{route('apart.periods.destroy',$period->id)}}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-sm btn-danger badge" type="submit">Delete</button>
                                                                    </form>
                                                             
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

                        <!-- Row -->
                        <div class="page-header">
                            <h1 class="page-title">Period Add</h1>
                        </div>
                        <div class="row row-sm">
                            <form method="post" action="{{route('apart.periods.store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control mydatepicker" name="room_id" id="room_id" value="{{$room[0]->id}}">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-3 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Start Date</label>
                                                        <input type="text" class="form-control mydatepicker" name="period_start" id="period_start">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">End Date</label>
                                                        <input type="text" class="form-control mydatepicker2" name="period_end" id="period_end">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Daily Room Price</label>
                                                        <input type="number" class="form-control" name="period_price" id="period_price">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Discount %</label>
                                                        <input type="number" class="form-control" name="period_discount" id="period_discount">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2 mb-0">
                                                    <div class="form-group">
                                                        <label class="form-label">Room Count</label>
                                                        <input type="number" class="form-control" name="room_count" id="room_count">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-footer mt-2">
                                                <button class="btn btn-success" type="submit" name="add" value="add">Period Add</button>
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