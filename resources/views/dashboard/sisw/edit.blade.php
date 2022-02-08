@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Data Siswa</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-outline-dark btn-sm"href="{{ route('sisw.index') }}"><i class="bi bi-arrow-left"></i></a>
    </div>
  </div>
  </div>
</div>
  <form action="{{ route('sisw.update',$sisw->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" class="form-control " id="nama" value="{{ old('nama', $sisw->nama) }}"" >
          <small class="form-text text-muted">Isi nama sesuai dengan Kartu Identitas</small>
        </div>
        <div class="form-group">
          <label for="namapanggilan">NISN</label>
          <input type="text" name="nisn" class="form-control" id="nisn" value="{{ $sisw->nisn }}" >
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="tempatlahir" class="d-block ml-1">Tempat Lahir</label>
            <input type="text" name="tempatlahir" class="form-control d-block ml-1" id="tempatlahir" value="{{ $sisw->tempatlahir }}" >
          </div>
          <div class="form-group">
            <label for="tanggallahir" class="d-block ml-3">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" class="form-control d-block ml-3" id="tanggallahir" value="{{ $sisw->tanggallahir }}" >
          </div>
        </div>
        <div class="form-group">
          <label for="jeniskelamin">Jenis kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="exampleRadios1" value="Laki-laki" value="{{ $sisw->jeniskelamin }}" checked>
            <label class="form-check-label" for="exampleRadios1">
              Laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jeniskelamin" id="exampleRadios2" value="Perempuan" value="{{ $sisw->tanggallahir }}"  >
            <label class="form-check-label" for="exampleRadios2">
              Perempuan
            </label>
          </div>
        </div>
         <div class="form-group">
          <label for="agama">Agama</label>
          <input type="text" name="agama" class="form-control " id="agama" value="{{ $sisw->agama }}" >
        </div>
        <div class="form-group">
          <div class="row">
            <div class="container">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" id="alamat" class="form-control mb-3" placeholder="contoh : Jl. Rancajigang RT/RW Des.Padamulya Kec. Majalaya" value="{{ $sisw->alamat }}" >
            </div> 
    </div>
      <button type="submit" class="btn btn-primary">Ubah</button>
  </form>
      @endsection
    