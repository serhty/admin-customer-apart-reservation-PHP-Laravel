@extends('site.body')
@section('title',$site_settings[0]->site_title)
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

		<div class="slider p-relative">
			<div class="main-banner arrow-layout-1 ">
				@foreach($sliders as $slider)
				<div class="slide-item">
					<img src="{{asset('public/')}}/{{$slider->image}}" class="image-fit slider_img">
					<div class="transform-center slider_transform_center">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="slider-content">
										<h1 class="text-custom-white">{{$slider->title}}<br><span class="text-custom-blue">{{$slider->yazi}}</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="banner-tabs">
			<div class="container">
				<div class="row">
				<div class="col-12">
					<div class="tabs">
						<div class="tab-content bg-custom-white bx-wrapper padding-20">
							<div class="tab-pane active" id="hotel">
								<div class="tab-inner">
									<form method="post" action="{{route('rooms')}}">
										@csrf
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<label class="fs-14 text-custom-black fw-500">Start Date</label>
															<div class="input-group group-form">
															<input type="text" class="form-control form-control-custom mydatepicker" name="checkin" id="checkin" value="<?php if(isset($_COOKIE['start_date'])){ echo $_COOKIE['start_date']; }else{echo date("d-m-Y", strtotime('now')); } ?>">
															<span class="input-group-append">
															<i class="far fa-calendar"></i>
															</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="row">
													<div class="col-12">
														<div class="form-group">
															<label class="fs-14 text-custom-black fw-500">End Date</label>
															<div class="input-group group-form">
															<input type="text" class="form-control form-control-custom mydatepicker2" name="checkout" id="checkout" value="<?php if(isset($_COOKIE['end_date'])){ echo $_COOKIE['end_date']; }else{ echo date("d-m-Y", strtotime('+3 days')); } ?>">
															<span class="input-group-append">
															<i class="far fa-calendar"></i>
															</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
											<label class="submit"></label>
												<button type="submit" class="btn-first btn-submit full-width btn-height home_search_button"id="home_search_button">INQUIRY PRICE</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		<section class="section-padding hotels-sec bg-light-white">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black">Populer Aparts</h3>
						<div class="section-description">
							<p class="text-light-dark">Popular Apartments of the Region</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="hotel-slider arrow-layout-2 row">
							@foreach($populer_aparts as $apart)
							<div class="slide-item col-12">
								<a href="{{route('apart',$apart->apart_link)}}">
									<div class="cruise-grid home_populer_apart_gird">
										<div class="cruise-grid-wrapper bx-wrapper">
											<div class="image-sec animate-img">
												@foreach($apart_cover_pictures as $picture)
													@if($picture->apart_id == $apart->id)
														@if($picture->cover=="1")
														<img src="{{asset('public/')}}/{{$picture->image}}" class="full-width home_populer_apart_img" alt="{{$apart->apart_name}}" width="800" height="533">
														@else
														<img src="{{asset('public/')}}/images/logo.png" class="full-width home_populer_apart_img" width="800" height="533">
														@endif
													@endif
												@endforeach
											</div>
											<div class="cruise-grid-caption padding-20 bg-custom-white p-relative">
												<h4 class="title fs-16 no-margin home_populer_apart_title">
													<a href="{{route('apart',$apart->apart_link)}}" class="text-custom-black" tabindex="0">{{$apart->apart_name}}</a>
												</h4>
												<div class="feedback home_populer_apart_concept">
													<span class="review fs-12 text-light-white">{{$apart->apart_concept}}</span>
												</div>
												<div class="row time home_populer_apart_price_row">
													<div class="date col-6">
														<div class="text-light-dark fs-12">
															<span class="price home_populer_apart_price">
																@if(!empty($apart->apart_price) && $apart->apart_price!="0.00")
																	{{$apart->apart_final_price}} $
																@endif
															</span>
														</div>
													</div>
													<div class="departure col-6">
														<div class="text-light-dark fs-12">
															<span class="text-custom-blue">
																@if(!empty($apart->apart_discount))
																	<del>{{$apart->apart_price}} $</del>
																@endif
															</span>
														</div>
													</div>
												</div>
												<div class="action">
													<a class="btn-second btn-small" href="{{route('apart',$apart->apart_link)}}" tabindex="0">Detail</a>
													@if(!empty($apart->apart_discount))
														<a class="btn-first btn-submit not_click" href="" tabindex="0">% {{$apart->apart_discount}} discount</a>
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
				</div>
			</div>
		</section>
		<section class="section-padding our-work-sec">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="work-sec animate-img first-box">
							<a href="#">
								<img src="{{asset('public/site/')}}/assets/images/banner_1.jpg" class="image-fit" alt="Apart">
							</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="work-sec animate-img">
									<a href="#">
										<img src="{{asset('public/site/')}}/assets/images/banner_2.jpg" class="image-fit" alt="Apart">
									</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="work-sec animate-img">
									<a href="#">
										<img src="{{asset('public/site/')}}/assets/images/banner_3.jpg" class="image-fit" alt="Apart">
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="work-sec animate-img">
									<a href="#">
										<img src="{{asset('public/site/')}}/assets/images/banner_4.jpg" class="image-fit" alt="Apart">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-padding flights-sec bg-light-white">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black">Suggestions for You</h3>
						<div class="section-description">
							<p class="text-light-dark">Recommended Apartments For You</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="flights-slider arrow-layout-2 row">
							@foreach($recommended_aparts as $apart)
							<div class="slide-item col-12">
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
											<h4 class="title fs-16 aparts_page_apart_name"><a href="#" class="text-custom-black">{{$apart->apart_name}}
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
													<a class="btn-first btn-submit not_click" href="" tabindex="0">% {{$apart->apart_discount}} discount</a>
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
				</div>
			</div>
		</section>
		<section class="section-padding cruise-sec">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black">Recently Visited</h3>
						<div class="section-description">
							<p class="text-light-dark">Recently Visited Apartments</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="hotel-slider arrow-layout-2 row">
							@foreach($visited_aparts as $apart)
							<div class="slide-item col-12">
								<a href="{{route('apart',$apart->apart_link)}}">
									<div class="cruise-grid home_populer_apart_gird">
										<div class="cruise-grid-wrapper bx-wrapper">
											<div class="image-sec animate-img">
												@foreach($apart_cover_pictures as $picture)
													@if($picture->apart_id == $apart->id)
														@if($picture->cover=="1")
														<img src="{{asset('public/')}}/{{$picture->image}}" class="full-width home_populer_apart_img" alt="{{$apart->apart_name}}" width="800" height="533">
														@else
														<img src="{{asset('public/')}}/images/logo.png" class="full-width home_populer_apart_img" width="800" height="533">
														@endif
													@endif
												@endforeach
											</div>
											<div class="cruise-grid-caption padding-20 bg-custom-white p-relative">
												<h4 class="title fs-16 no-margin home_populer_apart_title">
													<a href="{{route('apart',$apart->apart_link)}}" class="text-custom-black" tabindex="0">{{$apart->apart_name}}</a>
												</h4>
												<div class="feedback home_populer_apart_concept">
													<span class="review fs-12 text-light-white">{{$apart->apart_concept}}</span>
												</div>
												<div class="row time home_populer_apart_price_row">
													<div class="date col-6">
														<div class="text-light-dark fs-12">
															<span class="price home_populer_apart_price">
																@if(!empty($apart->apart_price) && $apart->apart_price!="0.00")
																	{{$apart->apart_final_price}} $
																@endif
															</span>
														</div>
													</div>
													<div class="departure col-6">
														<div class="text-light-dark fs-12">
															<span class="text-custom-blue">
																@if(!empty($apart->apart_discount))
																	<del>{{$apart->apart_price}} $</del>
																@endif
															</span>
														</div>
													</div>
												</div>
												<div class="action">
													<a class="btn-second btn-small" href="{{route('apart',$apart->apart_link)}}" tabindex="0">Detail</a>
													@if(!empty($apart->apart_discount))
														<a class="btn-first btn-submit not_click" href="" tabindex="0">% {{$apart->apart_discount}} discount</a>
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
				</div>
			</div>
		</section>
		<section class="section-padding bg-light-white our_articles">
			<div class="container">
				<div class="section-header">
					<div class="section-heading">
						<h3 class="text-custom-black">Our Current Blog Posts</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-slider arrow-layout-2 row">
							@foreach($blogs as $blog)
							<article class="col-12 post slide-item">
								<div class="post-wrapper bx-wrapper">
									<div class="post-img animate-img">
										<a href="{{route('blog_detail',$blog->link)}}">
											@if(!empty($blog->image))
												<img src="{{asset('public/')}}/{{$blog->image}}" alt="{{$blog->title}}" class="home_blogs_img">
											@else
												<img src="{{asset('public/')}}/images/logo.png" class="home_blogs_img">
											@endif
										</a>
									</div>
									<div class="blog-meta padding-20 bg-custom-white p-relative">
										<div class="post-heading">
											<h2>
												<a href="{{route('blog_detail',$blog->link)}}" class="text-custom-black fw-600 fs-20 blogs_cutom_head">{{$blog->title}}</a>
											</h2>
											<p class="text-light-dark no-margin">{{mb_strimwidth($blog->title, 0, 100, "...")}}</p>
										</div>
									</div>
								</div>
							</article>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>

@endsection