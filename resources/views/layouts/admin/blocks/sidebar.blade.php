<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
	<!--begin::Logo-->
	<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
		<!--begin::Logo image-->
		<a href="../../demo1/dist/index.html">
			<img alt="Logo" src="{{asset('assets/admin/media/logos/default-dark.svg')}}" class="h-25px app-sidebar-logo-default" />
			<img alt="Logo" src="{{('assets/admin/media/logos/default-small.svg')}}" class="h-20px app-sidebar-logo-minimize" />
		</a>
		<!--end::Logo image-->
		<!--begin::Sidebar toggle-->

		<!--end::Sidebar toggle-->
	</div>
	<!--end::Logo-->
	<!--begin::sidebar menu-->
	<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
		<!--begin::Menu wrapper-->
		<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
			<!--begin::Menu-->
			<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
					<!--begin:Menu link-->

					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="{{route('index.admin')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> داشبورد</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link " href="{{route('category')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">دسته بندی</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('product')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">محصولات</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('article')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">مقالات</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('article_category')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">دسته بندی مقالات</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('personal')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">تیم ما</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('slider')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">اسلایدر</span>
						</a>
						<!--end:Menu link-->
					</div>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('suggestion')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">پیشنهادات</span>
						</a>
						<!--end:Menu link-->
					</div>
					<!--end:Menu item-->
					<!--begin:Menu item-->

					<!--end:Menu item-->
					<!--begin:Menu item-->

					<!--end:Menu item-->
					<!--begin:Menu item-->
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('news')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">اخبار</span>
						</a>
						<!--end:Menu link-->
					</div>
					<?php
					$num_comment = App\Models\ArticleComment::where('status', 0)->count();
					?>
					<div class="menu-item">
						<a class="menu-link" href="{{route('comment')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">نظرات مقالات</span>
							<span>({{$num_comment}})</span>
						</a>
						<!--end:Menu link-->
					</div>
					<?php
					$num_newcomment = App\Models\NewsComment::where('status', 0)->count();
					?>
					<div class="menu-item">
						<a class="menu-link" href="{{route('newcomment')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">نظرات اخبار</span>
							<span>({{$num_newcomment}})</span>
						</a>
						<!--end:Menu link-->
					</div>
					<?php
					$num_contact = App\Models\ContactUs::where('status', 0)->count();
					?>
					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('contact_us')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> تماس با ما</span>
							<span>({{$num_contact}})</span>
						</a>
						<!--end:Menu link-->
					</div>

					<div class="menu-item">
						<!--begin:Menu link-->
						<a class="menu-link" href="{{route('setting.admin',['id'=>1])}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> تنظیمات</span>
						</a>
						<!--end:Menu link-->
					</div>





				</div>
				<!--end::Menu-->
			</div>

		</div>

	</div>