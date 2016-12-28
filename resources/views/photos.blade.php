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

@section('content')
<div class="container" id="photos">
  <div class="row">
    <a href="images/image1.png" target="_blank">
      <div class="col-sm-3">
        <img src="images/image1.png" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
    <a href="images/image2.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image2.jpg" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
    <a href="images/image7.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image7.jpg" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
    <a href="images/image4.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image4.jpg" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
  </div>
  <div class="row">
    <a href="images/image5.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image5.jpg" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
    <a href="images/image6.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image6.jpg" class="img-thumbnail img-responsive" alt="">
      </div>
    </a>
  </div>
</div>
@endsection
