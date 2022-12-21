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
                            <h1 class="page-title">Pages <small>( {{$pages->count()}} Page) </small></h1>
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
                                                        <th class="border-bottom-0">Title</th>
                                                        <th class="border-bottom-0">Transactions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pages as $page)
                                                    <tr>
                                                        <td>{{$page->id}}</td>
                                                        <td>{{$page->title}}</td>
                                                        <td>
                                                            <div class="btn-group align-top">
                                                                <a href="{{route('admin.pages.edit',$page->id)}}">
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