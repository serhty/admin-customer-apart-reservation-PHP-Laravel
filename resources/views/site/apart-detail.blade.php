@extends('site.body')
@section('title',$site_settings[0]->site_title.' '.$apart[0]->apart_name)
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

	<div class="subheader normal-bg section-padding">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<h1 class="text-custom-white">{{$apart[0]->apart_name}}</h1>
				<ul class="custom-flex justify-content-center">
					<li class="fw-500">
						<a href="{{route('home')}}" class="text-custom-white">Home</a>
					</li>
					<li class="active fw-500">
						{{$apart[0]->apart_name}}
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
	<section class="section-padding bg-light-white listing-details">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div class="listing-details-inner bx-wrapper bg-custom-white padding-20">
					<div class="row">
						<div class="col-lg-8">
						<div class="detail-slider-for mb-xl-20 magnific-gallery">
							@foreach($apart_pictures as $picture)
							<div class="slide-item">
								<a href="{{asset('public/')}}/{{$picture->image}}" class="popup">
									<img src="{{asset('public/')}}/{{$picture->image}}" class="image-fit" alt="{{$apart[0]->apart_name}}">
								</a>
							</div>
							@endforeach
						</div>
						<div class="detail-slider-nav row apart_detail_slider_nav">
							@foreach($apart_pictures as $picture)
							<div class="slide-item col-12">
								<a href="{{asset('public/')}}/{{$picture->image}}"
								data-fancybox="{{$apart[0]->apart_name}}"
								data-caption="{{$apart[0]->apart_name}}"
								data-speed="700">
									<img src="{{asset('public/')}}/{{$picture->image}}" class="image-fit apart_detail_slider_img" alt="{{$apart[0]->apart_name}}">
								</a>
							</div>
							@endforeach
						</div>
						<hr>
						<div class="listing-meta-sec mb-md-80">
							<div class="tabs">
								<ul class="custom-flex nav nav-tabs mb-xl-20">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#overview">Rooms & Infos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#amenities">{{$apart[0]->apart_name}} Features</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#faqs">Communication & Social Media</a>
									</li>
								</ul>

								<h2 id="apartrooms" style="margin-bottom:30px;">Rooms</h2>
								<div style="display:none;" class="loading" id="loading">
								<center>
									<img style="height:225px;" src="{{asset('public/')}}/images/loading.gif">
								</center>
								</div>

								<div class="tab-content">
									<div class="tab-pane fade active show" id="overview">
										<div class="tab-inner">
											<div class="row">
												<div class="col-lg-12" id="available_room">
													<div class="row">
														@foreach($rooms as $room)
														<div class="col-md-12">
															<div class="hotel-grid mb-xl-30">
																<div class="hotel-grid-wrapper bx-wrapper">
																	<div class="animate-img col-md-6 apart_rooms_img_col">
																	@if(!empty($rooms_cover_pictures[0]))
																	@foreach($rooms_cover_pictures as $picture)
																		@if($picture->room_id == $room->id)
																		<a href="{{asset('public/')}}/{{$picture->image}}"
																		data-fancybox="{{$room->room_name}}"
																		data-caption="{{$room->room_name}}"
																		data-speed="700">
																			<img src="{{asset('public/')}}/{{$picture->image}}" class="full-width apart_room_cover_img">
																		</a>
																		<div class="room_other_pictures" style="display:none;">
																			<?php
																				$room_pictures_array = array();
																				foreach($rooms_pictures as $room_picture){
																					if($room_picture['room_id'] == $room['id']){
																						$room_pictures_array[] = $room_picture['resim'];
																					}
																				}
																			?>
																			@foreach($room_pictures_array as $picture_array)
																			<a href="{{asset('public/')}}/{{$picture_array}}"
																			data-fancybox="{{$room->room_name}}"
																			data-caption="{{$room->room_name}}"
																			data-speed="700">
																				<img src="{{asset('public/')}}/{{$picture_array}}" class="img-fluid" alt="{{$apart[0]->apart_name}}" width="800" height="533">
																			</a>
																			@endforeach
																		</div>
																		@endif
																		@endforeach
																	@else
																	<img src="{{asset('public/')}}/images/logo.png" class="img-fluid apart_room_cover_img" width="800" height="533">
																	@endif
																	</div>
																	<div class="hotel-grid-caption bg-custom-white p-relative col-md-6 apart_rooms_price_col">
																		<h4 class="title fs-16 room_title_fs_16">
																			<a href="" class="text-custom-black not_click">
																				{{$room->room_name}}
																				<small class="text-light-dark">{{$room->room_concept}} </small>
																			</a>
																		</h4>
																		<span class="price">
																			@if(!empty($room['room_discount']))
																				<small><del class="room_price_discount_del">{{$room->room_price}} $</del></small>
																			@endif
																			@if(!empty($room['room_discount']))
																				<small class="room_price_discount_small">% {{$room->room_discount}} Discount</small>
																			@endif
																			@if(!empty($room['room_price']))
																				{{$room->room_final_price}} $ <small> Prices Starting from</small>
																			@endif
																		</span>
																		<div class="action">
																			@if(!empty($room->room_description))
																			<a class="btn-second btn-small" href="" data-toggle="modal" data-target="#room_{{$room->id}}">{{$room->room_name}} Detail</a>
																			<!-- Modal -->
																			<div class="modal fade" id="room_{{$room->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																				<div class="modal-dialog" role="document">
																					<div class="modal-content">
																						<div class="modal-header">
																							<h5 class="modal-title" id="exampleModalLabel">{{$room->room_name}}</h5>
																							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																							<span aria-hidden="true">&times;</span>
																							</button>
																						</div>
																						<div class="modal-body">
																							<?php echo $room->room_description; ?>
																						</div>
																						@if(!empty($room->room_info))
																						<div class="modal-header">
																							<h5 class="modal-title" id="exampleModalLabel">info</h5>
																						</div>
																						<div class="modal-body">
																							<?php echo $room->room_info; ?>
																						</div>
																						@endif
																						
																						<div class="modal-header">
																							<h5 class="modal-title" id="exampleModalLabel">info</h5>
																						</div>
																						<div class="modal-body">
																							<ul class="custom amenities row no-gutters">
																								@if(!empty($room->wifi))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										Wifi
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->mini_bar))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										Mini Bar
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->bathtub))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										bathtub
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->ac_dryer_machine))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										ac dryer machine
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->tv))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										tv
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->safe))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										safe
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->balcony))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										balcony
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->kitchen))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										kitchen
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->washing_machine))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										washing machine
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->refrigerator))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										refrigerator
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->dishwasher))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										dishwasher
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->air_conditioning))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										air_conditioning
																									</div>
																								</li>
																								@endif
																								@if(!empty($room->smoke_detector))
																								<li class="col-md-4 col-sm-6">
																									<div class="icon-box text-light-dark room_props_icon_box">
																										<i class="fas fa-check room_props_i"></i>
																										smoke detector
																									</div>
																								</li>
																								@endif
																							</ul>
																						</div>
																						<div class="modal-footer">
																							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																						</div>
																					</div>
																				</div>
																				</div>
																			@endif
																		</div>
																		<div class="action">
                                                                            <p style="margin-top:5px;">
                                                                            	Select Date For Reservation.
                                                                            </p>
                                                                        </div>
																	</div>
																</div>
															</div>
															<hr>
														</div>
														@endforeach
													</div>
												</div>
												<div class="col-12">
													<div class="information">
													<h4 class="text-custom-black">{{$apart[0]->apart_name}}</h4>
													<p class="text-light-dark"><?php echo $apart[0]->apart_description; ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="amenities">
										<h4 class="text-custom-black">{{$apart[0]->apart_name}} Features</h4>
										<ul class="custom amenities row no-gutters">
											@if(!empty($apart[0]->next_sea))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													next sea
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->spa))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													Spa
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->restaurant))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													Restaurant
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->disabled_friendly))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													disabled friendly
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->laundry))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													laundry
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->car_park))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													car_park
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->wifi))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													Wi-fi
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->rent_car))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													rent car
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->transfer))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													transfer
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->bath))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													bath
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->pool))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													pool
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->wheelchair))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													wheelchair
												</div>
											</li>
											@endif
											@if(!empty($apart[0]->kid_friendly))
											<li class="col-md-4 col-sm-6">
												<div class="icon-box text-light-dark">
													<i class="fas fa-check"></i>
													kid friendly
												</div>
											</li>
											@endif
										</ul>
									</div>
									<div class="tab-pane fade" id="faqs">
										<div class="information">
											<h4 class="text-custom-black">Our Social Media Accounts</h4>
											<p class="text-light-dark">
												<ul class="custom-flex socials">
													<li>
														<a href="{{$apart[0]->apart_facebook}}" class="text-custom-white fs-14 apart_social_a" target="_blank">
														<i class="fab fa-facebook-f"></i>
														</a>
													</li>
													<li>
														<a href="{{$apart[0]->apart_twitter}}" class="text-custom-white fs-14 apart_social_a" target="_blank">
														<i class="fab fa-twitter"></i>
														</a>
													</li>
													<li>
														<a href="{{$apart[0]->apart_instagram}}" class="text-custom-white fs-14 apart_social_a" target="_blank">
														<i class="fab fa-instagram"></i>
														</a>
													</li>
													<li>
														<a href="{{$apart[0]->apart_youtube}}" class="text-custom-white fs-14 apart_social_a" target="_blank">
														<i class="fab fa-youtube"></i>
														</a>
													</li>
												</ul>
											</p>

											@if(!empty($apart[0]->apart_location))
											<h4 class="text-custom-black">Location</h4>
												<p class="text-light-dark">
													<iframe src="{{$apart[0]->apart_location}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
												</p>
											@endif
											<div class="comment-box section-padding-top p-relative">
												<div id="comment-box">
													<div class="comment-respond" id="respond">
														<h4 class="text-custom-black fw-600">Contact Form</h4>
														<form id="apart_support_add" method="post" action="javascript:void(0);" autocomplete="off">
                        								@csrf
															<?php $verification_num=rand(1000,9999); ?>
															<input type="hidden" name="apart" id="apart" class="form-control" value="{{$apart[0]->id}}">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Name</label>
																		<input type="text" class="form-control form-control-custom" name="name" id="name" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Surname</label>
																		<input type="text" class="form-control form-control-custom" name="surname" id="surname" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Mail</label>
																		<input type="text" class="form-control form-control-custom" name="mail" id="mail" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Phone</label>
																		<input type="text" class="form-control form-control-custom" name="phone" id="phone" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Verification Code</label>
																		<input class="form-control form-control-custom" type="text" id="verification_num" value="<?php echo $verification_num; ?>" placeholder="<?php echo $verification_num; ?>" readonly>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Enter Verification Code</label>
																		<input class="form-control form-control-custom" type="text" name="verification_code" id="verification_code" placeholder="Doğrulama Kodunu Girin" required>
																		<br>
																		<span id="verifycodedulyfalse" style="color:#e30a17; display:none;" style="display:none;">*Verification Code Incorrect</span>
																	</div>
																</div>
																
																<div class="col-12">
																	<div class="form-group">
																		<label class="text-custom-black fw-500 fs-14">Message</label>
																		<textarea rows="4" class="form-control form-control-custom" name="message" id="message"></textarea>
																	</div>
																	<button type="submit" class="btn-first btn-submit" id="apart_support_add_button">Send</button>
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
						</div>
						<div class="col-lg-4">
						<div class="row">
							<div class="col-12">
								<div class="quick-quote bx-wrapper padding-20 mb-xl-30">
									<form id="reservation_add" enctype="multipart/form-data" method="post" action="javascript:void(0);">
									@csrf
									<input type="hidden" name="apart" value="{{$apart[0]['apart_link']}}">
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<label class="fs-14 text-custom-black fw-500">Start Date</label>
												<div class="input-group group-form">
												<input type="text" class="form-control form-control-custom mydatepicker" id="checkin" name="checkin" value="<?php if(isset($_COOKIE['start_date'])){ echo $_COOKIE['start_date']; }else{echo date("d-m-Y", strtotime('now')); } ?>">
												<span class="input-group-append">
												<i class="far fa-calendar"></i>
												</span>
												</div>
											</div>
											<div class="form-group">
												<label class="fs-14 text-custom-black fw-500">End Date</label>
												<div class="input-group group-form">
												<input type="text" class="form-control form-control-custom mydatepicker2" id="checkout" name="checkout" value="<?php if(isset($_COOKIE['end_date'])){ echo $_COOKIE['end_date']; }else{ echo date("d-m-Y", strtotime('+3 days')); } ?>">
												<span class="input-group-append">
												<i class="far fa-calendar"></i>
												</span>
												</div>
											</div>
											<button type="submit" class="btn-first btn-submit full-width btn-height reservation_check_button" id="reservation_check" name="reservation_check">Inquire Price</button>
										</div>
									</div>
									</form>
								</div>
								<div class="need-help bx-wrapper padding-20">
									<h5 class="text-custom-black">Contact</h5>
									<ul class="custom">
										@if(!empty($apart[0]->apart_address))
										<li class="text-custom-blue fs-18">
											Address:
											<a href="" class="text-light-dark not_click">{{$apart[0]->apart_address}}</a>
										</li>
										@endif
										@if(!empty($apart[0]->apart_mail))
										<li class="text-custom-blue fs-18">
											Mail:
											<a href="mailto:{{$apart[0]->apart_mail}}" class="text-light-dark">{{$apart[0]->apart_mail}}</a>
										</li>
										@endif
										@if(!empty($apart[0]->apart_phone1))
										<li class="text-custom-blue fs-18">
											Phone:
											<a href="tel:{{$apart[0]->apart_phone1}}" class="text-light-dark">{{$apart[0]->apart_phone1}}</a>
										</li>
										@endif
										@if(!empty($apart[0]->apart_phone2))
										<li class="text-custom-blue fs-18">
											Phone:
											<a href="tel:{{$apart[0]->apart_phone2}}" class="text-light-dark">{{$apart[0]->apart_phone2}}</a>
										</li>
										@endif
										@if(!empty($apart[0]->apart_whatsapp))
										<li class="text-custom-blue fs-18">
											Whatsapp:
											<a href="https://api.whatsapp.com/send?phone={{$apart[0]->apart_whatsapp}}" target="_blank" class="text-light-dark">{{$apart[0]->apart_mail}}</a>
										</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	@section('script')
	<script>
	$('#reservation_check').click(function(){
		$('#available_room').hide();
		$('#loading').show();
		var data = $('#reservation_add').serialize();
		$.ajax({
			type: "POST",
			url: "reservation-check",
			data: data,
			success: function(data) {
				$('#loading').hide();
				$('#available_room').html(data);
				$('#available_room').show();
			},
			error: function(data) {
				
			}
		});
	});
	</script>

	<script>
	$('#apart_support_add_button').click(function(){
		
		$('#verifycodedulyfalse').hide();

		var verifycode = $('#verification_code').val();
		var verifynum = $('#verification_num').val();
		
		if(verifycode==verifynum){
			var form = $('#apart_support_add').serialize();
			$.ajax({
				url: "{{route('apart_support_add')}}", 
				type: "POST",
				data: form,
				success: function(data) {
					<?php
						echo "
						swal({
						title: 'Your Request Received',
						text: 'We will contact you as soon as possible',
						type: 'success',
						button: 'Aww yiss!',
						}).then((value) => {
						window.location.reload()
						});
						";
					?>
				},
				error: function(data) {
					<?php
						echo "
						swal({
						title: 'An error occurred',
						text: 'Please try again',
						type: 'error',
						button: 'Aww yiss!',
						})
						";
					?>
				}
			});
		}
		
		
		if(verifycode!=verifynum){
			$('#verifycodedulyfalse').show();
		}
	})
	</script>

	<?php if(!empty($_COOKIE['start_date']) && !empty($_COOKIE['end_date'])){ ?>
		<script>
		$(document).ready(function(){
			$("#reservation_check").click();
		});
		</script>
	<?php } ?>
	@endsection

@endsection