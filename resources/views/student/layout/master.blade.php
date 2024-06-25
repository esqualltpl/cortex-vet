<!DOCTYPE html>
<html lang="en">
@include('student.layout.header')
<body class="g-sidenav-show bg-gray-200" style="background-color: #FFFFFF;">
    @include("student.layout.sidebar")
    <main class="main-content border-radius-lg ">
        @include('student.layout.navbar')
        @yield('content')
        @include('student.layout.footer')
    </main>
    @include('student.layout.script')
    @include('student.layout.toasterMessage')
</body>
</html>
