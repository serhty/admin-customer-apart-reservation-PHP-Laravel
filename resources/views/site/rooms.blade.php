@extends('site.body')
@section('title',$site_settings[0]->site_title.' - Rooms')
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Rooms</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500">
                        <a href="{{route('home')}}" class="text-custom-white">Home</a>
                    </li>
                    <li class="active fw-500">
                        Rooms
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                @foreach($rooms as $room)
                <?php foreach($aparts as $apart){
                    if($apart['id']==$room['apart_id']){
                        $room_apart = $apart;
                    }
                }
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <form id="oda_form_{{$room->id}}" method="post" action="javascript:void(0);">
                    @csrf
                    <?php if(!empty($_COOKIE['start_date'])){ ?>
                    <input type="hidden" id="checkin" name="checkin" value="<?php echo $_COOKIE['start_date']; ?>">
                    <?php } ?>
                    <?php if(!empty($_COOKIE['end_date'])){ ?>
                    <input type="hidden" id="checkout" name="checkout" value="<?php echo $_COOKIE['end_date']; ?>">
                    <?php } ?>
                    <input type="hidden" id="apart" name="apart" value="{{$room->apart_id}}">
                    <input type="hidden" id="room" name="room" value="{{$room->id}}">
                    @if(!empty($room_apart->apart_phone1))
                    <input type="hidden" id="phone" name="phone" value="{{$room_apart->apart_phone1}}">
                    @endif
                    <a href="{{route('apart',$room_apart->apart_link)}}">
                        <div class="hotel-grid mb-xl-30">
                            <div class="hotel-grid-wrapper bx-wrapper">
                                <div class="image-sec animate-img">
                                    @foreach($rooms_cover_pictures as $picture)
                                        @if($picture->room_id == $room->id)
                                            @if($picture->cover=="1")
                                            <img src="{{asset('public/')}}/{{$picture->image}}" class="full-width aparts_page_img" alt="{{$room->apart_name}}" width="800" height="533">
                                            @else
                                            <img src="{{asset('public/')}}/images/logo.png" class="full-width aparts_page_img" width="800" height="533">
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                                <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                    <h4 class="title fs-16 aparts_page_apart_name"><a href="{{route('apart',$room_apart->apart_link)}}" class="text-custom-black">{{$room->room_name}}
                                        <small class="text-light-dark">{{$room->room_concept}}</small></a>
                                    </h4>
                                    <span class="price" id="price_{{$room->id}}">
                                    @if(!empty($room->room_price) && $room->room_price!="0.00")
                                        @if(!empty($room->room_discount))
                                            <small><del>{{$room->room_price}} $</del></small>
                                        @endif
                                        {{$room->room_final_price}} $
                                    @endif
                                    </span>
                                    <span id="loading_{{$room->id}}" style="display:none;" class="price">
                                        <center>
                                            <img style="height:67px;" src="{{asset('public/')}}/images/loading.gif">
                                        </center>
                                    </span>
                                    <div class="action">
                                        <a class="btn-second btn-small" href="{{route('apart',$room_apart->apart_link)}}">Detail</a>
                                        @if(!empty($room->room_discount))
                                            <a class="btn-first btn-submit not_click discount_board<?php echo $room["id"]; ?>" href="" tabindex="0">% {{$room->room_discount}} discount</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @section('script')
    <script>
    <?php 
    if(!empty($_COOKIE['start_date']) && !empty($_COOKIE['end_date'])){
        foreach($rooms as $room){ ?>
        $(document).ready(function(){
            $('#price_<?php echo $room["id"]; ?>').hide();
            $('#loading_<?php echo $room["id"]; ?>').show();
            var data = $('#oda_form_<?php echo $room["id"]; ?>').serialize();
            setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "{{route('room_price_check')}}",
                data: data,
                success: function(data) {
                    $('#loading_<?php echo $room["id"]; ?>').hide();
                    $('.discount_board<?php echo $room["id"]; ?>').hide();
                    $('#price_<?php echo $room["id"]; ?>').html(data);
                    $('#price_<?php echo $room["id"]; ?>').show();
                },
                error: function(data) {
                    
                }
            });
            }, 3000);

        });
    <?php
        }
    } ?>
    </script> 
    @endsection

@endsection