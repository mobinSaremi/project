@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن دسته
@stop
<form method="POST" action="{{route('category.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.category.form')
</form>

@stop