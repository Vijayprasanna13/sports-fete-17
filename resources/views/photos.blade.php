@extends('layouts/base')

@section('title', 'Photos')

@section('body')
  <style media="screen">
    .navbar-default {
      background-color: #7777ff;
    }
    container div .img-thumbnail {
      height: 500px !important;
    }

    #photos {
      padding-top: 100px;
    }

    .row {
      padding: 20px;
    }

    @media (max-width: 767px) {
      img {
        width: 100% !important;
        height: auto !important;
      }
    }
  </style>
  <body>
@endsection

@section('navbar')
<ul class="nav navbar-nav navbar-right">
  <li><a href="/auth/login"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
</ul>
@endsection

@section('content')
<div class="container" id="photos">
  <div class="row">
    <div class="col-sm-3">
      <img src="images/image1.png" class="img-thumbnail img-responsive" alt="">
    </div>
    <div class="col-sm-3">
      <img src="images/image2.jpg" class="img-thumbnail img-responsive" alt="">
    </div>
    <div class="col-sm-3">
      <img src="images/image7.jpg" class="img-thumbnail img-responsive" alt="">
    </div>
    <div class="col-sm-3">
      <img src="images/image4.jpg" class="img-thumbnail img-responsive" alt="">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <img src="images/image5.jpg" class="img-thumbnail img-responsive" alt="">
    </div>
    <div class="col-sm-3">
      <img src="images/image6.jpg" class="img-thumbnail img-responsive" alt="">
    </div>
  </div>
</div>
@endsection
