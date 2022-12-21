@extends('site.body')
@section('title',$site_settings[0]->site_title.' - Aparts')
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Aparts</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500">
                        <a href="{{route('home')}}" class="text-custom-white">Home</a>
                    </li>
                    <li class="active fw-500">
                    Aparts
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="row">
                @foreach($aparts as $apart)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="{{route('apart',$apart->apart_link)}}">
                        <div class="hotel-grid mb-xl-30">
                            <div class="hotel-grid-wrapper bx-wrapper">
                                <div class="image-sec animate-img">
                                    @foreach($apart_cover_pictures as $picture)
                                        @if($picture->apart_id == $apart->id)
                                            @if($picture->cover=="1")
                                            <img src="{{asset('public/')}}/{{$picture->image}}" class="full-width aparts_page_img" alt="{{$apart->apart_name}}" width="800" height="533">
                                            @else
                                            <img src="{{asset('public/')}}/images/logo.png" class="full-width aparts_page_img" width="800" height="533">
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                                <div class="hotel-grid-caption padding-20 bg-custom-white p-relative">
                                    <h4 class="title fs-16 aparts_page_apart_name"><a href="{{route('apart',$apart->apart_link)}}" class="text-custom-black">{{$apart->apart_name}}
                                        <small class="text-light-dark">{{$apart->apart_concept}}</small></a>
                                    </h4>
                                    <span class="price">
                                    @if(!empty($apart->apart_price) && $apart->apart_price!="0.00")
                                        @if(!empty($apart->apart_discount))
                                            <small><del>{{$apart->apart_price}} $</del></small>
                                        @endif
                                        {{$apart->apart_final_price}} $
                                    @endif
                                    </span>
                                    <div class="action">
                                        <a class="btn-second btn-small" href="{{route('apart',$apart->apart_link)}}">Detail</a>
                                        @if(!empty($apart->apart_discount))
                                            <a class="btn-first btn-submit not_click" href="" tabindex="0">% {{$apart->apart_discount}} Discount</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection