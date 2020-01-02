 <!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>Inviteaja.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo100.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
  <body>

    <!-- HOME BANNER -->    
  <section id="home">
    <div class="banner-home container-fluid">
      <div class="row justify-content-center align-items-center">
      <div class="banner-home-right col-sm-5 col-xs-12 text-center">
        <img src="{{asset('img/logoNavbar300.png') }}" class="img-logo">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <h4 class="banner-text-pertama"><b>{{ __('E-Mail Address') }}</b></h4>
          <input name="email" type="text" class="form-control form-rounded @error('email') is-invalid @enderror" placeholder="Email" style="text-align: center;font-style: italic;" value="{{ old('email') }}" required autocomplete="email" autofocus>
          
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <h4 class="banner-text-kedua"><b>{{ __('Password') }}</b></h4>
          <input type="password" class="form-control form-rounded @error('password') is-invalid @enderror" name="password" placeholder="Password" style="text-align: center;font-style: italic;" required autocomplete="current-password">

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="tombollogin">
          <a href="{{ route('login') }}"><button style="margin-top: 50px;width: 58%" type="submit" class="btn" data-toggle="modal" data-target="#" data-ticket-type="standard-access">{{ __('Masuk') }}</button></a>
          </div>
        </form>
          
          <div class="tombolsignup">
            <button style="margin-top: 20px;width: 58%" type="button" class="btn" data-toggle="modal" data-target="#" onclick="window.location.href='{{ route('register') }}'" data-ticket-type="standard-access">Daftar</button>
          </div>
        
        <div class="tombolforget">
          <button type="button" class="btn" data-toggle="modal" data-target="#" data-ticket-type="standard-access">Lupa Password ?</button>
        </div>
        <div class="picemail">
        <img src="{{asset('img/email.png') }}" style="width: 25px"> inviteajadotcom@gmail.com
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
        <img src="{{asset('img/whatsapp.png') }}" style="width: 25px"> 0877-2227-4427
        </div>
        <div class="picig">
        <img src="{{asset('img/instagram.png') }}" style="width: 25px"> @inviteajadotcom
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        <img src="{{asset('img/facebook.png') }}" style="width: 25px"> inviteaja.com 
        </div>
      </div>

      <div class="banner-home-left col-sm-4 col-xs-12">
        <img src="{{asset('img/login.png') }}" class="img-fluid" alt="Responsive img">    
      </div>
      </div>
    </div>
  </section>





  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>