@if (session('success'))
    <div class="text-white alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm"><b>Success!</b> {{ session('success') ?? 'Success' }}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10"
                data-bs-dismiss="alert"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('error'))
    <div class="text-white alert alert-danger alert-dismissible text-white" role="alert">
        <span class="text-sm"><b>Error!</b> {{ session('error') ?? 'Error' }}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10"
                data-bs-dismiss="alert"
                aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
