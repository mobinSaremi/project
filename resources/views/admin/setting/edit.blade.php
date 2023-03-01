@extends('layouts.admin.master')
@section('content')
@section('title')
تنظیمات
@stop
<div class="col-12">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active text-dark " id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">تنظیمات</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link  text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">درباره ما</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link  text-dark" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="true">تکست ها</button>
        </li>
    </ul>
    <div class="tab-content  p-3" id="myTabContent">
        <div class="tab-pane fade show active  pt-3" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <form method="POST" action="{{route('setting',['id'=>$data->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row m-0  w-100">
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">عنوان سئو</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="title_seo" value="@if(isset($data)) {{@$data->title_seo}}    @else {{@old('title_seo')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">آدرس</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="url" value="@if(isset($data)) {{@$data->url}}    @else {{@old('url')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                    </div>
                    <div class="row m-0  w-100">
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">آدرس توییتر</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="twitter_link" value="@if(isset($data)) {{@$data->twitter_link}}    @else {{@old('twitter_link')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">شماره تلفن</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="number_phone" value="@if(isset($data)) {{@$data->number_phone}}    @else {{@old('number_phone')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row m-0  w-100">
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                                <span class="required">آدرس فیسبوک</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="facebook_link" value="@if(isset($data)) {{@$data->facebook_link}}    @else {{@old('facebook_link')}}   @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">آدرس اینستاگرام</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="instagram_link" value="@if(isset($data)) {{@$data->instagram_link}}    @else {{@old('instagram_link')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row  m-0  w-100">
                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">آدرس لینکدین</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="linkedin_link" value="@if(isset($data)) {{@$data->linkedin_link}}    @else {{@old('linkedin_link')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="col-6 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">آدرس ایمیل</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="email" value="@if(isset($data)) {{@$data->email}}    @else {{@old('email')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row m-0  w-100">
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>توضیحات سئو</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                            </label>
                            <textarea class="form-control  ckeditor" name="description_seo" style="background:darkgray ;"> @if(isset($data)) {{@$data->description_seo}}     @else {{@old('description_seo')}}       @endif</textarea>
                        </div>
                    </div>
                    <div class="row m-0  w-100">
                        <div class="form-group mb-3">
                            <label for="example-fileinput"> انتخاب لوگو </label>
                            <img src="{{asset('assets/upload/'.@$data->logo)}}" alt="" style="width:150 ; height:100px">
                            <input type="file" name="logo" id="example-fileinput" class="form-control-file">
                        </div>

                        <div class="save">
                            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade pt-3" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="row  w-100 m-0">
                <div class="col-12 px-lx-5 px-lg-5 px-md-3 px-sm-2">
                    <div class="container">
                        <div class="">
                            <form method="POST" action="{{route('setting',['id'=>$data->id])}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row m-0  w-100">
                                    <div class="col-12">
                                        <div class="fv-row fv-plugins-icon-container">
                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                <span class="required"> عنوان </span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                                            </label>
                                            <input type="text" class="form-control form-control-solid" name="about_us_title" value="@if(isset($data)) {{@$data->about_us_title}}   @else {{@old('about_us_title')}} @endif" style="background:darkgray ;">
                                        </div>
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>توضیحات</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                                    </label>
                                    <textarea class="form-control ckeditor" name="about_us_description" style="background:darkgray ;"> @if(isset($data)) {{@$data->about_us_description}}     @else {{@old('about_us_description')}}       @endif</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="example-fileinput"> انتخاب عکس </label>
                                    <img src="{{asset('assets/upload/'.@$data->image)}}" alt="" style="width:150 ; height:100px">
                                    <input type="file" name="image" id="example-fileinput" class="form-control-file">
                                </div>
                                <br>
                                <div class="save">
                                    <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade   pt-3" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
            <form method="POST" action="{{route('setting',['id'=>$data->id])}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row m-0  w-100">
                        <div class="col-12 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">عنوان مقاله </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="blog_title" value="@if(isset($data)) {{@$data->blog_title}}    @else {{@old('blog_title')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>توضیحات مقاله</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                            </label>
                            <textarea class="form-control  ckeditor" name="blog_description" style="background:darkgray ;"> @if(isset($data)) {{@$data->blog_description}}     @else {{@old('blog_description')}}       @endif</textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="row m-0  w-100">
                        <div class="col-12 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">عنوان تیم ما </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="personal_title" value="@if(isset($data)) {{@$data->personal_title}}    @else {{@old('personal_title')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>توضیحات تیم ما</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                            </label>
                            <textarea class="form-control  ckeditor" name="personal_description" style="background:darkgray ;"> @if(isset($data)) {{@$data->personal_description}}     @else {{@old('personal_description')}}       @endif</textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="row m-0  w-100">
                        <div class="col-12 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">عنوان محصولات </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="product_title" value="@if(isset($data)) {{@$data->product_title}}    @else {{@old('product_title')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>توضیحات محصولات </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                            </label>
                            <textarea class="form-control  ckeditor" name="product_description" style="background:darkgray ;"> @if(isset($data)) {{@$data->product_description}}     @else {{@old('product_description')}}       @endif</textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="row m-0  w-100">
                        <div class="col-12 fv-row fv-plugins-icon-container">
                            <label class="fs-12 fw-semibold form-label mt-3">
                                <span class="required">عنوان پیشنهادات </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-kt-initialized="1"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="suggestion_title" value="@if(isset($data)) {{@$data->suggestion_title}}    @else {{@old('suggestion_title')}}  @endif" style="background:darkgray ;">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>توضیحات پیشنهادات </span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Enter any additional notes about the contact (optional)." data-kt-initialized="1"></i>
                            </label>
                            <textarea class="form-control  ckeditor" name="suggestion_description" style="background:darkgray ;"> @if(isset($data)) {{@$data->suggestion_description}}     @else {{@old('suggestion_description')}}       @endif</textarea>
                        </div>
                    </div>
                    <div class="row m-0  w-100">
                        <div class="save">
                            <button class="btn btn-primary" type="submit" style="margin: 0 auto;display:flex">ذخیره</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @stop