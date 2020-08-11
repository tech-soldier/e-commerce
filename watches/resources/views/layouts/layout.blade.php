
@include('partials/header')
<body>

<!-- Header Area -->
@include('partials/nav')

<div class="flash-area text-center">
@include('partials/flash')
<!-- Header Area End -->
</div>
<!-- page content goes here -->

@yield('content')

<!-- end of page content -->


<!-- Footer Area -->
@include('partials/footer')
<!-- Footer Area -->
