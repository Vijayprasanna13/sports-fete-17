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
  <!--[if lt IE 9]> <link rel="stylesheet" href="/css/jquery.galereya.ie.css"> <![endif]-->
  <body>
@endsection

@section('content')
<div id="container">
<div id="gallery" style="padding-top: 15vh;">
  <img src="images/image1.png"
        data-fullsrc="images/image1.png"
    />
    <img src="images/image3.jpg"
        data-fullsrc="images/image3.jpg"
    />
    <img src="images/image4.jpg"
        data-fullsrc="images/image4.jpg"
    />
    <img src="images/image5.jpg"
        data-fullsrc="images/image5.jpg"
    />
    <img src="images/image5.jpg"
        data-fullsrc="images/image5.jpg"
    />
    <img src="images/image6.jpg"
        data-fullsrc="images/image6.jpg"
    />
    <img src="images/image1.png"
          data-fullsrc="images/image1.png"
      />
      <img src="images/image3.jpg"
          data-fullsrc="images/image3.jpg"
      />
      <img src="images/image4.jpg"
          data-fullsrc="images/image4.jpg"
      />
      <img src="images/image5.jpg"
          data-fullsrc="images/image5.jpg"
      />
      <img src="images/image5.jpg"
          data-fullsrc="images/image5.jpg"
      />
      <img src="images/image6.jpg"
          data-fullsrc="images/image6.jpg"
      />
      <img src="images/image1.png"
            data-fullsrc="images/image1.png"
        />
        <img src="images/image3.jpg"
            data-fullsrc="images/image3.jpg"
        />
        <img src="images/image4.jpg"
            data-fullsrc="images/image4.jpg"
        />
        <img src="images/image5.jpg"
            data-fullsrc="images/image5.jpg"
        />
        <img src="images/image5.jpg"
            data-fullsrc="images/image5.jpg"
        />
        <img src="images/image6.jpg"
            data-fullsrc="images/image6.jpg"
        />
        <img src="images/image1.png"
              data-fullsrc="images/image1.png"
          />
          <img src="images/image3.jpg"
              data-fullsrc="images/image3.jpg"
          />
          <img src="images/image4.jpg"
              data-fullsrc="images/image4.jpg"
          />
          <img src="images/image5.jpg"
              data-fullsrc="images/image5.jpg"
          />
          <img src="images/image5.jpg"
              data-fullsrc="images/image5.jpg"
          />
          <img src="images/image6.jpg"
              data-fullsrc="images/image6.jpg"
          />
</div>
</div>

<script type="text/javascript" src="/js/jquery.galereya.js"></script>
<script type="text/javascript">
  $(function() {
    $('#gallery').galereya({
      slideShowSpeed: 10000
    });
  });
</script>
@endsection
