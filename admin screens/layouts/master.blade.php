<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('dashboard.layouts.css')
</head>

<body>
    <!-- Left Panel -->

   @include('dashboard.layouts.side_bar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('dashboard.layouts.nav')
        <!-- /#header -->
        <!-- Content -->
         @yield('bread')
        <div class="content">
            <!-- Animated -->
            @yield('content')
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        @include('dashboard.layouts.footer')
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
    @include('dashboard.layouts.scripts')
    <!--Local Stuff-->

</body>
</html>
