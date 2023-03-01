<section class="bg--dark">
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h2 class="font-2 font-normal">  </h2>
								<p></p>
							</div>
						</div>
					</div>
					
					<div class="row">
						@foreach($personals as $personal)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="our-team" data-aos="fade-up" data-aos-duration="1200">
								<img src="{{asset('assets/upload/'.$personal->avatar)}}" class="img-responsive" alt="" />
								<h4>{{$personal->fullname}}</h4>
								<span class="designation bg-success">{{$personal->post}} </span>
								<p>{!! $personal->description !!}</p>
								<ul class="our-team-profile">
								<li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="http://www.twitter.com/share?url={{url()->current()}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="http://www.linkedin.com/share?url={{url()->current()}}"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/sharer.php?u={{url()->current()}}"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						@endforeach
					</div>
				
				</div>
			</section>
