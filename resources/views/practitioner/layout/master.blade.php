<!DOCTYPE html>
<html lang="en">
@include('practitioner.layout.header')
<body class="g-sidenav-show bg-gray-200" style="background-color: #FFFFFF;">
    @include("practitioner.layout.sidebar")
    <main class="main-content border-radius-lg ">
        @include('practitioner.layout.navbar')
        @yield('content')
        @include('practitioner.layout.footer')
    </main>
    @include('practitioner.layout.script')
</body>
</html>
