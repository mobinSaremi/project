@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن مقاله
@stop
<form method="POST" action="{{route('article.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.article.form')
</form>

@stop