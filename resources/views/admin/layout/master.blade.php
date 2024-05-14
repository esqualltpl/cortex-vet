<!DOCTYPE html>
<html lang="en">
@include('admin.layout.header')
<body class="g-sidenav-show bg-gray-200" style="background-color: #FFFFFF;">
    @include("admin.layout.sidebar")
    <main class="main-content border-radius-lg ">
        @include('admin.layout.navbar')
        @yield('content')
        @include('admin.layout.footer')
    </main>
    @include('admin.layout.script')
</body>
</html>
