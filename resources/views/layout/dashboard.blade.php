<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WORKSHOP PROGRAMMER FROM ZERO</title>
    <link href="{{ asset('/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

</head>
<body>

  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
         <a class="navbar-brand" href="#"><img src="{{ asset('/img/logo.png') }} " height="40px" style="margin-top: -10px"></a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-left">
                <li><a href="/" >BERANDA</a></li>
                <li><a href="/berita" >BERITA</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

<div class="clearfix"></div>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
    <li data-target="#carousel-id" data-slide-to="1" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item">
      <img src="{{ asset('img//banner1.jpg') }}">
      <div class="container">
      </div>
    </div>
    <div class="item active">
      <img src="{{ asset('img//banner2.jpg') }}">
      <div class="container">

      </div>
    </div>

  </div>

</div>

<div class="container-fluid" style="background: #ad0c1c; color:white;  text-align: center;" >    
    <h4 >APLIKASI WORKSHOP</h4>
</div>  

    @if ($message = Session::get('success'))
        <div class="alert alert-success" style="text-align: center;">
            <p>{{ $message }}</p>
        </div>
    @endif
        
    @yield('content')
    <!-- Page Content -->
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>
</html>