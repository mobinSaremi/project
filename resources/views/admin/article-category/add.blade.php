@extends('layouts.admin.master')
@section('content')
@section('title')
افزودن 
@stop
<form method="POST" action="{{route('article_category.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.article-category.form')
</form>
@stop