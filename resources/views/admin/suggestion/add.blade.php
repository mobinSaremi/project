@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن پیشنهاد
@stop
<form method="POST" action="{{route('suggestion.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.suggestion.form')
</form>
@stop