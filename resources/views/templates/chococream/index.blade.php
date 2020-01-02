<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- InviteAja Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('templates/chococream/css/style.css')}}">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('templates/chococream/css/lightbox.min.css')}}">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Open+Sans:600|Satisfy&display=swap" rel="stylesheet">
    <title>InviteAja.com</title>

</head>

<body>

    <!-- <div class="content-background">s</div> -->

    <div class="container">



        <div id="content-ajax">



        </div>





        <!-- ===== NAVIGATION ===== -->

        <nav id="navbar" class="navbar-bottom text-center">
            <div id="home-button" class="active">
                <div class="navbar-icon-home"></div>
                <div class="clear-both"></div>
                <div class="title-icon-home">Home</div>
                <div class="clear-both"></div>
            </div>
            <div id="bride-button">
                <div class="navbar-icon-bride"></div>
                <div class="clear-both"></div>
                <div class="title-icon">Pengantin</div>
                <div class="clear-both"></div>

            </div>
            <div id="event-button">
                <div class="navbar-icon-event"></div>
                <div class="clear-both"></div>
                <div class="title-icon">Acara</div>
                <div class="clear-both"></div>

            </div>
            <div id="location-button">
                <div class="navbar-icon-location"></div>
                <div class="clear-both"></div>
                <div class="title-icon">Lokasi</div>
                <div class="clear-both"></div>
            </div>
            <div id="menu-button" data-toggle="modal" data-target="#menuModal">
                <div class="navbar-icon-menu"></div>
                <div class="clear-both"></div>
                <div class="title-icon">Menu</div>
                <div class="clear-both"></div>
            </div>
        </nav>


        <section id="menu" class="menu-popup">

            <div class="menu-board">
                <div class="close"> x </div>

                <div class="menu-content">


                    <div class="menu-content-top">
                        <div class="icon-frame">
                            <div id="comment-button" class="comment-button">
                                <div class="popup-icon-comment"></div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="popup-title">Komentar</div>
                        </div>

                        <div class="icon-frame">
                            <div id="gallery-button" class="gallery-button">
                                <div class="popup-icon-gallery"></div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="popup-title">Galeri</div>
                        </div>

                        <div class="icon-frame">
                            <div id="quotes-button" class="quotes-button">
                                <div class="popup-icon-quotes"></div>
                            </div>
                            <div class="clear-both"></div>
                            <div class="popup-title">Kata Mutiara</div>

                        </div>



                    </div>

                    <div class="clear-both"></div>


                    <div class="menu-content-bottom">

                        <div class="icon-frame-bottom">
                            <div id="inviteaja-button" class="inviteaja-button">
                                <div class="popup-icon-inviteaja"></div>
                            </div>
                            <div class="clear-both"></div>

                            <div class="popup-title">Info</div>
                        </div>
                    </div>

                    <div class="clear-both"></div>

                    <div class="poweredby text-center">
                        Powered By InviteAja.com
                    </div>

                </div>



            </div>

        </section>



    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

    <!-- Invite Aja Script JS -->
    <script src="{{asset('templates/chococream/js/script.js')}}"></script>
    <!-- Lightbox JS -->
    <script src="{{asset('templates/chococream/js/lightbox-plus-jquery.min.js')}}"></script>

    <script>
        // LOAD HOME AS DEFAULT
        $("#content-ajax").load('{{url("/wedding/$permalink/chococream/home")}}');
        // $("#content-ajax").load("http://inviteaja.com/inviteajadotcom/home.html");


        $("#home-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/home")}}');

        });

        $("#bride-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/bride")}}');

        });

        $("#event-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/event")}}');

        });

        $("#location-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/location")}}');

        });

        $("#comment-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/comment")}}');
            modal.style.display = "none";
        });

        $("#gallery-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/gallery")}}');
            modal.style.display = "none";
        });

        $("#quotes-button").click(function() {
            $("#content-ajax").load('{{url("/wedding/$permalink/chococream/quotes")}}');
            modal.style.display = "none";



        });

        $("#inviteaja-button").click(function() {
            // $("#content-ajax").load("http://inviteaja.com");
            window.location.href = "http://inviteaja.com";
        });
    </script>

</body>

</html>