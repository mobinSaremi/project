@extends('layouts.admin.master')
@section('content')
<form method="POST" action="{{route('image.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.productimage.form')
</form>

@stop