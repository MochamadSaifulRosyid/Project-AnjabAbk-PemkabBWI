<div class="list-group">
    <ul class="list-unstyled">
        @foreach($anakJabatans as $anakJabatan)
            <li>
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="details">
                            <strong>{{ $anakJabatan->nama_jabatan }}</strong>
                            <div class="btn-group ml-3">
                                <!-- Dropdown menu -->
                                <button type="button" class="btn btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu text-center">
                                    <li>
                                        <i class="fa-solid fa-circle-plus"
                                           data-id_jabatan="{{ $anakJabatan->id_jabatan }}"
                                           data-toggle="modal"
                                           data-target="#createJabatanModal">
                                        </i>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('jabatan.show', $anakJabatan->id_jabatan) }}">Lihat Data</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('jabatan.destroy', $anakJabatan->id_jabatan) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tampilkan anak jabatan jika ada -->
                @if($anakJabatan->anakJabatans->isNotEmpty())
                    @include('Admin.Manajemen_Data.manajemenuser_list', ['anakJabatans' => $anakJabatan->anakJabatans])
                @endif
            </li>
        @endforeach
    </ul>
</div>
