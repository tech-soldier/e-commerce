
@include('partialsadmin/header')
<body>

<!-- Header Area -->
@include('partialsadmin/nav')

@include('partialsadmin/flash')

<!-- Header Area End -->

<!-- page content goes here -->

@yield('content')

<!-- end of page content -->


<!-- Footer Area -->
@include('partialsadmin/footer')
<!-- Footer Area -->
