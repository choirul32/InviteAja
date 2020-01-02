<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Inviteaja.com</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Undangan Online Digital" name="keywords">
  <meta content="Undangan Web, Undangan Digital, Poster Undangan, Video Animasi Undangan - Invite Aja" name="description">

  <!-- Favicons -->
  <link href="img/logo100.png" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  {{-- <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet"> --}}
  {{-- <link href="{{asset('lib/venobox/venobox.css')}}" rel="stylesheet"> --}}
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">

    <div class="container">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
      <a href="{{ url('/') }}"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a id="home-button"> Beranda</a></li>
          {{-- <li class="menu-active"><a href="beranda.html">Beranda</a></li> --}}
          <li><a id="product-button"> Produk</a></li>
          <li><a id="service-button"> Layanan</a></li>
          <li><a id="about-button"> Tentang Kami</a></li>
          {{-- <li><a href="produk.html">Produk</a></li>
          <li><a href="produk.html">Layanan</a></li>
          <li><a href="produk.html">Tentang Kami</a></li> --}}
          {{-- <li id="login-button" class="buy-tickets"><a href="{{ route('login') }}">{{ __('Masuk / Daftar') }}</a></li> --}}
          <li id="login-button" class="buy-tickets"><a href="https://wa.me/6289672482266">Pesan</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
<section id="home">
    <div class="banner-home container-fluid">
      <div class="row justify-content-center align-items-center">
      <div class="banner-home-left col-sm-7 col-xs-12">
          <img src="img/halfBanner.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="banner-home-right col-sm-5 col-xs-12 text-center">
        <h4 class="banner-text-secondary">Punya Acara Spesial ?</h4>
        <h1 class="banner-text-primary font-weight-bold">Invite Aja</h1>
        <h4 class="banner-text-secondary">Temanmu !</h4>
      </div>
      </div>
    </div>
  </section>

  <!--==========================
      DESAIN Section
    ============================-->
    <section id="product"> 
    <div id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Undangan Web Mobile</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="img/web/redrose/1-redrose.jpg" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Red Rose (Web)</b></li>
                  <li class="menu-charga"><b>Rp 200.000</b></li>
                  <li class="menu-harga"><b>Rp 150.000</b></li>
                  <li class="menu-pilihan">Mobile Web Invitation</li>
                </ul>
                <hr>
                <div class="text-center">
                  <a href="{{ route('detail1') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="img/web/chococream/1-chococream.jpg" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Choco Cream</b></li>
                  <li class="menu-charga"><b>Rp 200.000</b></li>
                  <li class="menu-harga"><b>Rp 150.000</b></li>
                  <li class="menu-pilihan">Mobile Web Invitation</li>
                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail2') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="img/web/oreocream/1-oreocream.jpg" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Oreo Cream</b></li>
                  <li class="menu-charga"><b>Rp 200.000</b></li>
                  <li class="menu-harga"><b>Rp 150.000</b></li>
                  <li class="menu-pilihan">Mobile Web Invitation</li>
                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail3') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

      <!-- Modal Order Form -->
      <!--<div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <select id="ticket-type" name="ticket-type" class="form-control" >
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> -->
    {{-- </section>
    <section id="contact" class="section-with-bg wow fadeInUp">

      <div class="container">     
        
        <div class="form">
          
            <div class="text-center"><button type="submit"><b>Lihat Selengkapnya</b></button></div>
          </form>
        </div>

      </div>
    </section> --}}
    <!--==========================
      DIGItal Section
    ============================-->
    
    <div id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Digital Invitation </h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="{{asset('img/digital/darkgreenleaf/1-darkgreenleaf.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Dark Green Leaf</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                  <li class="menu-harga"><b>Rp. 75.000</b></li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>
                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail4') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="{{asset('img/digital/greentea/1-greentea.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Green Tea</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                  <li class="menu-harga"><b>Rp. 75.000</b></li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>

                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail5') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="{{asset('img/digital/coconut/1-coconut.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Coconut</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                   <li class="menu-harga"><b>Rp 75.000</li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>

                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail6') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>

              </div>
            </div>
          </div>

        </div>

        <div class="section-little-space"></div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="{{asset('img/digital/redrose/1-redrose.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Red Rose</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                  <li class="menu-harga"><b>Rp. 75.000</b></li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>
                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail7') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <img src="{{asset('img/digital/blackgold/1-blackgold.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Black Gold</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                  <li class="menu-harga"><b>Rp. 75.000</b></li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>

                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail8') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <img src="{{asset('img/digital/pinktulip/1-pinktulip.jpg')}}" class="img-fluid" alt="Responsive image">
                <hr>
                <ul class="fa-ul">
                  <li class="menu-text"><b>Pink Tulip</b></li>
                  <li class="menu-charga"><b>Rp. 125.000</b></li>
                   <li class="menu-harga"><b>Rp 75.000</li>
                  <li class="menu-pilihan">1 File Poster Digital <br> dan 6 File Instagram Post (Square)</li>

                </ul>
                <hr>
                <div class="text-center">
                    <a href="{{ route('detail9') }}"><button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="standard-access">Detail Info</button></a>
                  </div>

              </div>
            </div>
          </div>

        </div>

         
      </div>
    </div>
    </section>

      {{-- <section id="contact" class="section-with-bg wow fadeInUp">

      <div class="container">     
        
        <div class="form">
          
            <div class="text-center"><button type="submit"><b>Lihat Selengkapnya</b></button></div>
          </form>
        </div>

      </div>
    </section> --}}

    <div id="service" class="separator-space section-with-bg"></div>

    <div class="banner-service container-fluid">
      <div class="row justify-content-center align-item-center">
          <div class="banner-service-left col-sm-6 col-xs-12 text-center">
            <div class="row align-item-center">
              <div class="col-12">
                  <img src="img/flags.png" width="100" style="margin-top:50px; margin-bottom:10px"></a>
                  <h4><b>Kenapa Harus di</b></h4>
                  <h3><b>Invite Aja</b></h3>
                  <h2><b>?</b></h2>
              </div>
              
            </div>
      
            </div>
            <div class="banner-service col-sm-6 col-xs-12" style="padding:50px 20px">
               <ul class="fa-ul" style="font-size: 20px; text-align: left;">
                <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Pembuatan Undangan <br> (Nikah, Syukuran, Perayaan)</b></li>
                <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Pembuatan Kartu Ucapan <br> (Hari Raya, Selamatan)</b></li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Pilih Sendiri Desainnya</b></li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Request Desainnya</b><i>  (S&K berlaku)</i></li>

                  {{-- <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Edit dan Sesuaikan Sendiri</b></li> --}}
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Share dengan Link</b></li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Ruang Galeri Foto</b></li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Ruang Komentar dan Harapan</b></li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span><b>Denah dan Google Maps Link</b></li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span><b>Akses Dimana Saja, dan Kapan Saja</b></li>
                </ul>
              </div>

      </div>
    </div>
    <!--==========================
      About Section
    ============================-->
    


    <!--==========================
      Gallery Section
    ============================-->
    <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Layanan Kami </h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="layanan mb-5 mb-lg-0">
              <div class="layanan-body">
                <img src="img/icon_phone.png" class="img-fluid" alt="Responsive image">
                <p style="font-size: 20px"><b>Undangan Online</b></p>
               
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Pilih Desain</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Pasang Informasi Sesuai Kebutuhan</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Bagikan Link Ke Semua Teman</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Akses Dengan Web Browser</li>
                  <li style="padding-bottom: 30px"><span class="fa-li"><i class="fa fa-check"></i></span>Tampilkan Foto Galeri</li>
                </ul>
                <hr>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="layanan mb-5 mb-lg-0">
              <div class="layanan-body">
                <img src="img/icon_print.png" class="img-fluid" alt="Responsive image">
                <p style="font-size: 20px"><b>Undangan Digital</b></p>

                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Pilih Desain</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Request Design*</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Pasang Informasi Sesuai Kebutuhan</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>File HD Poster (16:9) dan Sosmed Post (1:1)</li>
                  <li style="padding-bottom: 10px"><span class="fa-li"><i class="fa fa-check"></i></span>QR Code berisi Link Google Maps</li>
                </ul>
                <p style="font-size: 10px">S&K berlaku</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="layanan mb-5 mb-lg-0">
              <div class="layanan-body">
                <img src="img/icon_photo.png" class="img-fluid" alt="Responsive image">
                <p style="font-size: 20px"><b>Jasa Photografi</b></p>

                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Foto Pre-Wedding</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Foto Wisuda</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Foto Perayaan</li>
                  <li style="padding-bottom: 40px"><span class="fa-li"><i class="fa fa-check"></i></span>Khusus Daerah Istimewa Yogyakarta*</li>
              
                </ul>
                <p style="font-size: 10px">*S&K berlaku</p>

                <div class="text-center">
                  <p>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="about">
    <div id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Partner Kami</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="https://www.instagram.com/ririnrrp/">
              <div class="supporter-logo">
              <img src="{{asset('img/partners/mamaazkha.jpg')}}" class="img-fluid" alt="">
            </div>
          </a>
            <div class="clear-both"></div>
            <div class="supporter-title">
              <p>Dapur Mama Azkha</p>
              
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
              <a href="https://www.instagram.com/rushdsign.katalog/">
            <div class="supporter-logo">
              <img src="{{asset('img/partners/rushdsign.png')}}" class="img-fluid" alt="">
            </div>
              </a>
            <div class="clear-both"></div>
            <div class="supporter-title">
                <p>Rush D'Sign Service</p>

            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div>
          
          {{-- <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="" class="img-fluid" alt="">
            </div>
          </div> --}}

        </div>

      </div>
    </div>
    </section>    
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <img src="img/logo.png">
            <p style="text-align: justify;">InviteAja.com adalah platform yang menyediakan undangan berbasis web, digital, dan video animasi. 
              {{-- <br>Kami melayani pembuatan undangan web,<br>undangan digital (poster dan instagram post)
              <br>undangan video animasi  --}}
              <br><br>InviteAja.com melayani pembuatan kartu ucapan (hari raya, syukuran, ulang tahun, dll) yang dapat anda pesan sesuai dengan konten kebutuhan anda.
            <br><br>Selain itu, InviteAja.com juga menyediakan jasa fotografi untuk mengabadikan momen yang ada dalam event anda</p>
          </div>

          {{-- <div class="col-lg-6 col-md-6 footer-links">
            
          </div> --}}

          {{-- <div class="col-lg-6 col-md-6 footer-links">
            
          </div> --}}

          <div class="col-lg-6 col-md-6 footer-contact">
            <h4 style="text-align: center;">Kontak Kami</h4>
            <p style="text-align: justify;"> Pemesanan undangan dan informasi lebih lanjut mengenai produk juga partnership dengan kami, hubungi
              kami di : <br> <br>
              <strong>Whatsapp :   </strong> 089672482266<br>
              <strong>Email :   </strong> inviteajadotcom@gmail.com<br>
            </p>

            <div class="social-links">
              {{-- <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> --}}
              <a href="https://www.facebook.com/InviteAjacom-2020845461326378/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/inviteajadotcom/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=inviteajadotcom@gmail.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://wa.me/6289672482266" class="whatsapp"><i class="fa fa-whatsapp"></i></a>

              {{-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> --}}
            </div>

          </div>

        </div>
      </div>
    </div>

    
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>

  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script>
    $("#owl-demo").owlCarousel({
      navigation : true
    });
    </script>

  <!-- Contact Form JavaScript File -->
  {{-- <script src="{{asset('contactform/contactform.js')}}"></script> --}}

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
