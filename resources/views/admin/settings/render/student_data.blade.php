<table class="table table-flush" id="studentDatatable-basic">
    <thead class="thead-light">
    <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Email</th>
        <th>Access</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @php($std_sn = 0)
    @foreach($studentInfo as $student)
        @php($std_sn ++)
        <tr class="remove-student-{{ $std_sn }}">
            <td class="text-sm ">
                {{ $student->detail?->name ?? '' }}
            </td>
            <td class="text-sm ">
                Student
            </td>
            <td class="text-sm ">
                {{ $student->detail?->name ?? '' }}
            </td>
            <td class="text-sm ">
                {{ $student->module ?? '' }}
            </td>
            <td class="text-sm">
                <a href="{{ route('admin.setting.get.student.info.edit', Crypt::encrypt($student->id)) }}" class="mx-1">
                    <img src="{{ asset('portal/assets/img/edit png.png') }}" alt="icon">
                </a>
                <a href="javascript:" class="remove-result-info"
                   data-removed-name="{{ $student->detail?->name ?? '' }}"
                   data-removed-class="remove-student-{{ $std_sn }}"
                   data-action-url="{{ route('admin.setting.student.info.delete', Crypt::encrypt($student->id)) }}"
                >
                    <img src="{{ asset('portal/assets/img/Delete.png') }}" alt="icon">
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<script>
    if (document.getElementById('studentDatatable-basic')) {
        const dataTableSearch = new simpleDatatables.DataTable("#studentDatatable-basic", {
            searchable: true,
            fixedHeight: false,
        });
    }
</script>