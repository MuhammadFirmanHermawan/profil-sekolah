@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Absensi Siswa</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
    </div>
  </div>
<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No</th>
        <th width="150px" class="text-center">NIS</th>
        <th width="280px"class="text-center">Nama</th>
        <th width="150px"class="text-center">Kelas</th>
        <th width="50px"class="text-center">Action</th>
    </tr>
    @foreach ($absensi as $siswa)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td class="text-center">{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nama }}</td>
        <td class="text-center">{{ $siswa->kelas }}</td>
        <td class="text-center">
            <form action="{{ route('absensi.store') }}" method="POST">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                    </label>
                  </div>
        </form>
        </td>
    </tr>
    @endforeach
  </table>
@endsection