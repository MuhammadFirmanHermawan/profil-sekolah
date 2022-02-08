
<form action="{{ route('sisw.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="namapanggilan">NIS</label>
      <input type="char" name="nisn" class="form-control" id="nisn" >
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" >
      <small class="form-text text-muted">Isi nama sesuai dengan Kartu Identitas</small>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="tempatlahir" class="d-block ml-1">Tempat Lahir</label>
        <input type="text" name="tempatlahir" class="form-control d-block ml-1" id="tempatlahir" >
      </div>
      <div class="form-group">
        <label for="tanggallahir" class="d-block ml-3">Tanggal Lahir</label>
        <input type="date" name="tanggallahir" class="form-control d-block ml-3" id="tanggallahir" >
      </div>
    </div>
    <div class="form-group">
      <label for="jeniskelamin">Jenis kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jeniskelamin" id="exampleRadios1" value="Laki-laki" checked>
        <label class="form-check-label" for="exampleRadios1">
          Laki-laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jeniskelamin" id="exampleRadios2" value="Perempuan">
        <label class="form-check-label" for="exampleRadios2">
          Perempuan
        </label>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Agama</label>
      <select class="form-control" name="agama" id="exampleFormControlSelect1">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Budha</option>
        <option>Hindu</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Kelas</label>
      <select class="form-control" name="kelas" id="exampleFormControlSelect1">
        <option>TKJ 1</option>
        <option>TKJ 2</option>
        <option>TKJ 3</option>
        <option>TKJ 4</option>
        <option>TMM 1</option>
        <option>TMM 2</option>
        <option>TMM 3</option>
        <option>TEI 1</option>
        <option>TEI 2</option>
        <option>TEI 3</option>
        <option>TBSM 1</option>
        <option>TBSM 2</option>
        <option>TBSM 3</option>
        <option>TITL 1</option>
        <option>TITL 2</option>
        <option>TITL 3</option>
      </select>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="container">
          <label for="alamat">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="contoh : Jl. Rancajigang RT/RW Des.Padamulya Kec. Majalaya" >
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="container">
          <label for="alamat">Nama Orang Tua</label>
          <input type="text" name="orangtua" id="orangtua" class="form-control">
        </div>
      </div>
    </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</form>