@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش دسته بندی
@stop
<form method="POST" action="{{route('category.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.category.form')
</form>

@stop