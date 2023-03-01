@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن عضو
@stop
<form method="POST" action="{{route('personal.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.personal.form')
</form>
@stop