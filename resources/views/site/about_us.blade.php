@extends('layouts.site.master')
@section('content')
@section('title')
درباره ما
@stop
 <!DOCTYPE html>
<html lang="en">
	
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
		
       
			
			<!-- ============================ Hero Banner  Start================================== -->
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/1e530ca2d79d91f27bc3d8e0529f1f4d.jpg')}}') no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>درباره ما</h1>
							<p><a href="{{route('index')}}">خانه</a><span class="current-page"> درباره ما</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-6 col-md-6">
							<div class="about-content">
								<h2>{{$setting_site->about_us_title}}</h2>
								<p>{!! $setting_site->about_us_description !!}</p>
								<ul class="our-team-profile ts-light-bg">
									<li><a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="http://www.twitter.com/share?url={{url()->current()}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="http://www.linkedin.com/share?url={{url()->current()}}"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/sharer.php?u={{url()->current()}}"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							
						</div>
						<div class="col-lg-6 col-md-6">
							<img src="{{asset('assets/upload/'.$setting_site->image)}}" class="img-fluid mx-auto" alt="">
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->
			
			<!-- ============================ What We Do & Who We Are Start ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ What We Do & Who We Are End ======================= -->
			
			<!-- ============================ Our Partner Start ================================== -->
			<section>
				<div class="container">
				
					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h2>{{$setting_site->personal_title}} </h2>
								<p>{!! $setting_site->personal_description !!}</p>
							</div>
						</div>
					</div>
					
					<div class="row">
					@foreach($person as $personal)
						<div class="col-lg-4 col-md-4 col-sm-6 mb-4">
							<div class="our-team">
								<img src="{{asset('assets/upload/'.$personal->avatar)}}" class="img-responsive" alt="" />
								<h4><a href="about-2.html#"> {{$personal->name}}</a></h4>
								<span class="simple-designation">{{$personal->post}}</span>
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
			<div class="clearfix"></div>
			<!-- ============================ Our Partner End ================================== -->
			
			<!-- ============================ Our Brand End ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ Our Brand End ================================== -->
			
			<!-- ============================ Get Award End ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ Get Award End ================================== -->
			
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
						<h5 class="modal-title" id="exampleModalLongTitle">شروع  به  کار با تم ایکس</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form>
							<div class="row">
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="نام کامل">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<input type="email" class="form-control" placeholder="ایمیل شما">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<input type="text" class="form-control" placeholder="شماره">
								</div>
								
								<div class="form-group col-md-6 col-sm-6">
									<select class="form-control">
									  <option>بودجه شما</option>
									  <option>5000 تومان - 10،000 تومان</option>
									  <option>10000 تومان - 15،000 تومان</option>
									  <option>15000 تومان - 20،000 تومان</option>
									  <option>20000 تومان - 50،000 تومان</option>
									</select>
								</div>
								
								<div class="form-group col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="نظر"></textarea>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<ul class="no-ul-list mb-2">
										<li>
											<input id="checkbox-1" class="checkbox-custom" name="checkbox-1" type="checkbox">
											<label for="checkbox-1" class="checkbox-custom-label"><a href="about-2.html#">با شرایط و ضوابط موافقت کنید</a></label>
										</li>
									</ul>
								</div>
								
								<div class="col-md-12 col-sm-12">
									<button type="button" class="btn btn-primary">ارسال درخواست</button>
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

</html>
@stop