<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>
    <!--hayat anjing -->
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/stisla/dist') }}/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script></script>

    @stack('css')
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper">


            {{-- navbar --}}
            <x-dashboard-navbar />
            {{-- end of navbar --}}

            {{-- sidebar --}}
            <x-dashboard-sidebar />
            {{-- end of sidebar --}}

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <h5 class="my-auto text-dark">@yield('header-content')</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-body">
                        @yield('main-content')
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/jquery.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/popper.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/tooltip.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/modules/moment.min.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/scripts.js"></script>
    <script src="{{ asset('assets/stisla/dist') }}/assets/js/custom.js"></script>

    @stack('js')
</body>

</html>
