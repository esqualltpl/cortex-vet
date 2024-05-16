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

    function ajaxCall(action_url, action_type, process_data, removed_class = null, closed_modal_id = null, loader_id = null) {
        $.ajax({
            url: action_url,
            type: action_type,
            dataType: 'json',
            cache: false,
            data: process_data,
            beforeSend: function () {
                loader_id !== null ? $(`#${loader_id}`).removeClass('d-none') : '';
            },
            success: function (response) {
                let responseTitle = response.title;
                let responseMessage = response.message;
                let responseIcon = response.icon;
                let responseStatus = response.status;
                $.notify({
                    title: responseTitle,
                    message: responseMessage,
                    icon: responseIcon,
                }, {
                    // settings
                    type: responseStatus,
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });

                //Close Modal
                closed_modal_id !== null ? $(`#${closed_modal_id}`).modal('hide') : '';

                //Remove Row
                removed_class !== null ? $(`.${removed_class}`).remove() : '';

                //Redirect to URL
                setTimeout(function () {
                    if (response.redirect_url) {
                        window.location.href = response.redirect_url;
                    }
                }, 1000);
            },
            error: function (response) {
                let responseTitle = response.title;
                let responseMessage = response.responseJSON.message;
                let responseIcon = response.icon;
                let responseStatus = response.status;
                $.notify({
                    title: responseTitle,
                    message: responseMessage,
                    icon: responseIcon,
                }, {
                    // settings
                    type: responseStatus,
                    z_index: 2000,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    }
                });
                // location.reload();
            },
            complete: function (data) {
                loader_id !== null ? $(`#${loader_id}`).addClass('d-none') : '';
            }
        });
    }
</script>
@yield('script')

