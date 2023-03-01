@extends('layouts.admin.master')
@section('content')
@section('css')
@section('title')
افزودن خبر
@stop
<link href="{{ asset('assets/admin/css/jalalidatepicker.css')}}" rel="stylesheet">
    <style>
        jdp-container{
            z-index: 9999;
        }
    </style>
    @stop
<form method="POST" action="{{route('news.add')}}"  enctype="multipart/form-data">
    @csrf
@include('admin.news.form')
</form>
<script src="{{ asset('assets/admin/js/jalalidatepicker.js')}}"></script>
    <script>
        jalaliDatepicker.startWatch({
            separatorChar: "/",
            minDate: "attr",
            maxDate: "attr",
            changeMonthRotateYear: true,
            showTodayBtn: true,
            showEmptyBtn: true
        });
        //flatpickr("[data-jdp]");
        document.getElementById("aaa").addEventListener("jdp:change", function(e) {
            console.log(e)
        });
    </script>
@stop
