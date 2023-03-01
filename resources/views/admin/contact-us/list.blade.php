@extends('layouts.admin.master')
@section('content')
@section('title')
لیست درخواست تماس باما
@stop
<div class="container p-2">
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">جدول  تماس باما</span>
            </h3>
           
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
                            <th>نام و نام خانوادگی</th>
                            <th> ایمیل</th>
                            <th>موضوع</th>
                            <th>نظر</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>

                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>
                              {{$contact->name}}
                            </td>
                            
                           <td>{{$contact->email}}</td>
                           <td>{{$contact->subject}}</td>
                           <td>{{$contact->comment}}</td>
                            <td>
                            @if($contact->status == 1) <label class="text-success" for="">خوانده شده</label> @else <label class="text-danger" for=""> خوانده نشده</label> @endif
                            </td>
                           <td>
                            <a class="btn btn-danger" href="{{route('contact_us.delete',['id'=>$contact->id])}}" style="width: 80px;">حذف</a>
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