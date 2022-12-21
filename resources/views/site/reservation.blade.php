@extends('site.body')
@section('title',$site_settings[0]->site_title.' Reservation')
@section('description',$site_settings[0]->site_title)
@section('keywords',$site_settings[0]->site_title)
@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Reservation</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500">
                        <a href="{{route('home')}}" class="text-custom-white">Home</a>
                    </li>
                    <li class="active fw-500">
                    Reservation
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white booking-form">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <div class="tab-content bg-custom-white bx-wrapper padding-20">
                        <form action="{{route('reservation_add')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="tab-pane fade active show" id="hotel-booking">
                            <div class="tab-inner">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h5 class="text-custom-black">Reservation Info</h5>
                                        <div class="row mb-md-80">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Name</label>
                                                    <input type="text" class="form-control form-control-custom"id="name" name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Surname</label>
                                                    <input type="text" class="form-control form-control-custom" id="surname" name="surname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Phone</label>
                                                    <input type="text" class="form-control form-control-custom" id="phone" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Mail</label>
                                                    <input type="text" class="form-control form-control-custom" id="mail" name="mail" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Number of Persons</label>
                                                    <div class="group-form">
                                                        <select class="custom-select form-control form-control-custom" name="count_people" id="count_people">
                                                            <?php for ($i=1; $i<=10; $i++) { ?>
                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?> person</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="fs-14 text-custom-black fw-500">Address</label>
                                                    <input type="text" class="form-control form-control-custom" id="address" name="address" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="need-help bx-wrapper padding-20">
                                                    <div id="total_cart">
                                                        <?php if($_POST['total_price'] != $_POST['total_discounted_price']){ ?>
                                                            <span><del><?php echo $_POST['total_price']; ?> $</del></span>
                                                            <br>
                                                            <span><b style="color:#32a067;"><?php echo $_POST['total_discounted_price']; ?> $</b></span>
                                                            <br>
                                                            <span><b style="color:#0054a6;">% <?php echo round((100-(($_POST['total_discounted_price']/$_POST['total_price'])*100)),2); ?> Discount</b></span>
                                                        <?php } else{ ?>
                                                            <span><b style="color:#32a067;"><?php echo $_POST['total_final_price']; ?> $</b></span>
                                                        <?php } ?>
                                                    </div>
                                                    <ul class="cart_details">
                                                        <li name="">Start Date: <span><?php echo date("d-m-Y", strtotime($_POST['start_date'])); ?></span></li>
                                                        <li name="">End Date: <span><?php echo date("d-m-Y", strtotime($_POST['end_date'])); ?></span></li>
                                                    </ul>
                                                    <button type="submit" class="btn-first btn-submit">Create Reservation Request</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="room" value="<?php echo $_POST['room_id']; ?>">
                        <input type="hidden" name="start_date" value="<?php echo $_POST['start_date']; ?>">
                        <input type="hidden" name="end_date" value="<?php echo $_POST['end_date']; ?>">
                        <input type="hidden" name="price" value="<?php echo $_POST['total_price']; ?>">
                        <input type="hidden" name="discount" value="<?php echo round((100-(($_POST['total_discounted_price']/$_POST['total_price'])*100)),2); ?>">
                        <input type="hidden" name="final_price" value="<?php echo $_POST['total_final_price']; ?>">
                        </form>


                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

@endsection