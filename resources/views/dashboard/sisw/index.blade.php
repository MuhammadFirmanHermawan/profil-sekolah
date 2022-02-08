@extends('dashboard.layout.main')

@section('container')
<div class="row mt-5 mb-5">
  <div class="col-lg-12 margin-tb">
      <div class="float-left">
          <h2>DATA SISWA</h2>
      </div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm d-block float-right" data-toggle="modal" data-target="#exampleModal"><i class="bi bi-plus-square">Tambah Data</i>
 
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('dashboard.sisw.create')
      </div>
    </div>
  </div>
</div>
  </div>
</div>
@if ($message = Session::get('succes'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <p class="d-block text-center">{{ $message }}</p>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<table class="table table-bordered">
  <tr>
      <th width="20px" class="text-center">No</th>
      <th width="150px" class="text-center">NIS</th>
      <th width="280px"class="text-center">Nama</th>
      <th width="280px"class="text-center">Tempat, Tanggal Lahir</th>
      <th width="150px"class="text-center">Agama</th>
      <th width="150px"class="text-center">Kelas</th>
      <th width="280px"class="text-center">Action</th>
  </tr>
  @foreach ($sisw as $siswa)
  <tr>
      <td class="text-center">{{ $loop->iteration }}</td>
      <td class="text-center">{{ $siswa->nisn }}</td>
      <td>{{ $siswa->nama }}</td>
      <td class="text-center">{{ $siswa->tempatlahir }}, {{ $siswa->tanggallahir }}</td>
      <td class="text-center">{{ $siswa->agama }}</td>
      <td class="text-center">{{ $siswa->kelas }}</td>
      <td class="text-center">
          <form action="{{ route('sisw.destroy',$siswa->id) }}" method="POST">

             <a class="btn btn-info btn-sm" href="{{ route('sisw.show',$siswa->id) }}"><i class="bi bi-printer"></i></a>

              <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit',$siswa->id) }}"><i class="bi bi-pencil-square"></i></a>

              @csrf
              @method('DELETE')

              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
          </form>
      </td>
  </tr>
  @endforeach
</table>

 
@endsection