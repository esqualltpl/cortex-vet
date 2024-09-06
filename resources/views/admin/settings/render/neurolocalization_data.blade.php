<table class="table table-flush" id="datatable-basic">
    <thead class="thead-light">
    <tr>
        <th>Result ID</th>
        <th>Result Name</th>
        <th>Test Count</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @php($result_sn = 0)
    @foreach($resultInfo as $result)
        @php($result_sn ++)
        <tr class="remove-neurolocalization-{{ $result_sn }}">
            <td class="text-sm ">
                Result {{ $result->id ?? 0 }}
            </td>
            <td class="text-sm ">
                {{ Str::limit($result->name ?? '', 50) }}
            </td>
            <td class="text-sm ">
                {{ $result->detail->count() ?? 0 }}
            </td>
            <td class="text-sm">
                <a href="javascript:" data-bs-toggle="modal" class="mx-1 view-neurolocalization-info"
                   data-bs-target="#viewNeurolocalizationInfoModal"
                   data-action-url="{{ route('admin.setting.get.neurolocalization.preview', Crypt::encrypt($result->id ?? 0)) }}"
                >
                    <img src="{{ asset('portal/assets/img/view.png') }}" alt="icon">
                </a>
                <a href="javascript:" class="mx-1 edit-neurolocalization-info"
                   data-result-id="{{ Crypt::encrypt($result->id ?? 0) }}"
                   data-result-info="{{ $result->name ?? '' }}"
                   data-action-url="{{ route('admin.setting.get.neurolocalization.info.edit', Crypt::encrypt($result->id)) }}"
                >
                    <img src="{{ asset('portal/assets/img/edit png.png') }}" alt="icon">
                </a>
                <a href="javascript:" class="remove-result-info"
                   data-removed-name="{{ $result->name ?? '' }}"
                   data-removed-class="remove-neurolocalization-{{ $result_sn }}"
                   data-action-url="{{ route('admin.setting.neurolocalization.info.delete', Crypt::encrypt($result->id)) }}"
                >
                    <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    if (document.getElementById('datatable-basic')) {
        const dataTableSearch = new simpleDatatables.DataTable("#datatable-basic", {
            searchable: true,
            fixedHeight: false,
        });
    }
</script>