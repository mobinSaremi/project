@extends('layouts.site.master')
@section('content')
@section('title')
 تیم ما
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
			<div class="container-fluid breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<a href="{{route('index')}}">
							خانه
							</a>
							<a href="javascript:void(0)">
								<span>
									<i class="ti-arrow-right"></i>
								</span>
							دیدار با تیم
							</a>
						</div>
					</div>
				</div>
			</div>	
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Our Team Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						@foreach($personals as $personal)
						<div class="col-lg-4 col-md-6 col-sm-12 mb-4">
							<div class="our-team">
								<img src="{{asset('assets/upload/'.$personal->image)}}" class="img-responsive" alt="" />
								<h4>{{$personal->name}}</h4>
								<span class="designation bg-success">{{$personal->post}}</span>
								<p>{!! $personal->description !!}</p>
								<ul class="our-team-profile">
									<li><a href="{{$personal->facebook}}"><i class="fa fa-facebook"></i></a></li>
									<li><a href="{{$personal->twitter}}"><i class="fa fa-twitter"></i></a></li>
									<li><a href="{{$personal->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="{{$personal->instagram}}"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
						@endforeach
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Our Team End ================================== -->
			
			<!-- ============================ Our Team Start ================================== -->
			
			<div class="clearfix"></div>
			<!-- ============================ Our Team End ================================== -->
			
			
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
											<label for="checkbox-1" class="checkbox-custom-label"><a href="our-team.html#">با شرایط و ضوابط موافقت کنید</a></label>
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