@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش محصول
@stop
<form method="POST" action="{{route('product.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.product.form')
</form>

@stop