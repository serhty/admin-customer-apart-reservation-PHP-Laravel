@extends('site.body')
@section('title',$site_settings[0]->site_title.' - Contact')
@section('description',$site_settings[0]->site_description)
@section('keywords',$site_settings[0]->site_keywords)
@section('content')

	<div class="subheader normal-bg section-padding">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<h1 class="text-custom-white">Contact</h1>
				<ul class="custom-flex justify-content-center">
					<li class="fw-500">
						<a href="{{route('home')}}" class="text-custom-white">Home</a>
					</li>
					<li class="active fw-500">
					Contact
					</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
	<section class="section-padding bg-light-white contact-top">
		<div class="container">
			<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="contact-info-box mb-md-40">
					<i class="flaticon-placeholder"></i>
					<h6 class="text-theme fw-600">{{$site_contacts[0]->address}}</h6>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="contact-info-box mb-md-40">
					<i class="flaticon-telephone-1"></i>
					<h6 class="text-theme fw-600"><a href="tel:{{$site_contacts[0]->phone}}" class="text-theme">{{$site_contacts[0]->phone}}</a></h6>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="contact-info-box">
					<i class="flaticon-envelope"></i>
					<h6 class="text-theme fw-600"><a href="mailto:{{$site_contacts[0]->mail}}" class="text-theme">{{$site_contacts[0]->mail}}</a></h6>
				</div>
			</div>
			</div>
		</div>
	</section>
	<div class="section-padding contact-form-map">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="section-header">
						<div class="section-heading">
							<h3 class="text-custom-black">Contact Us!</h3>
							<div class="section-description">
							<p class="text-light-dark">You can write to us 24/7 via the Support Form.</p>
							</div>
						</div>
					</div>
					<form id="support_add" method="post" action="javascript:void(0);" autocomplete="off">
						@csrf
						<?php $verification_num=rand(1000,9999); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control form-control-custom" id="name" name="name" placeholder="Name" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control form-control-custom" id="surname" name="surname" placeholder="Surname" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control form-control-custom" id="mail" name="mail" placeholder="Mail" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control form-control-custom" id="phone" name="phone" placeholder="Phone" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="hidden" class="form-control form-control-custom" id="verification_num" value="<?php echo $verification_num; ?>" readonly>
									<input type="text" class="form-control form-control-custom" value="Verification Code = <?php echo $verification_num; ?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="#" class="form-control form-control-custom" name="verification_code" id="verification_code" placeholder="Enter Verification Code" required="">
									<br>
									<span id="verifycodedulyfalse" style="color:#e30a17; display:none;" style="display:none;">*Verification Code Incorrect</span>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea rows="5" class="form-control form-control-custom" id="message" name="message" placeholder="Message" required=""></textarea>
								</div>
								<button type="submit" class="btn-first btn-submit" id="support_add_button">Send</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-5">
					<div class="contact-map full-height">
						<iframe src="{{$site_contacts[0]->location}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	@section('script')
	<script>
	$('#support_add_button').click(function(){
		
		$('#verifycodedulyfalse').hide();

		var verificationcode = $('#verification_code').val();
		var verificationnum = $('#verification_num').val();
		
		if(verificationcode==verificationnum){
			var form = $('#support_add').serialize();
			$.ajax({
				url: "{{route('support_add')}}", 
				type: "POST",
				data: form,
				success: function(data) {
					<?php
						echo "
						swal({
						title: 'Your Request Received',
						text: 'We will contact you as soon as possible.',
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
		
		
		if(verificationcode!=verificationnum){
			$('#verifycodedulyfalse').show();
		}
	})
	</script>
	@endsection

@endsection