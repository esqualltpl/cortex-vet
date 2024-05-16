@extends("admin.layout.master")
@section('title')
    Veterinary Neurologists
@endsection
@section('type')
    Admin
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Veterinary Neurologists Gray.png') }}" alt="icon" />
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Veterinary Neurologists</li>
        </ol>
    </nav>
@endsection
@section('style')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Card header -->

                    <div class="card-header pb-0">

                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Veterinary Neurologists</h5>

                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Doctor Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($sn = 0)
                            @foreach($neurologists as $neurologist)
                                @php($sn = $sn+1)
                                <tr class="remove-{{ $sn }}">
                                    <td class="text-sm text-info">
                                        P-{{ $neurologist->id ?? 0 }}
                                    </td>
                                    <td class="text-sm ">
                                        {{ $neurologist->name ?? '' }}
                                    </td>
                                    <td class="text-sm">
                                        {{ $neurologist->email ?? '' }}
                                    </td>

                                    <td class="text-sm "><img src="{{ asset('portal/assets/img/Patient Count.png') }}" alt="icon"/> 0</td>
                                    <td class="text-sm">
                                        <a href="javascript:" class="mx-1 request-remove-data"
                                           data-removed-name="{{ $neurologist->name ?? '' }}"
                                           data-removed-class="remove-{{ $sn ?? 0 }}"
                                           data-action-url="{{ route('admin.veterinary.neurologist.delete', Crypt::encrypt($neurologist->id)) }}"
                                        >
                                            <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                                        </a>
                                        <a href="{{ route('admin.veterinary.neurologist.detail', Crypt::encrypt($neurologist->id)) }}">
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
                            <p class="text-white">Are you sure to want to delete <span class="text-bold removed-item-name">Ryan Holland</span></p>
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
            let removedName = $(this).attr('data-removed-name');

            $('.removed-data').attr('data-removed-class', removedClass);
            $('.removed-data').attr('data-action-url', actionURL);
            $('.removed-item-name').html(removedName);
            $('#deleteUserModal').modal('show');
        });

        $(document).on('click', '.removed-data', function (e) {
            let actionType = 'delete';
            let loaderId = 'removed-data-loader';
            let closedModalId = 'deleteUserModal';
            let removedClass = $(this).attr('data-removed-class');
            let actionURL = $(this).attr('data-action-url');
            let processData = {
                "_token": "{{ csrf_token() }}",
            };

            ajaxCall(actionURL, actionType, processData, removedClass, closedModalId, loaderId);
        });
    </script>
@endsection
