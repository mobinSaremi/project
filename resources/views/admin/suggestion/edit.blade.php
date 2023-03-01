@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش پیشنهاد
@stop
<form method="POST" action="{{route('suggestion.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.suggestion.form')
</form>

@stop