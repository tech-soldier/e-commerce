
@include('partials/header')
<body>

<!-- Header Area -->
@include('partials/nav')

@include('partials/flash')
<!-- Header Area End -->

<!-- page content goes here -->

@yield('content')

<!-- end of page content -->


<!-- Footer Area -->
@include('partials/footer')
<!-- Footer Area -->
