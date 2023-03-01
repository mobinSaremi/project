@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش 
@stop
<form method="POST" action="{{route('article_category.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.article-category.form')
</form>

@stop