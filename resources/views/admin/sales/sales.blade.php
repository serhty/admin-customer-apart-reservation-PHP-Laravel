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
                            <h1 class="page-title">Sales <small>( {{$sales->count()}} Sale) </small></h1>
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
                                                        <th class="border-bottom-0">Customer</th>
                                                        <th class="border-bottom-0">Price</th>
                                                        <th class="border-bottom-0">Discount %</th>
                                                        <th class="border-bottom-0">paid</th>
                                                        <th class="border-bottom-0">payable</th>
                                                        <th class="border-bottom-0">remaining</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sales as $sale)
                                                    <tr>
                                                        <td>{{$sale->id}}</td>
                                                        <td>{{$sale->customer_name}} {{$sale->customer_surname}}</td>
                                                        <td>{{$sale->price}}</td>
                                                        <td>% {{$sale->discount}}</td>
                                                        <td>{{$sale->paid}}</td>
                                                        <td>{{$sale->payable}}</td>
                                                        <td>{{$sale->remaining}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('admin.sales.edit',$sale->id)}}">
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

@endsection