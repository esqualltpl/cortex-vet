@extends("admin.layout.master")
@section('title')
    Veterinary Practitioners
@endsection
@section('type')
    Admin
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Veterinary Practitioners gray.png') }}" alt="icon"/>
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Veterinary Practitioners</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Veterinary Practitioners</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th>Practitioners ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Patient Count</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sn = 0)
                            @foreach($practitioners as $practitioner)
                                @php($sn = $sn+1)
                                <tr class="remove-{{ $sn }}">
                                    <td class="text-sm text-info">
                                        P-{{ $practitioner->id ?? 0 }}
                                    </td>
                                    <td class="text-sm ">
                                        {{ $practitioner->name ?? '' }}
                                    </td>
                                    <td class="text-sm">
                                        {{ $practitioner->email ?? '' }}
                                    </td>

                                    <td class="text-sm "><img src="{{ asset('portal/assets/img/Patient Count.png') }}" alt="icon"/> 0</td>
                                    <td class="text-sm">
                                        <a href="javascript:" class="mx-1 request-remove-data"
                                           data-removed-class="remove-{{ $sn ?? 0 }}"
                                           data-action-url="{{ route('admin.veterinary.practitioner.delete', Crypt::encrypt($practitioner->id)) }}"
                                        >
                                            <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                                        </a>
                                        <a href="{{ route('admin.veterinary.practitioner.detail', Crypt::encrypt($practitioner->id)) }}">
                                            <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteUserModal" data-bs-backdrop="static" data-bs-keyboard="false"
             tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #FD4F4E;border-bottom: none;">
                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="background-color: #FD4F4E;">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('portal/assets/img/Sad Emoji.png') }}" alt="icon"/>
                        </div>
                        <div class="text-center  m-3 p-3">
                            <p class="text-white">Are you sure to want to delete "Ryan Holland"</p>
                        </div>
                    </div>
                    <div class="conformation">
                        <div class="my-3">

                            <a href="javascript:">
                                <p class="justify-content-center font-weight-bold text-info removed-data d-flex">
                                    <span>
                                        Continue
                                    </span>
                                    <span id="removed-data-loader" class="spinner-border overflow-hidden d-none" role="status"
                                          style="height: 15px !important;width: 15px !important;margin: 5px !important;">
                                        <span class="sr-only">Loading...</span>
                                    </span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('portal/assets/js/plugins/datatables.js') }}"></script>
    <script>
        if (document.getElementById('datatable-basic')) {
            const dataTableSearch = new simpleDatatables.DataTable("#datatable-basic", {
                searchable: true,
                fixedHeight: false,
                perPage: 10
            });
        }

        $(document).on('click', '.request-remove-data', function (e) {
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('#deleteUserModal').modal('show');
        });

        $(document).on('click', '.removed-data', function (e) {
            let actionType = 'delete';
            let loaderId = 'removed-data-loader';
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };

            ajaxCall(actionURL, actionType, processData, removedClass, loaderId);
        });

        function ajaxCall(action_url, action_type, process_data, removedClass, loader_id) {
            $.ajax({
                url: action_url,
                type: action_type,
                dataType: 'json',
                cache: false,
                data: process_data,
                beforeSend: function () {
                    $(`#${loader_id}`).removeClass('d-none');
                },
                success: function (response) {
                    let responseMessage = response.message;
                    let responseStatus = response.status;
                    /*$.notify({
                        message: responseMessage
                    }, {
                        // settings
                        type: responseStatus,
                        z_index: 2000,
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        }
                    });*/
                    setTimeout(function () {
                        if (response.redirect_url) {
                            window.location.href = response.redirect_url;
                        }
                    }, 1000);
                },
                error: function (response) {
                    console.log(response.responseJSON.errors);
                    let errorStatus = response.status;
                    let errorMessage = response.responseJSON.message;
                    $.notify({
                        message: errorMessage
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
                    $(`#${loader_id}`).addClass('d-none');
                }
            });
        }
    </script>
@endsection
