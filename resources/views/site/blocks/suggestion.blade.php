<section class="gray">
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h2></h2>
								<p></p>
							</div>
						</div>
					</div>
					
					<div class="row">
						@foreach($suggestions as $suggestion)
						
						<div class="col-lg-4 col-md-4">
							<div class="testimonial-wrap aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
								<i class="fa fa-quote-left"></i>
								<p>{!! $suggestion->description !!}</p>
								
								<div class="client-thumb-box">
									<div class="client-thumb-content">
										<div class="client-thumb">
											<img src="{{asset('assets/upload/'.$suggestion->image)}}" class="img-responsive img-circle" alt="">
										</div>
										<h5 class="mb-0">{{$suggestion->name}} </h5>
										<span class="small-font">{{$suggestion->post}} </span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
					
				</div>
			</section>