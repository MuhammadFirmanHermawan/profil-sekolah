<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cetak.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <header class="mt-3">
        <h2 style="text-align: center">DINAS PENDIDIKAN KABUPATEN BANDUNG</h2>
        <h3 style="text-align: center">SMK NEGERI 1 MAJALAYA</h3>
        <p style="text-align: center">No.99, Ds, Jl. H. Idris, Sukamukti, Kec. Majalaya, Kabupaten Bandung, Jawa Barat 40382</p>
        <hr id="garis"></hr>
        <h3 id="suratpernyataan">SURAT PERNYATAAN</h3>
    </header>
    <p>Yang bertanda tangan dibawah ini :</p>
    <div class="form-group row">
    <label class="col-sm-3 col-form-label"> <strong>Nama</strong></label>
    <label class="col-sm-9 col-form-label"> <strong>:</strong> Drs. Dani Kusuma Adi</label>
    <label class="col-sm-3 col-form-label"> <strong>Jabatan</strong></label>
    <label class="col-sm-9 col-form-label"> <strong>:</strong> Kepala Sekolah</label>
    <label class="col-sm-3 col-form-label"> <strong>NIP</strong></label>
    <label class="col-sm-9 col-form-label"> <strong>:</strong> 123456789</label>
</div>
    <P>Menyatakan dengan sebenarnya bahwa siswa tesebut dibawah ini :</P>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label"> <strong>NIS</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->nisn }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Nama</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->nama }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Kelas</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->kelas }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Tempat,Tanggal Lahir</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->tempatlahir }}, {{ $sisw->tanggallahir }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Jenis Kelamin</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->jeniskelamin }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Agama</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->agama}}</label>
            <label class="col-sm-3 col-form-label"> <strong>Alamat</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->alamat }}</label>
            <label class="col-sm-3 col-form-label"> <strong>Nama Orang Tua</strong></label>
            <label class="col-sm-9 col-form-label"> <strong>:</strong> {{ $sisw->orangtua }}</label>
        </div>
        <p>Yang bersangkutan benar merupakan siswa di SMKN 1 Majalaya dengan status sebagai siswa aktif.
          Demikian surat ini kami buat untuk dapat dipergunakan sebagaimana mestinya.
        </p>
        <p>Atas kerjasamanya kami ucapkan terimakasih</p>
        <p id="dani">Drs. Dani Kusuma Adi</p> 
        <P ID="nip">NIP : 123456789</P>

        <script type="text/javascript">
          window.print();
        </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    