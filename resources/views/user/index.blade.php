<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>matrimony</title>
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="{{ asset('user/css/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('user/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('user/js/bootstrap.min.js') }}"></script> --}}

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Ab Hogi Shaadi</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('user/assets/img/favicon.png') }}">
    <!-- google font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('user/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/responsive.css') }}">

    @yield('head')
    
    

</head>

<body>
    {{-- <section id="header" class="cd-secondary-nav"> --}}
    {{-- <div class="row"> --}}
    {{-- <div class="col"> --}}
    @include('user.layouts.navbar')
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- <div class="row"> --}}
    {{-- <div class="col"> --}}
    @yield('content')
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </section> --}}

    {{-- <div class="row"> --}}
    {{-- <div class="col"> --}}
    @include('user.layouts.footer')
    {{-- </div> --}}
    {{-- </div> --}}

    {{-- <footer id="place"> --}}

    {{-- </footer> --}}

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });

        });
    </script> --}}
    <!-- jquery -->
    <script src="{{ asset('user/assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('user/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('user/assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('user/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('user/assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('user/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('user/assets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('user/assets/js/main.js') }}"></script>

    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".hdtuto").remove();
            });
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            $("#modalSubscriptionForm").modal('show');
        });
    </script>
    <script>
        $('#closeBtn').click(function() {
            var APP_URL = {!! json_encode(url('/')) !!};
            // console.log(APP_URL);
            setTimeout(function() {
                window.location.href = APP_URL;
            }, 5000);
        });
    </script>
    {{-- single page --}}
    <script type="text/javascript">
        $(document).ready(function() {
            /*****Fixed Menu******/
            var secondaryNav = $('.cd-secondary-nav'),
                secondaryNavTopPosition = secondaryNav.offset().top;
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > secondaryNavTopPosition) {
                    secondaryNav.addClass('is-fixed');
                } else {
                    secondaryNav.removeClass('is-fixed');
                }
            });

        });
    </script>

    @yield('script')
</body>

</html>
