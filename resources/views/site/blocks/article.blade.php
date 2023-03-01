<section>
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
                        @foreach($art  as $article)
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="large-features-2" data-aos="fade-up" data-aos-duration="1200">
								<div class="large-features-2-item">
									<div class="large-features-2-icon"><img src="{{asset('assets/upload/'.@$article->image)}}" alt=""></div>
									<div class="large-features-2-content">
										<h4>{{$article->title}}</h4>
										<p>{!! Illuminate\Support\Str::limit(@$article['description'], 100, $end='...')!!}
</p>
										<a href="{{route('blogdetail',['id'=>$article->id])}}" class="read-more">ادامه مطلب<i class="ti-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					
				</div>
			</section>