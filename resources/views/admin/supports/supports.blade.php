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
                            <h1 class="page-title">Supports <small>( {{$supports->count()}} Support) </small></h1>
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
                                                        <th class="border-bottom-0">Support Date</th>
                                                        <th class="border-bottom-0">reply date</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($supports as $support)
                                                    <tr>
                                                        <td>{{$support->id}}</td>
                                                        <td>
                                                            @if($support->status==1)
                                                                Awaiting Answer
                                                            @elseif($support->status==2)
                                                                Answered
                                                            @endif
                                                        </td>
                                                        <td>{{$support->name}} {{$support->surnane}}</td>
                                                        <td>{{$support->support_date}}</td>
                                                        <td>{{$support->reply_date}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('admin.supports.edit',$support->id)}}">
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