//---------|||--- Remove Info Function ---|||---------//
function removeInfo(action_url, action_type, process_data, removed_class = null, closed_modal_id = null, loader_id = null) {
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
            let responseMessage = response.responseJSON.message;
            $.notify({
                title: 'Error!',
                message: `<br>${responseMessage}`,
                icon: 'fa fa-exclamation-triangle',
            }, {
                // settings
                type: 'danger',
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

//---------|||--- Upload File Function ---|||---------//
function uploadFile(action_url, action_type, process_data, loader_id = null, hide_data_id = null, show_value_class = null) {
    $.ajax({
        url: action_url,
        type: action_type,
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data: process_data,
        beforeSend: function () {
            //Loader
            loader_id !== null ? $(`#${loader_id}`).removeClass('d-none') : '';

            //Hide Data By Id
            hide_data_id !== null ? $(`#${hide_data_id}`).addClass('d-none') : '';
        },
        success: function (response) {
            let responseShowVal = response.show_val ?? '';
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

            //Show Uploaded File
            show_value_class !== null ? $(`.${show_value_class}`).attr('src',responseShowVal) : '';

            //Redirect to URL
            setTimeout(function () {
                if (response.redirect_url) {
                    window.location.href = response.redirect_url;
                }
            }, 1000);
        },
        error: function (response) {
            let responseMessage = response.responseJSON.message;
            $.notify({
                title: 'Error!',
                message: `<br>${responseMessage}`,
                icon: 'fa fa-exclamation-triangle',
            }, {
                // settings
                type: 'danger',
                z_index: 2000,
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated bounceOutUp'
                }
            });
            // location.reload();
        },
        complete: function (data) {
            //Loader
            loader_id !== null ? $(`#${loader_id}`).addClass('d-none') : '';

            //Hide Data By Id
            hide_data_id !== null ? $(`#${hide_data_id}`).removeClass('d-none') : '';
        }
    });
}

//---------|||--- Save Info Function ---|||---------//
function saveInfo(action_url, action_type, process_data, loader_id = null, reset_form_id = null, show_render_data_class = null, close_modal_id = null, render_type = null, click_button_class = null) {
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
            let responseRenderData = response.rendered_info;

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

            //Reset Form
            reset_form_id !== null ? $(`#${reset_form_id}`)[0].reset() : '';

            //Reset Form
            close_modal_id !== null ? $(`#${close_modal_id}`).modal('hide') : '';

            //Render Information
            show_render_data_class !== null ? render_type !== null ? $(`.${show_render_data_class}`).html(responseRenderData) : $(`.${show_render_data_class}`).append(responseRenderData) : '';

            //Click Information
            click_button_class !== null ? $(`.${click_button_class}`).click() : '';

            //Redirect to URL
            setTimeout(function () {
                if (response.redirect_url) {
                    window.location.href = response.redirect_url;
                }
            }, 1000);
        },
        error: function (response) {
            let responseMessage = response.responseJSON.message;
            $.notify({
                title: 'Error!',
                message: `<br>${responseMessage}`,
                icon: 'fa fa-exclamation-triangle',
            }, {
                // settings
                type: 'danger',
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

//---------|||--- Get Info Function ---|||---------//
function getInfo(action_url, action_type, process_data, loader_id = null, show_render_data_class) {
    $.ajax({
        url: action_url,
        type: action_type,
        dataType: 'json',
        cache: false,
        data: process_data,
        beforeSend: function () {
            $(`.${show_render_data_class}`).addClass('d-none');
            loader_id !== null ? $(`#${loader_id}`).removeClass('d-none') : '';
        },
        success: function (response) {
            let responseTitle = response.title;
            let responseMessage = response.message;
            let responseIcon = response.icon;
            let responseStatus = response.status;
            let responseRenderData = response.rendered_info;
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

            //Render Information
            $(`.${show_render_data_class}`).html(responseRenderData)

            //Redirect to URL
            setTimeout(function () {
                if (response.redirect_url) {
                    window.location.href = response.redirect_url;
                }
            }, 1000);
        },
        error: function (response) {
            let responseMessage = response.responseJSON.message;
            $.notify({
                title: 'Error!',
                message: `<br>${responseMessage}`,
                icon: 'fa fa-exclamation-triangle',
            }, {
                // settings
                type: 'danger',
                z_index: 2000,
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated bounceOutUp'
                }
            });
            // location.reload();
        },
        complete: function (data) {
            $(`.${show_render_data_class}`).removeClass('d-none');
            loader_id !== null ? $(`#${loader_id}`).addClass('d-none') : '';
        }
    });
}
