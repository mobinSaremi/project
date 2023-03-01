@extends('layouts.site.master')
@section('content')
@section('title')
لیست مقالات
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
           
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url('{{asset('assets/upload/1e530ca2d79d91f27bc3d8e0529f1f4d.jpg')}}') no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>آخرین مقالات</h1>
							<p><a href="{{route('index')}}">خانه</a><span class="current-page">مقاله</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Blog Grid Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						@foreach($art as $article)
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="{{asset('assets/upload/'.$article->image)}}" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										
									</div>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="{{route('blogdetail',['id'=>$article->id])}}">{{$article->title}}</a></h4>
									<p>{!! Illuminate\Support\Str::limit(@$article['description'], 100, $end='...')!!}</p>
								</div>
							
							</div>
						</div>
						
						@endforeach
						
						
					</div>
					
					
					
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
			
			
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
											<label for="checkbox-1" class="checkbox-custom-label"><a href="blog-grid.html#">با شرایط و ضوابط موافقت کنید</a></label>
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
		

	</body>

</html>
@stop