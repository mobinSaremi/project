@extends('layouts.admin.master')
@section('content')
@section('title')
ویرایش مقاله
@stop
<form method="POST" action="{{route('article.edit',['id'=>$data->id])}}"  enctype="multipart/form-data">
    @csrf
@include('admin.article.form')
</form>

@stop