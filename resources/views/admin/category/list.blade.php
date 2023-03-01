@extends('layouts.admin.master')
@section('content')
@section('title')
لیست دسته بندی
@stop
<div class="container p-2">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">جدول  دسته بندی</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{route('category.add')}}" class="btn btn-sm btn-light-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->افزودن دسته
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th>شماره</th>
                            <th>عنوان</th>
                            <th>عنوان سئو</th>
                            <th>دسته اصلی</th>
                            <th>وضعیت نمایش</th>
                            <th>عملیات</th>

                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($category as $categor)
                        <tr>
                            <td>{{$categor->id}}</td>
                            <td>
                              {{$categor->title}}
                            </td>
                            <td>
                            {{$categor->title_seo}}
                            </td>
                            <td>{{@$categor->parent->title}}</td>
                            <td>
                            @if($categor->status == 1) <label class="text-success" for="">فعال</label> @else <label class="text-danger" for="">غیر فعال</label> @endif
                            </td>
                           <td class="d-flex ">
                            <a class="btn btn-info  mx-1" href="{{route('category.edit',['id'=>$categor->id])}}" style="width: 80px;">ویرایش</a>
                            <a class="btn btn-danger" href="{{route('category.delete',['id'=>$categor->id])}}" style="width: 80px;">حذف</a>
                           </td>
                        </tr>
                        @endforeach()
                        <tr>
                            <td>

                        </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->

    </div>
</div>

@stop