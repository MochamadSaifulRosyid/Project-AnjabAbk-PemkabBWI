<div class="list-group" style="margin-right: -20px; margin-bottom: -20px;">
    @foreach($anakJabatans as $anakJabatan)
        <div class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
                <div class="details">
                    <strong>
                                                                        {{ $anakJabatan->nama_jabatan }}
                                                                        <sup id="fungsional"
                                                                             class="fungsional-{{ strtolower(str_replace(' ', '-', $anakJabatan->jenjang)) }}">
                                                                            {{ $anakJabatan->jenjang }}
                                                                        </sup>
                                                                    </strong>
                </div>
                <!-- Dropdown menu untuk anak jabatan -->
                <div class="btn-group ms-auto">
                    <button type="button" class="btn rotate-icon" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    <ul class="dropdown-menu text-center">
                        <i class="fa-solid fa-circle-plus"
                           data-id_jabatan="{{ $anakJabatan->id_jabatan }}"
                           data-toggle="modal"
                           data-target="#createJabatanModal"></i>
                        <li><a class="dropdown-item" href="{{ route('jabatan.show', $anakJabatan->id_jabatan) }}">Detail Data</a></li>
                        <li>
                            <form action="{{ route('jabatan.destroy', $anakJabatan->id_jabatan) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="jabatan">
                @if($anakJabatan->anakJabatans->isNotEmpty())
                    @include('Admin_Unor.ANJAB.jabatan.jabatan_list', ['anakJabatans' => $anakJabatan->anakJabatans])
                @endif
            </div>
        </div>
    @endforeach
</div>
