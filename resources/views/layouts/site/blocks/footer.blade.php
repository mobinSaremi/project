<footer class="light-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">مقالات</h4>
									<ul class="footer-menu">
										@foreach($art  as $arti)
										<li><a href="{{route('blogdetail',['id'=>$arti->id])}}">{{$arti->title}}</a></li>
										@endforeach
									</ul>
								</div>
							</div>		
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">محصولات</h4>
									<ul class="footer-menu">
										@foreach($pro as $product)
										<li><a href="{{route('productdetail',['id'=>$product->id])}}">{{$product->title}}</a></li>
									    @endforeach
									</ul>
								</div>
							</div>
									
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">راه های ارتباطی</h4>
										<p>آدرس: {{$setting_site->address}}</p>
										<p>تلفن: {{$setting_site->number_phone}}</p>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">فالو کردن ما</h4>
									<ul class="footer-bottom-social">
										<li><a href="{{$setting_site->facebook}}"><i class="fa fa-facebook"></i></a></li>
										<li><a href="{{$setting_site->twitter}}"><i class="fa fa-twitter"></i></a></li>
										<li><a href="{{$setting_site->instagram}}"><i class="fa fa-instagram"></i></a></li>
										<li><a href="{{$setting_site->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									
									
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2019 تم ایکس. بومی سازی توسط <a href="https://drizvato.com/">آرش خادملو</a> همه حقوق محفوظ است</p>
							</div>
							
						</div>
					</div>
				</div>
			</footer>