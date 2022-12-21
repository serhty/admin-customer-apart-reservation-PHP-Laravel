@extends('site.body')
@section('title',$site_settings[0]->site_title.' '.$blog[0]->title)
@section('description',$site_settings[0]->site_title.' '.$blog[0]->description)
@section('keywords',$site_settings[0]->site_title.' '.$blog[0]->keywords)
@section('content')

	<div class="subheader normal-bg section-padding">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<h1 class="text-custom-white">{{$blog[0]->title}}</h1>
				<ul class="custom-flex justify-content-center">
					<li class="fw-500">
						<a href="{{route('home')}}" class="text-custom-white">Home</a>
					</li>
					<li class="active fw-500">
						{{$blog[0]->title}}
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
	<section class="section-padding bg-light-white">
		<div class="container">
			<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-12">
						<div class="blog-details bx-wrapper bg-custom-white padding-20 mb-md-80">
							<article class="post p-relative">
								<div class="post-wrapper">
									@if(!empty($blog[0]->image))
									<div class="post-img animate-img mb-xl-20">
										<img src="{{asset('public/')}}/{{$blog[0]->image}}" class="image-fit" alt="{{$blog[0]->title}}">
									</div>
									@endif
									<div class="blog-meta bg-custom-white">
										<div class="post-heading p-relative">
											<h2>{{$blog[0]->title}}</h2>
										</div>
										<p class="text-light-dark">
											<?php echo $blog[0]->content; ?>
										</p>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
			<aside class="col-lg-4">
				<div class="sidebar_wrap">
					<div class="sidebar">
						<div class="sidebar_widgets mb-xl-30">
							<div class="widget_title bg-custom-blue">
								<h5 class="no-margin text-custom-white">Our Current Blog Posts</h5>
							</div>
							<ul class="custom popular_post">
								@foreach($other_blogs as $other_blog)
								<li class="mb-xl-20">
									<div class="post">
										<div class="post-wrapper">
										<div class="popular_post_img animate-img">
											<a href="{{route('blog_detail',$other_blog->link)}}">
												@if(!empty($other_blog->image))
													<img src="{{asset('public/')}}/{{$other_blog->image}}" class="image-fit">
												@else
													<img src="{{asset('public/')}}/images/logo.png" class="image-fit">
												@endif
											</a>
										</div>
										<div class="popular_post_title">
											<h6><a href="{{route('blog_detail',$other_blog->link)}}" class="text-custom-black fs-14">{{$other_blog->title}}</a></h6>
										</div>
										</div>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</aside>
			</div>
		</div>
	</section>

@endsection