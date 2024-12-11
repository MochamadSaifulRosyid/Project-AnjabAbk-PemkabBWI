<div class="node">
  <div class="box">
    <strong>{{ $anakJabatan->nama_jabatan }}</strong>
  </div>
  @if ($anakJabatan->anakJabatans->isNotEmpty())
    <div class="children">
      @foreach ($anakJabatan->anakJabatans as $cucuJabatan)
        @include('Admin_Unor.LAPORAN.petajabatan.peta_jabatan_list', ['anakJabatan' => $cucuJabatan])
      @endforeach
    </div>
  @endif
</div>
