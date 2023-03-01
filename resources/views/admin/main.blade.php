@extends('layouts.admin.master')
@section('content')
@section('title')
داشبورد
@stop

<div class="container ">
    <div class="box mt-3">
        <div class="row  m-0  w-100  justify-content-center ">
            <?php $num_news = App\Models\News::where('status', 1)->count(); ?>
            <div class="col-4  m-3 " style="background:#ccc ;padding:20px;   border-radius: 20px;">
                <h3>اخبار</h3>
                <p>({{$num_news}})</p>
            </div>

            <?php $num_comment = App\Models\ArticleComment::where('status', 1)->count(); ?>
            <div class="col-4  m-3" style="background:#bbc ;padding:20px   ;  border-radius: 20px;">
                <h3>نظرات مقالات</h3>
                <p>({{$num_comment}})</p>
            </div>
        </div>
        <div class="row m-0 w-100   justify-content-center">
            <?php $num_product = App\Models\Product::where('status', 1)->count(); ?>
            <div class="col-4  m-3" style="background:#aac ;padding:20px ;    border-radius: 20px;">
                <h3>محصولات</h3>
                <p>({{$num_product}})</p>
            </div>
            <?php $num_contact = App\Models\ContactUs::where('status', 1)->count(); ?>
            <div class="col-4  m-3" style="background:#aaa ;padding:20px ;    border-radius: 20px;">
                <h3>تماس باما</h3>
                <p>({{$num_contact}})</p>
            </div>
        </div>
        <?php $num_newecomment = App\Models\NewsComment::where('status', 1)->count(); ?>
        <div class="row m-0  w-100  justify-content-center">
            <div class="col-4 m-3" style="background:#bbc ;padding:20px ;  border-radius: 20px;">
                <h3>نظرات اخبار</h3>
                <p>({{$num_newecomment}})</p>
            </div>
        </div>
    </div>





</div>




@stop