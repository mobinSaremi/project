@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن محصول
@stop
<form method="POST" action="{{route('product.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.product.form')
</form>
@stop
