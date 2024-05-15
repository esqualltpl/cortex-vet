@extends("practitioner.layout.master")
@section('title')
    Patients
@endsection
@section('type')
    Neurologist
@endsection
@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
                <a class="opacity-7 text-dark" href="{{ url()->current() }}">
                    <img src="{{ asset('portal/assets/img/Patients gray.png') }}" alt="icon" />
                </a>
            </li>
            <li class=" text-sm mx-2 text-dark active opacity-7" aria-current="page">Patients</li>
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
                    <!-- Card header -->

                    <div class="card-header pb-0">

                        <div class="d-lg-flex">
                            <div>
                                <h5 class="mb-0">Patients</h5>

                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-flush" id="datatable-basic">
                            <thead class="thead-light">
                            <tr>
                                <th>Patient ID</th>
                                <th>Owner Name</th>
                                <th>Patient Name</th>
                                <th>Specie Type</th>
                                <th>Breed</th>
                                <th>Date & Time</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-sm ">
                                    P-001
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/cat.png') }}" alt="icon" /> Ore</td>
                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm ">
                                    P-002
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/cat.png') }}" alt="icon" /> Ore</td>
                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm ">
                                    P-003
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/dog.png') }}" alt="icon" /> Lola</td>
                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm ">
                                    P-004
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/cat.png') }}" alt="icon" /> Exotic</td>
                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm ">
                                    P-005
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/cat.png') }}" alt="icon" /> Felines</td>

                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-sm ">
                                    P-006
                                </td>
                                <td class="text-sm ">
                                    Ryan Holland
                                </td>
                                <td class="text-sm "><img src="{{ asset('portal/assets/img/dog.png') }}" alt="icon" /> Pebble</td>
                                <td class="text-sm">
                                    Feline
                                </td>
                                <td class="text-sm">
                                    percian
                                </td>
                                <td class="text-sm">
                                    10-01-2024 ,11:10 Am
                                </td>
                                <td class="text-sm">
                                    <a href="{{ route('neurologist.patient.detail', 1) }}">
                                        <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered " role="document" style="">
                <div class="modal-content ">
                    <div class=" modal-header" style="background-color: #FD4F4E;border-bottom: none;">

                        <button type="button" class="btn-close text-dark float-end" data-bs-dismiss="modal"
                                aria-label="Close">

                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #FD4F4E;">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('portal/assets/img/Sad Emoji.png') }}" alt="icon" />
                        </div>
                        <div class="text-center  m-3 p-3">

                            <p class="text-white">Are you sure to want to delete "Rayan Holland"</p>
                        </div>

                    </div>
                    <div class="">
                        <div class="my-3">
                            <a href="">
                                <p class="text-center font-weight-bold text-info ">Continue</p>
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
    </script>
@endsection
