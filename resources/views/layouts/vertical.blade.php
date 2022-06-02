<!DOCTYPE html>
    <html lang="en">

    <head>
        @include('layouts.shared/title-meta', ['title' => $title])
        @include('layouts.shared/head-css')
        {{-- @include('layouts.shared/head-css', ["demo" => "modern"]) --}}
        <style>
        trix-editor{
            min-height: 300px;
        }
        </style>
    </head>

    <body @yield('body-extra')>
        <!-- Begin page -->
        <div id="wrapper">
            @include('layouts.shared/topbar')

            @include('layouts.shared/left-sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="py-1 mt-1 col-12">
                        @yield('botones')
                </div>
                <div class="content">
                    @yield('content')
                </div>
                <!-- content -->

                @include('layouts.shared/footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        @include('layouts.shared/right-sidebar')

        @include('layouts.shared/footer-script')

    </body>
</html>
