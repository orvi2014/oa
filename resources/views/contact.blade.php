<div id="fh5co-contact-section">
	<div class="container-fluid">
		<div class="heading-section text-center">
			<h2>Contact Us</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 animate-box">
					<h3>Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-location-pin"></i>
							<p>Mirpur DOHS, Avenue 3</p>
						</li>
						<li><i class="icon-phone2"></i>
							<p>+880 168 3754716</p>
						</li>
						<li><i class="icon-mail"></i>
							<p><a href="#">services.oabd@gmail.com </a></p>
						</li>
						<li><i class="icon-globe2"></i>
							<p><a href="#">oabd.herokuapp.com</a></p>
						</li>
					</ul>
				</div>

				<div class="col-md-8 animate-box">
					<div class="row">
						@if(Session::has('flash_message'))
						<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
						@endif
						<form method="POST" action="{{url ('sendEmail')}}">
							{{ csrf_field() }}
							<div class="col-md-6">
								<div class="form-group">
									<input name="name" type="text" class="form-control" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="email" type="text" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<button class="btn btn-primary">Send Message</button> </div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>