<!--   Core JS Files   -->
<script src="{{ asset('portal/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/datatables.js">') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/sweetalert.min.js') }}"></script>

<!-- Kanban scripts -->
<script src="{{ asset('portal/assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('portal/assets/js/plugins/jkanban/jkanban.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--bootstrap-notify-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.5/bootstrap-notify.min.js"></script>--}}
<script src="{{ asset('portal/assets/js/material-dashboard.min.js?v=3.0.5') }}"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script src="{{ asset('portal/assets/js/functions.js') }}"></script>
@yield('script')

