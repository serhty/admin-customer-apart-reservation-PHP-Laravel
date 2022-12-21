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
                            <h1 class="page-title">Apart</h1>
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
                                                        <h6 class="">Customers</h6>
                                                        <h2 class="mb-0 number-font">{{$customers->count()}} Customer</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('admin.customers.index')}}" class="btn btn-success">Customers</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Supports</h6>
                                                        <h2 class="mb-0 number-font">{{$supports->count()}} Support</h2>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12">
                                                    <a href="{{route('admin.supports.index')}}" class="btn btn-info">Supports</a>
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
                                        <h4 class="card-title fw-semibold">Pending Notes </h4>
                                        <small>(Pending 10 Notes)</small>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="task-list">
                                            @foreach($notes as $note)
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

                        <!-- ROW-4 -->
                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Customers</h3>
                                    </div>
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
                                                        <td>{{$customer->start_date}}</td>
                                                        <td>{{$customer->end_date}}</td>
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
                        <!-- ROW-4 END -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>


@endsection