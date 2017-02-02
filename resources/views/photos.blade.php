@extends('layouts/base')

@section('title', 'Photos')

@section('body')
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
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="/css/jquery.galereya.ie.css">
  <![endif]-->
  <body>
@endsection

@section('content')
<div id="container">
<div id="gallery" style="padding-top: 15vh;">
  <!-- Load images from images directory -->
</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.galereya.js"></script>
<script type="text/javascript">
  $(function() {
    $('#gallery').galereya({
      load: function(next) {
        $.getJSON('/api/images', function(data) {
          console.log(data);
          next(data);
        });
      },
      slideShowSpeed: 3000
    });
  });
</script>
@endsection
