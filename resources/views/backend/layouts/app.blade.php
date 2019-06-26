<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="base-url" content="{{url('/')}}">
    <title>AOSA</title>

    @include('backend/layouts/css')

</head>

<body>

    @include('backend/layouts/main-navbar')

    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        @auth
            @include('backend/layouts/main-sidebar')
        @endauth
        <!-- Main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Main sidebar -->
                @auth
                    @include('backend/layouts/header')
                @endauth
            <!-- Main sidebar -->

            <!-- Content area -->

                @yield('content')
                {{-- @include('sweetalert::alert') --}}

            <!-- /content area -->

            <!-- Footer -->
            @include('backend/layouts/footer')
            <!-- /footer -->

        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</body>

</html>