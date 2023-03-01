@extends('layouts.admin.master')
@section('content')
@section('title')
لیست نظرات اخبار
@stop
<div class="container p-2">
    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1"> نظرات اخبار</span>
            </h3>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light">
                            <th>شماره</th>
                            <th>نام و نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>وضعیت نمایش</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newscomment as $newcomment)
                        <tr>
                            <td>{{$newcomment->id}}</td>
                            <td>
                                {{$newcomment->name}}
                            </td>
                            <td>{{$newcomment->email}}</td>
                            <td>
                                @if($newcomment->status == 1) <label class="text-success" for="">خوانده شده </label> @else <label class="text-danger" for=""> خوانده نشده</label> @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$newcomment->id}}">
                                    نمایش
                                </button>
                                <div class="modal fade" id="staticBackdrop{{$newcomment->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">کامنت</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{$newcomment->comment}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                                @if($newcomment->status ==0)
                                                <a class="btn btn-info" href="{{route('newcomment.update',['id'=>$newcomment->id])}}">نمایش داده شود</a>
                                                @else
                                                <a class="btn btn-info" href="{{route('newcomment.update',['id'=>$newcomment->id])}}">نمایش داده نشود</a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-danger" href="{{route('newcomment.delete',['id'=>$newcomment->id])}}" style="width: 80px;">حذف</a>
                            </td>
                        </tr>
                        @endforeach()
                        <tr>
                            <td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop