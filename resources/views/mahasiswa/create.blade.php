@extends('view: main')
@section('section: title', content: 'mahasiswa')
@section('section: content')
<!--begin:: Row-->
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline mb-4">
            <!--begin:: Header-->
            <div class="card-header">
                <div class="card-title">Tambah Mahasiswa</div>
            </div>
            <!--end:: Header-->
            <!--begin:: Form-->
            <form action="{{ route(name: 'fakultas.store') }}" method="POST">
                @csrf
                <!--begin:: Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="NPM" class="form-label">NPM</label>
                        <input type="text" class="form-control" name="NPM">
                    </div>
                    <div class="mb-3">
                        <label for="Tanggal_Lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="Tanggal_Lahir">
                    <div class="mb-3">
                        <label for="Tempat_Lahir" class="form-label">Tempat_Lahir</label>
                        <input type="text" class="form-control" name="Tempat_Lahir">
                    </div>
                    <div class="mb-3">
                        <label for="Asal_SMA" class="form-label">Asal SMA</label>
                        <input type="text" class="form-control" name="Asal_SMA">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">jenis Kelamin</label>
                        <input type="text" class="form-control" name="Jenis_kelamin">
                        <input type="file" class="form-control" name="jk"{{ old('jk') -- 'L' ? 'selected' : null }}>laki-laki
                        <input type="file" class="form-control" name="jk"{{ old('jk') -- 'P' ? 'selected' : null }}>Perempuan
                    </div>
  <div class="mb-3">
 <label for="nama_wadek" class="form-label">Nama Wadek</label>
 <input type="text" class="form-control" name="nama_wadek">
 <select name="fakultas_id" class="form-control">
    @foreach ($prodi as $item)
    <option value="{{ $item -> id }}">
    {{ $item->nama }}</option>
 </select>
</div>
</div>
<!--end:: Body-->
<!--begin:: Footer-->
<div class="card-footer">
 <button type="submit" class="btn btn-primary">Submit</button>
</div>
<!--end:: Footer-->
</form>
<!--end:: Form-->
</div>
</div>
</div>
<!--end::Row-->
@endsection