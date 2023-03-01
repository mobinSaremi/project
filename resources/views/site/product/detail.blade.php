@extends('layouts.site.master')
@section('content')
@section('title')
 جزئیات محصول
@stop
<body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Themex</p>
            </div>
        </div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/1e530ca2d79d91f27bc3d8e0529f1f4d.jpg')}}') no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>{{@$product->title}}</h1>
							<p><a href="{{route('index')}}">خانه</a><span class="current-page">جزئیات محصول</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ====== Portfolio Detail ====== -->
			<section>
			  <div class="container">
				
					<div class="row mb-4">
						<div class="col-lg-7 col-md-6 col-sm-12">
                            @foreach($image as $img)
							<img src="{{asset('assets/upload/'.$img->image)}}" class="img-fluid mx-auto mb-2" alt="" />
                            
                            @endforeach
						</div>
						
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="portfolio-detail-caption">
							
								<div class="portfolio-detail-caption-header">
									<h3>{{@$product->title}}</h3>
								</div>
								<div class="portfolio-detail-caption-overview">
									
									<ul class="port-metas mb-3">
										<li><strong>دسته بندی:</strong>{{@$product->category->title}}</li>
										<li><strong>قیمت:</strong>{{@$product->price}} تومان</li>
									</ul>
							
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row mb-5">
						<div class="col-lg-12 col-md-12 col-sm-12">
                        <p>{!! @$product->description !!}</p>
							<blockquote>
								
							</blockquote>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<h3>محصولات بیشتر</h3>
						</div>
					</div>
					<div class="row" id="portfolio">
						
						<!-- Single Project -->
                        @foreach($pro as $product)
						<div class="col-lg-4 col-md-4 col-sm-12 mb-3">
							<div class="project portfolio-inner">
								<img   src="{{asset('assets/upload/'.$product->image)}}" alt="">
								<div class="label">
									<div class="label-text"> <a href="{{route('productdetail',['id'=>$product->id])}}" class="text-title">{{$product->title}}</a> </div>
									<div class="label-bg"></div>
								</div>
								
							</div>
						</div>
						@endforeach
						
						
					</div>
				
			  </div>
			</section>
			<!-- ====== Portfolio Detail End ====== --> 
			
			<!-- ============================ Sign up Start ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ Sign up End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			
			<!-- ============================ Footer End ================================== -->
			
			<!-- Modal -->
			<div class="modal fade" id="getstarted" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content" id="registermodal">
					  <div class="modal-header theme-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Start Work With Themex</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form>
							<div class="row">
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="Full Name">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<input type="email" class="form-control" placeholder="Your Email">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="Number">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<select class="form-control">
									  <option>Your Budget</option>
									  <option>$5,000 - $10,000</option>
									  <option>$10,000 - $15,000</option>
									  <option>$15,000 - $20,000</option>
									  <option>$20,000 - $50,000</option>
									</select>
								</div>
								
								<div class="form-group col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Comment"></textarea>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<ul class="no-ul-list mb-2">
										<li>
											<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
											<label for="checkbox-1" class="checkbox-custom-label"><a href="portfolio-detail.html#">Agree terms & Conditions</a></label>
										</li>
									</ul>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<button type="button" class="btn btn-primary">Send Rquest</button>
								</div>
							</div>
						</form>
					  </div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->


	</body>
    @stop