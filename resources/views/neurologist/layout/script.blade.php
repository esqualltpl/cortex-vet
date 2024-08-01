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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!--bootstrap-notify-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script src="{{ asset('portal/assets/js/material-dashboard.min.js?v=3.0.5') }}"></script>
<script src="{{ asset('portal/assets/js/functions.js') }}"></script>
<script>
    $(document).on('click', '.active-notifications', function (e) {
        $('.active-notifications-counter').addClass('d-none');
        $.ajax({
            url: '{{ route('neurologist.active.notification.seen') }}',
            type: 'POST',
            dataType: 'json',
            cache: false,
            data: {
                "_token": "{{ csrf_token() }}",
            },
            success: function (response) {
            }
        });
    });

    $(document).ready(function () {
        $('body').tooltip({
            selector: '[data-toggle="tooltip"]',
            trigger: 'hover',
        });
    });
</script>
@yield('script')
