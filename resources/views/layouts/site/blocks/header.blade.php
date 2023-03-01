<div class="topbar" id="top">
	<div class="header exchange-logo">
		<div class="container po-relative">
			<nav class="navbar navbar-expand-lg header-nav-bar">
				<a href="{{route('index')}}" class="navbar-brand">
					<img src="{{asset('assets/upload/'.$setting_site->logo)}}" class="default-logo" alt="Themex">
					
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
				<div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link" href="{{route('index')}}" id="nav-dropdown" data-toggle="" aria-haspopup="true" aria-expanded="false">خانه </a>

						</li>

						<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">دسته بندی <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											@foreach($categor as $cat)
												@if(count($cat->childs) > 0)
												
												
												<li class="dropdown-submenu"> <a class="dropdown-toggle dropdown-item" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false"> {{$cat->title}} <i class="fa fa-angle-right ml-auto"></i></a>
													<ul class="dropdown-menu menu-right font-14 b-none animated flipInY">
															@foreach($cat->childs as $child)
																
																<a class="dropdown-item" href="{{route('productdetail',['id'=>$cat->id])}}">{{@$child->title}}</a>
															@endforeach
													</ul>
												</li>
												@else
													<a class="dropdown-toggle dropdown-item" href="{{route('productdetail',['id'=>$cat->id])}}">{{@$cat->title}} </i></a>
												@endif
											@endforeach
										</ul>
									</li>

						


						</li>
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link" href="{{route('getcontact')}}" id="nav-dropdown" data-toggle="" aria-haspopup="true" aria-expanded="false">تماس با ما</a>

						</li>
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link" href="{{route('bloglist')}}" id="nav-dropdown" data-toggle="" aria-haspopup="true" aria-expanded="false">مقالات</a>

						</li>
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link" href="{{route('newslist')}}" id="nav-dropdown" data-toggle="" aria-haspopup="true" aria-expanded="false">اخبار</a>

						</li>
						<li class="nav-item dropdown nav-dropdown">
							<a class="nav-link" href="{{route('getabout')}}" id="nav-dropdown" data-toggle="" aria-haspopup="true" aria-expanded="false">درباره ما</a>

						</li>

					</ul>

					

				</div>
			</nav>
		</div>
	</div>
</div>