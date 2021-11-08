<!DOCTYPE html>
<html lang="en">
    <head>
      @include('dashboard.layouts.head')
    </head>

    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

       @include('dashboard.layouts.sidebar')

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                  @include('dashboard.layouts.topbar')

                  @yield('content')

                </div> <!-- content -->

                <footer class="footer">
                    © 2019 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        @include('dashboard.layouts.script')

    </body>
</html>
