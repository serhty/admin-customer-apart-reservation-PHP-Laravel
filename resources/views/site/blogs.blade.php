@extends('site.body')
@section('title',$site_settings[0]->site_title.' - Blog')
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

    <div class="subheader normal-bg section-padding">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="text-custom-white">Blog</h1>
                <ul class="custom-flex justify-content-center">
                    <li class="fw-500">
                        <a href="{{route('home')}}" class="text-custom-white">Home</a>
                    </li>
                    <li class="active fw-500">
                        Blog
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <section class="section-padding bg-light-white our_articles">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <article class="col-lg-4 col-md-6 post mb-xl-30">
                    <div class="post-wrapper bx-wrapper">
                        <div class="post-img animate-img">
                            <a href="{{route('blog_detail',$blog->link)}}">
                                @if(!empty($blog->image))
                                    <img src="{{asset('public/')}}/{{$blog->image}}" class="full-width blogs_page_img" alt="{{$blog->title}}" width="800" height="533">
                                @else
                                    <img src="{{asset('public/')}}/images/logo.png" class="full-width blogs_page_img" width="800" height="533">
                                @endif
                            </a>
                        </div>
                        <div class="blog-meta padding-20 bg-custom-white p-relative">
                            <div class="post-heading">
                                <h2>
                                    <a href="{{route('blog_detail',$blog->link)}}" class="text-custom-black fw-600 fs-20 blogs_cutom_head">{{$blog->title}}</a>
                                </h2>
                                <p class="text-light-dark no-margin"><?php echo strip_tags(mb_strimwidth($blog->content, 0, 80, "...")); ?></p>
                            </div>
                        </div>
                        <div class="post-footer">
                            <a href="{{route('blog_detail',$blog->link)}}" class="text-custom-blue fs-14 fs-600">Detail</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

        </div>
    </section>

@endsection