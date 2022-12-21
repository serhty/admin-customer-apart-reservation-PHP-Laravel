@extends('site.body')
@section('title',$site_settings[0]->site_title.' - Cookie Policy')
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Cookie Policy</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500">
                        <a href="{{route('home')}}" class="text-custom-white">Home</a>
                    </li>
                    <li class="active fw-500">
                        Cookie Policy
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-details bx-wrapper bg-custom-white padding-20">
                        <article class="post p-relative">
                            <div class="post-wrapper">
                                <div class="blog-meta bg-custom-white">
                                    <div class="post-heading p-relative">
                                        <h2>Cookie Policy</h2>
                                    </div>
                                    <p class="text-light-dark"><?php echo $site_settings[0]->cookie_policy; ?></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection