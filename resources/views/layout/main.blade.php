<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SPDPB | {{ $title }}</title>
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/images/favicon.svg') }}" />
    {{-- Google Icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="{{ asset('plugins/fontawesome/css/all.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#tambah-tab").click(function() {
                $("#penyakit").text("Masukan Penyakit");
            });
            $("#ubah-tab").click(function() {
                $("#penyakit").text("Daftar Penyakit");
            });
            $("#tambah-tab").click(function() {
                $("#gejala").text("Masukan Gejala");
            });
            $("#ubah-tab").click(function() {
                $("#gejala").text("Daftar Gejala");
            });
        });
    </script>



</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    @include('partials.navbar')
    <!-- End Header Area -->

    @yield('content')

    <!-- Start Footer Area -->
    @include('partials.footer')
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/wow.min.js') }}"></script>
    <script src="{{ asset('dist/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('dist/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('dist/js/count-up.min.js') }}"></script>
    <script src="{{ asset('dist/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('dist/js/isotope.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('plugins/fontawesome/js/all.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function() {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });
    </script>
    @stack('script')
</body>

</html>
