@extends('layouts.site.master')
@section('content')
@section('title')
جزئیات خبر
@stop
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Themex Multipurpose HTML Template</title>

	<!-- All Plugins Css -->
	<link href="assets/css/plugins.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="assets/css/styles.css" rel="stylesheet">
</head>

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
						<h1>جزئیات خبر</h1>
						<p><a href="{{route('index')}}">خانه</a><span class="current-page">جزئیات خبر</span></p>
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

					<div class="col-lg-8 col-md-8 col-sm-12">
						<article class="blog-news big-detail-wrap">
							<div class="blog-detail-wrap">

								<!-- Featured Image -->
								<figure class="img-holder">
									<a href="blog-detail.html"><img src="{{asset('assets/upload/'.@$news->image)}}" class="img-responsive" alt="News"></a>

								</figure>

								<!-- Blog Content -->
								<div class="full blog-content">

									<a href="blog-detail.html">
										<h3>{{$news->title}}</h3>
									</a>
									<div class="blog-text">
										<p>{!! $news->description !!}</p>


									</div>

									<!-- Blog Share Option -->
									<hr>

								</div>
								<!-- Blog Content -->

							</div>
						</article>

						<!-- Comment -->
						<div class="comment-wrap">
							<div class="comment-detail">
								<div class="comment-detail-title">
									<h4>نظر کاربران </h4>
								</div>

								<ul id="singlecomment-detail" class="comment-detail-list">
									@foreach($comment as $comm)
									<li class="comment" id="comment-56">
										<div class="comment">
											<div class="comment__text">
												<h5>{{$comm->name}}</h5>
												<span>
													<em>{{jdate('Y/m/d',$comm->created_at->timestamp)}}</em>
												</span>
												<p>{{$comm->comment}}</p>

											</div>
											<hr>
										</div><!--end comment-->
									</li><!-- #comment-## -->
									@endforeach
								</ul>

							</div>
						</div>
						<div class="comment-detail-form">
							<div class="section-title2">
								<h3 id="reply-title" class="comment-reply-title">نوشتن نظر
									<small><a rel="nofollow" id="cancel-comment-reply-link" href="blog-detail.html#" style="display:none;">لغو پاسخ</a></small>
								</h3>
							</div>
							<form method="Post" action="{{route('newscomment')}}" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="news_id" value="{{$news->id}}">
								<div class="row">
									<div class="form-group col-md-6 col-sm-6">
										<input type="text" name="name" class="form-control" placeholder="نام شما">
									</div>

									<div class="form-group col-md-6 col-sm-6">
										<input type="email" name="email" class="form-control" placeholder="ایمیل شما">
									</div>

									<div class="form-group col-md-12 col-sm-12">
										<textarea name="comment" class="form-control" placeholder="نظر"></textarea>
									</div>

									<div class="col-md-12 col-sm-12">
										<button class="btn btn-primary" type="submit">ارسال</button>
									</div>
								</div>
							</form>
						</div>

					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="sidebar">
							<div class="side-widget">
								<div class="side-widget-header">
									<h4><i class="ti-check-box"></i>آخرین اخبار</h4>
								</div>
								<div class="side-widget-body p-t-10">
									<div class="side-list">
										<ul class="side-blog-list">
											@foreach($neww as $news)
											<li>
												<a href="blog-detail.html#">
													<div class="blog-list-img">
														<img src="{{asset('assets/upload/'.$news->image)}}" class="img-responsive" alt="">
													</div>
												</a>
												<div class="blog-list-info">
													<h5><a href="{{route('newsdetail',['id'=>$news->id])}}" title="blog">{{$news->title}}</a></h5>

												</div>
											</li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>



						</div>
					</div>

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
						<h5 class="modal-title" id="exampleModalLongTitle">شروع به کار با تم ایکس</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="" enctype="multipart/form-data">
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
											<label for="checkbox-1" class="checkbox-custom-label"><a href="blog-detail.html#">با شرایط و ضوابط موافقت کنید</a></label>
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