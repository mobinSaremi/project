@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش عضو
@stop
<form method="POST" action="{{route('personal.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.personal.form')
</form>

@stop