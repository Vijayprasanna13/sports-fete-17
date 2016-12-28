@extends('layouts/base')

@section('title', 'Contacts')

@section('body')
  <style media="screen">
    body {
      background-color: #eeeeee;
    }
    .container {
      padding-top: 15vh;
    }
    div {
      text-align: center;
    }
    .fa {
      display: inline-block;
    }
    .social-buttons li a:hover {
      color: yellow;
    }
    .social-buttons li a {
      display: block;
      background-color: #000000;
      height: 40px;
      width: 40px;
      border-radius: 100%;
      font-size: 20px;
      line-height: 40px;
      color: #ffffff;
    }
    .img-circle {
      border: 7px solid #ffffff;
      margin: 0 auto;
      text-align: center;
      display: block;
      background-color: #000000;
      height: 200px;
      width: 200px;
      border-radius: 100%;
      color: #ffffff;
    }
    .contact_name {
      font-weight: bolder;
      letter-spacing: 1px;
    }
    .text-muted {
      letter-spacing: 1px;
    }
  </style>
  <body>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <img src="images/image7.jpg" class="img-responsive img-circle">
        <h4 class="contact_name">Name</h4>
        <p class="text-muted">Position</p>
        <ul class="list-inline social-buttons">
          <li>
            <a href="#"><i class="fa fa-twitter fa" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
      <div class="col-sm-3">
        <img src="images/image6.jpg" class="img-responsive img-circle">
        <h4 class="contact_name">Name</h4>
        <p class="text-muted">Position</p>
        <ul class="list-inline social-buttons">
          <li>
            <a href="#"><i class="fa fa-twitter fa" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
