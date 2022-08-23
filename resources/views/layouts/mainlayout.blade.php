<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body class="main-body app sidebar-mini">
    <div class="page">
        @include('partials.nav')
        {{-- @include('partials.header') --}}
        @include('partials.mainsidebar')
        @yield('content')
        @include('partials.footer')
        @include('partials.footer-scripts')
    </div>
</body>
</html>

