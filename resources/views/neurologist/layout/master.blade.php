<!DOCTYPE html>
<html lang="en">
@include('neurologist.layout.header')
<body class="g-sidenav-show bg-gray-200" style="background-color: #FFFFFF;">
    @include("neurologist.layout.sidebar")
    <main class="main-content border-radius-lg ">
        @include('neurologist.layout.navbar')
        @yield('content')
        @include('neurologist.layout.footer')
    </main>
    @include('neurologist.layout.script')
    @include('practitioner.layout.toasterMessage')
</body>
</html>
