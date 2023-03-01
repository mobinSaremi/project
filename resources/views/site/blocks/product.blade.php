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
						@foreach($pro as $product)
					<div class="col-lg-4 col-md-4 mb-4">
							<div class="feature feature-1">
								<img class="img-responsive" src="{{asset('assets/upload/'.$product->image)}}" alt="Image">
								<div class="feature__body boxed boxed--border">
									<h4>{{$product->title}}</h4>
									<p>
									{!! Illuminate\Support\Str::limit(@$product['description'], 100, $end='...')!!}

									</p>
									<a href="{{route('productdetail',['id'=>$product->id])}}" class="read-more">ادامه  مطلب<i class="ti-arrow-right"></i></a>
								</div>
							</div>
						</div>
						@endforeach
						
						
					</div>
					
				</div>
			</section>