<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<title>@yield('title')</title>
    	<meta name="description" content="@yield('description')">
    	<meta name="keywords" content="@yield('keywords')">


		<link rel="shortcut icon" href="{{asset('public/')}}/images/logo.png" type="image/x-icon" />

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/site/')}}assets/images/logo.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('public/site/')}}assets/images/logo.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/site/')}}assets/images/logo.png">
		<link rel="apple-touch-icon-precomposed" href="{{asset('public/site/')}}assets/images/logo.png">
		<link rel="shortcut icon" href="{{asset('public/site/')}}/assets/images/logo.ico">
		<link href="{{asset('public/site/')}}/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/font-awesome.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/font/flaticon.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/slick.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/ion.rangeSlider.min.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/datepicker.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/magnific-popup.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/nice-select.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/style.css" rel="stylesheet">
		<link href="{{asset('public/site/')}}/assets/css/responsive.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

		<!-- fancybox -->
		<link rel="stylesheet" href="{{asset('public/site/')}}/css/jquery.fancybox.min.css" />

		<!-- sweetalert2 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="{{asset('public/site/')}}/sweetalert/sweetalert2.min.js"></script>
		<link rel="stylesheet" href="{{asset('public/site/')}}/sweetalert/sweetalert2.min.css">

		<!-- MY CSS -->
		<link href="{{asset('public/site/')}}/css/mycss.css" rel="stylesheet">


	</head>
	<body>
		<header class="header">
			<div class="topbar bg-custom-blue">
				<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="left-side">
							<ul class="custom-flex">
								@if(!empty($site_contacts[0]->facebook))
								<li>
									<a href="{{$site_contacts[0]->facebook}}" class="text-custom-white" target="_blank">
									<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->twitter))
								<li>
									<a href="{{$site_contacts[0]->twitter}}" class="text-custom-white" target="_blank">
									<i class="fab fa-twitter"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->instagram))
								<li>
									<a href="{{$site_contacts[0]->instagram}}" class="text-custom-white" target="_blank">
									<i class="fab fa-instagram"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->youtube))
								<li>
									<a href="{{$site_contacts[0]->youtube}}" class="text-custom-white" target="_blank">
									<i class="fab fa-youtube"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->linkedin))
								<li>
									<a href="{{$site_contacts[0]->linkedin}}" class="text-custom-white" target="_blank">
									<i class="fab fa-linkedin"></i>
									</a>
								</li>
								@endif
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="right-side">
							<ul class="custom-flex">
								@if(!empty($site_contacts[0]->phone))
								<li>
									<a href="tel:{{$site_contacts[0]->phone}}" class="text-custom-white">
									<i class="fa fa-phone"></i>
									{{$site_contacts[0]->phone}}
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->mail))
								<li>
									<a href="mailto:{{$site_contacts[0]->mail}}" class="text-custom-white">
									<i class="fa fa-envelope"></i>
									{{$site_contacts[0]->mail}}
									</a>
								</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="navigation">
				<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main-navigation">
							<div class="logo">
								<a href="{{route('home')}}">
									<img src="{{asset('public/images/')}}/logo.png" class="img-fluid image-fit" alt="Apart">
								</a>
							</div>
							<div class="main-menu">
								<div class="logo">
									<a href="{{route('home')}}">
									<img src="{{asset('public/images/')}}/logo.png" class="img-fluid image-fit" alt="Apart">
									</a>
								</div>
								<nav>
									<ul class="custom-flex">
										<li class="menu-item">
											<a href="{{route('home')}}" class="text-light-dark">Home</a>
										</li>
										<li class="menu-item">
											<a href="{{route('aparts')}}" class="text-light-dark">Aparts</a>
										</li>
										<li class="menu-item">
											<a href="{{route('rooms')}}" class="text-light-dark">Rooms</a>
										</li>
										<li class="menu-item">
											<a href="{{route('blogs')}}" class="text-light-dark">Blog</a>
										</li>
										<li class="menu-item">
											<a href="{{route('contact')}}" class="text-light-dark">Contact</a>
										</li>
									</ul>
								</nav>
								<div class="cta-btn">
									<button type="button" class="btn-first btn-submit" data-toggle="modal" data-target="#apart_customer_add">PUBLISH YOUR APARTMENT!</button>
								</div>
							</div>
							<div class="hamburger-menu">
								<div class="menu-btn">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</header>
		
		@yield('content')
		
		<footer class="section-padding footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="footer-box mb-md-40">
							<h4 class="text-custom-white fw-600">{{$site_settings[0]->site_title}}</h4>
							<p class="text-custom-white">
								Our Social Media Accounts
							</p>
							<ul class="custom-flex socials">
								@if(!empty($site_contacts[0]->facebook))
								<li>
									<a href="{{$site_contacts[0]->facebook}}" class="text-custom-white fs-14" target="_blank">
									<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->twitter))
								<li>
									<a href="{{$site_contacts[0]->twitter}}" class="text-custom-white fs-14" target="_blank">
									<i class="fab fa-twitter"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->instagram))
								<li>
									<a href="{{$site_contacts[0]->instagram}}" class="text-custom-white fs-14" target="_blank">
									<i class="fab fa-instagram"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->youtube))
								<li>
									<a href="{{$site_contacts[0]->youtube}}" class="text-custom-white fs-14" target="_blank">
									<i class="fab fa-youtube"></i>
									</a>
								</li>
								@endif
								@if(!empty($site_contacts[0]->linkedin))
								<li>
									<a href="{{$site_contacts[0]->linkedin}}" class="text-custom-white fs-14" target="_blank">
									<i class="fab fa-linkedin"></i>
									</a>
								</li>
								@endif
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-box mb-md-40">
							<h4 class="text-custom-white fw-600">Quick Menu</h4>
							<ul class="custom links">
								<li class="menu-item">
									<a href="{{route('home')}}" class="text-custom-white">Home</a>
								</li>
								<li class="menu-item">
									<a href="{{route('aparts')}}" class="text-custom-white">Aparts</a>
								</li>
								<li class="menu-item">
									<a href="{{route('rooms')}}" class="text-custom-white">Rooms</a>
								</li>
								<li class="menu-item">
									<a href="{{route('blogs')}}" class="text-custom-white">Blog</a>
								</li>
								<li class="menu-item">
									<a href="{{route('contact')}}" class="text-custom-white">Contact</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-box mb-md-40">
							<h4 class="text-custom-white fw-600">Institutional</h4>
							<ul class="custom links">
								<li class="menu-item">
									<a href="{{route('about')}}" class="text-custom-white">About</a>
								</li>
								<li class="menu-item">
									<a href="{{route('user_agreement')}}" class="text-custom-white">User Agreement</a>
								</li>
								<li class="menu-item">
									<a href="{{route('cookie_policy')}}" class="text-custom-white">Cookie Policy</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			<div class="container">
				<div class="row">
				<div class="col-12">
					<p class="text-custom-white">© {{$site_settings[0]->site_title}} - 2022 | All rights reserved. <a href="#" class="text-custom-white" target="_blank">Web</a> Designed By.</p>
				</div>
				</div>
			</div>
		</div>
		<div id="back-top" class="back-top">
			<a href="#top"><i class="flaticon-arrows"></i></a>
		</div>


		<div class="modal fade" id="apart_customer_add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header border-bottom-0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-title text-center">
							<h6>You can request membership by filling out the form to publish your apartment.</h6>
						</div>
						<div class="d-flex flex-column text-center">
							<form id="membership_form" method="post" action="javascript:void(0);">
							@csrf
								<?php $verification_num=rand(1000,9999); ?>
								<div class="form-group">
									<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="surame" id="surame" placeholder="Surame" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="mail" id="mail" placeholder="Mail" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" value="Verification Code = <?php echo $verification_num; ?>" readonly>
									<input type="hidden" class="form-control" id="verification_num" value="<?php echo $verification_num; ?>" readonly>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="verification_code" id="verification_code" placeholder="Enter Verification Code" required>
									<br>
				                    <span id="verifycodedulyfalse" style="color:#e30a17; display:none;" style="display:none;">*Verification Code Incorrect</span>
								</div>
								<button type="submit" class="btn btn-info btn-block btn-round" id="membershipsend" style="background:#01b7f2">Send</button>
								<span id="requestreceived" style="color:#32a067; display:none;" style="display:none;">Your request has been received. We will contact you as soon as possible. You will be redirected to the homepage after 5 seconds.</span>
				                <span id="erroroccurred" style="color:#e30a17; display:none;" style="display:none;">An error occurred. Please try again.</span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="{{asset('public/site/')}}/assets/js/jquery.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/popper.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/bootstrap.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/ion.rangeSlider.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/slick.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/datepicker.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/datepicker.en.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/isotope.pkgd.min.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/jquery.nice-select.js"></script>
		<script src="{{asset('public/site/')}}/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnd9JwZvXty-1gHZihMoFhJtCXmHfeRQg"></script>
		<script src="{{asset('public/site/')}}/assets/js/custom.js"></script>

		<!-- MY DATEPİCKER -->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		
		<script>
		var dateToday = new Date();
		$( function(){
		$( ".mydatepicker" ).datepicker({
			minDate: dateToday,
			onSelect: function (selectedDate) {
				document.cookie = "start_date="+this.value+"; expires=Thu, 28 Dec 2030 12:00:00 UTC; path=/";
			},
			onClose: function (selectedDate) {
				$(".mydatepicker2").datepicker("option", "minDate", selectedDate);
				$(".mydatepicker2").datepicker("show");
			},
			dateFormat: "dd-mm-yy",
			altFormat: "yy-mm-dd",
			altField:"#tarih-db",
            monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
            dayNamesMin: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ],
			firstDay:1
		});

		$( ".mydatepicker2" ).datepicker({
			onSelect: function (selectedDate) {
				document.cookie = "end_date="+this.value+"; expires=Thu, 28 Dec 2030 12:00:00 UTC; path=/";
			},
			dateFormat: "dd-mm-yy",
			altFormat: "yy-mm-dd",
			altField:"#tarih-db",
            monthNames: [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
            dayNamesMin: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ],
			firstDay:1
		});
		});
		</script>

		<!-- fancybox -->
		<script src="{{asset('public/site/')}}/js/jquery.fancybox.min.js"></script>

		<script>
		$('#membershipsend').click(function(){
			
			$('#verifycodedulyfalse').hide();
			$('#requestreceived').hide();
			$('#erroroccurred').hide();

			var verificationcode = $('#verification_code').val();
			var verificationnum = $('#verification_num').val();
			
			if(verificationcode==verificationnum){
				var form = $('#membership_form').serialize();
				$.ajax({
					url: "{{route('apart_add_request')}}", 
					type: "POST",
					data: form,
					success: function(data) {
						$('#requestreceived').show();
						$('#erroroccurred').hide();
						setTimeout(function(){   
						window.location.assign("/");
						}, 5000);
					},
					error: function(data) {
						$('#requestreceived').hide();
						$('#erroroccurred').show();
					}
				});
			}
			
			
			if(verificationcode!=verificationnum){
				$('#verifycodedulyfalse').show();
			}
		})
		</script>

		@yield('script')

	</body>
</html>