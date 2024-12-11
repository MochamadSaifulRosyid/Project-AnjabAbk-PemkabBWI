{{-- resources/views/Admin_Unor/ANJAB/jabatan/partials/jabatan.blade.php --}}
<tr>
    <td>{{ $row->kode_jabatan }}</td>
    <td>{{ $row->nama_jabatan }}</td>
    <td>{{ $row->jenis_jabatan }}</td>
    <td>{{ $row->status_jabatan }}</td>
</tr>

{{-- Jika jabatan ini memiliki anak jabatan, tampilkan anak-anaknya --}}
@if ($row->children->isNotEmpty())
    @foreach ($row->children as $child)
        {{-- Rekursi untuk menampilkan anak jabatan --}}
        <tr>
            <td>&nbsp;&nbsp;&nbsp;{{ $child->kode_jabatan }}</td> <!-- Indentasi untuk anak jabatan -->
            <td>&nbsp;&nbsp;&nbsp;{{ $child->nama_jabatan }}</td>
            <td>{{ $child->jenis_jabatan }}</td>
            <td>{{ $child->status_jabatan }}</td>
        </tr>

        {{-- Panggil partial untuk anak jabatan yang mungkin memiliki anak lagi --}}
        @include('Admin_Unor.ANJAB.jabatan.partials.row', ['row' => $child])
    @endforeach
@endif
