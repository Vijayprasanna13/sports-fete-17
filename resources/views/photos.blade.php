@extends('layouts/base')

@section('title', 'Photos')

@section('body')
<!--
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

    img {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    @media (max-width: 767px) {
      img {
        width: 100% !important;
        height: auto !important;
      }
    }
  </style>-->
  <style media="screen">
    body {
      background: #f6f6f6;
      color: #212121;
    }
    #container {
      width: 100%;
      height: 100vh;
    }
  </style>
  <link rel="stylesheet" href="/css/jquery.galereya.css">
  <!--[if lt IE 9]> <link rel="stylesheet" href="/css/jquery.galereya.ie.css"> <![endif]-->
  <body>
@endsection

@section('content')
<div id="container">
<div id="gallery" style="padding-top: 15vh;">
  <img src="images/image1.png"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image1.png"
    />
    <img src="images/image3.jpg"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image3.jpg"
    />
    <img src="images/image4.jpg"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image4.jpg"
    />
    <img src="images/image5.jpg"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image5.jpg"
    />
    <img src="images/image5.jpg"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image5.jpg"
    />
    <img src="images/image6.jpg"
        alt="Image"
        data-desc="Example"
        data-fullsrc="images/image6.jpg"
    />
    <img src="images/image1.png"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image1.png"
      />
      <img src="images/image3.jpg"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image3.jpg"
      />
      <img src="images/image4.jpg"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image4.jpg"
      />
      <img src="images/image5.jpg"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image5.jpg"
      />
      <img src="images/image5.jpg"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image5.jpg"
      />
      <img src="images/image6.jpg"
          alt="Image"
          data-desc="Example"
          data-fullsrc="images/image6.jpg"
      />
      <img src="images/image1.png"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image1.png"
        />
        <img src="images/image3.jpg"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image3.jpg"
        />
        <img src="images/image4.jpg"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image4.jpg"
        />
        <img src="images/image5.jpg"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image5.jpg"
        />
        <img src="images/image5.jpg"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image5.jpg"
        />
        <img src="images/image6.jpg"
            alt="Image"
            data-desc="Example"
            data-fullsrc="images/image6.jpg"
        />
        <img src="images/image1.png"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image1.png"
          />
          <img src="images/image3.jpg"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image3.jpg"
          />
          <img src="images/image4.jpg"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image4.jpg"
          />
          <img src="images/image5.jpg"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image5.jpg"
          />
          <img src="images/image5.jpg"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image5.jpg"
          />
          <img src="images/image6.jpg"
              alt="Image"
              data-desc="Example"
              data-fullsrc="images/image6.jpg"
          />
</div>
</div>
<!--<div class="container" id="photos">
  <div class="row">
    <a href="images/image1.png" target="_blank">
      <div class="col-sm-3">
        <img src="images/image1.png" class="img-responsive" alt="">
      </div>
    </a>
    <a href="images/image2.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image2.jpg" class="img-responsive" alt="">
      </div>
    </a>
    <a href="images/image7.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image7.jpg" class="img-responsive" alt="">
      </div>
    </a>
    <a href="images/image4.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image4.jpg" class="img-responsive" alt="">
      </div>
    </a>
  </div>
  <div class="row">
    <a href="images/image5.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image5.jpg" class="img-responsive" alt="">
      </div>
    </a>
    <a href="images/image6.jpg" target="_blank">
      <div class="col-sm-3">
        <img src="images/image6.jpg" class="img-responsive" alt="">
      </div>
    </a>
  </div>
</div>-->
<script type="text/javascript" src="/js/jquery.galereya.min.js"></script>
<script type="text/javascript">
  $(function() {
    $('#gallery').galereya({
      slideShowSpeed: 10000
    });
  });
</script>
@endsection
