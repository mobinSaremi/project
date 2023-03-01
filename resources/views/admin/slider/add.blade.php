@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن اسلایدر
@stop
<form method="POST" action="{{route('slider.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.slider.form')
</form>

@stop