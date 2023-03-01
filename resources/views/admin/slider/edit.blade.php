@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش اسلایدر
@stop
<form method="POST" action="{{route('slider.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.slider.form')
</form>

@stop