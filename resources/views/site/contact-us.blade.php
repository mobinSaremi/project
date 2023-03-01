@extends('layouts.site.master')
@section('content')
@section('title')
 تماس با ما
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
			<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/1e530ca2d79d91f27bc3d8e0529f1f4d.jpg')}}') no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>در تماس باشید</h1>
							<p><a href="{{route('index')}}">خانه</a><span class="current-page">تماس با ما</span></p>
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
						
						<div class="col-lg-5 col-md-5 bg-primary">
							<div class="contact-address light-text">
								
								
								<div class="add-box my-4">
									<div class="add-icon-box">
										<i class="ti-map-alt"></i>
									</div>
									<div class="add-text-box">
										<h4> آدرس</h4>
										{{$setting_site->address}}
										 <br>
										  
									</div>
								</div>
								
								<div class="add-box  my-4">
									<div class="add-icon-box">
										<i class="ti-email"></i>
									</div>
									<div class="add-text-box">
										<h4>ایمیل </h4>

										{{$setting_site->email}}
										<br>
									</div>
								</div>
								<div class="add-box my-4">
									<div class="add-icon-box">
										<i class="ti-headphone"></i>
									</div>
									<div class="add-text-box">
										<h4> شماره تماس</h4>
										{{$setting_site->number_phone}}
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="contact-form">
								<form method="Post"  action="{{route('postcontact')}}" enctype="multipart/form-data">
                                @csrf
									<div class="form-row">
										<div class="form-group col-md-6">
										  <label>نام</label>
										  <input type="text" name="name" class="form-control" placeholder="نام">
										</div>
										<div class="form-group col-md-6">
										  <label>ایمیل</label>
										  <input type="email" name="email" class="form-control" placeholder="ایمیل">
										</div>
									</div>
									<div class="form-group">
										<label>موضوع</label>
										<input type="text" name="subject" class="form-control" placeholder="موضوع">
									</div>
									<div class="form-group">
										<label>پیام</label>
										<textarea class="form-control" name="comment" placeholder="اینجا تایپ کنید ..."></textarea>
									</div>
									<button type="submit" class="btn btn-primary">ارسال درخواست</button>
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Who We Are End ================================== -->

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
											<label for="checkbox-1" class="checkbox-custom-label"><a href="contact.html#">با شرایط و ضوابط موافقت کنید</a></label>
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
		</div>
		

	</body>

</html>
@stop