@extends('layouts.site.master')
@section('content')
@section('title')
 {{$setting_site->title_seo}} 
@stop
<!-- ============================ Banner Video Start ================================== -->
@include('site.blocks.slider')
			<!-- ============================ Banner Video End ================================== -->
			
			<!-- ============================ What We Do Start ================================== -->
			@include('site.blocks.article')
			<div class="clearfix"></div>
			<!-- ============================ What We Do End ================================== -->
			
			<!-- ============================ Image Block Start ================================== -->
			<section class="p-0">
				<div class="container-fluid p-0">
					<div class="imagebg height-60" data-overlay="5">
						<div class="bg-img-holder" style="background: url('{{asset('assets/site/img/bn7.jpg')}}'); opacity: 1;">
							<img alt="background" src="{{asset('assets/site/img/bn7.jpg')}}">
						</div>
						<div class="container pos-vertical-center">
							<div class="row text-center justify-content-center">
								<div class="col-md-10">
									<blockquote>"لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون."</blockquote>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Image Block End ================================== -->
			
			<!-- ============================ Our Team Start ================================== -->
			@include('site.blocks.personal')
			<div class="clearfix"></div>
			<!-- ============================ Our Team End ================================== -->
			
			<!-- ============================ Our Prices Start ================================== -->
			@include('site.blocks.product')
			<div class="clearfix"></div>
			<!-- ============================ Our Prices End ================================== -->
			
			<!-- ============================ Our Testimonial Start ================================== -->
			@include('site.blocks.suggestion')
			<div class="clearfix"></div>
			<!-- ============================ Our Testimonial End ================================== -->