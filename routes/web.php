<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\RegisterController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/landingpage', function () {
    return view('landingpage',[
        'title'=>'Beranda',
        // selamat datang
        'selamatdatang' => 'Selamat Datang',
        'peserta' =>'Peserta Didik Baru Di SMKN 1 Majalaya',
        // akhir selamat datang

        // ridwan kamil
        'rk'=>'Ridwan Kamil',
        'gubernur'=> 'Gubernur Jawa Barat',
        'prk'=>'Pedoman teknis pelaksanaan Peneimaan Peserta Didik Baru (PPBD) 2019/ 2020 untuk SMU/ SMK di Jabar, akan mengikuti Peraturan Kementerian Pendidikan dan Kebudayaan (Permendikbud) nomor 51 tahun 2018 tentang PPDB tahun ajaran 2019/2020. Dalam proses PPDB di Jabar tidak boleh mencederai rasa keadilan. Jangan sampai ada calon siswa yang ditolak mendaftar, apakah diterima atau tidaknya di sekolah tersebut tergantung hasil seleksi. alam proses PPDB di Jabar tidak boleh mencederai rasa keadilan. Jangan sampai ada calon siswa yang ditolak mendaftar, apakah diterima atau tidaknya di sekolah tersebut tergantung hasil seleksi',
        // akhir ridwan kamil

        // kepsek
        'dani'=>'Drs. Dani Kusuma Adi',
        'kepsek'=>'Kepala Sekolah SMKN 1 Majalaya',
        'pdka'=>'Memasuki era digital pada saat ini kita tidak mungkin lepas dari kemajuan Teknologi Informasi dan Komunikasi (TIK) dalam kehidupan kita sehari-hari. Apalagi di Lembaga Pendidikan seperti SMK keterlibatan teknologi informasi dalam kehidupan sehari-hari tidak akan dapat dielakkan. Itulah sebabnya dalam masa Pandemi Covid 19 ini, pelaksanaan Penerimaan Peserta Didik Baru (PPDB) Tahun Pelajaran 2020/2021 saat ini kami laksanakan dengan sistem digitalisasi melalui Website secara online. Para calon peserta didik baru atau orang tua siswa bisa langsung melakukan pendaftaran sendiri di rumah tanpa harus berkunjung ke sekolah agar tidak terjadi kerumunan masa melalui SMP/MTs asal, sekaligus dalam rangka melaksanakan protokol kesehatan dari pemerintah untuk melakukan “Social Distancing dan Physical Distancing” dalam memerangi wabah Corona ( Covid-19) saat ini.',
        // akhir kepsek

        // ketua ppdb
        'lilis'=>'Dra. Lilis Yuyun, M.MPd',
        'ketuappdb'=>'Ketua PPDB 2020 SMKN 1 Majalaya',
        'plilis'=>'Dengan mengucapkan segala puji ke hadirat Alloh SWT, disertai rasa syukur karena dengan bimbingan rahmat dan karunia-Nya lah link informasi PPDB 2020 dapat diluncurkan. Pelaksanaan PPDB Tahun 2020 sesuai dengan permendikbud No. 44 Tahun 2019 tentang Penerimaan Peserta Didik Baru pada Taman Kanak Kanak, Sekolah Dasar, Sekolah Menengah Pertama, Sekolah Menengah Atas dan Sekolah Menengah Kejuruan serta Pergub No. 37 Tahun 2020 tentang PPDB pada SMA/SMK/SLB di Jawa Barat proses pendaftaran seleksi pelaksanaan Penerimaan Peserta Didik Baru (PPDB) Provinsi Jawa Barat Tahun Ajaran 2020/2021 digelar secara daring (Online)',
        // akhir ketua ppdb

        // wakil kepsek
        'wakepsek'=>'Wakil Kepala Sekolah',
        // akhir wakil kepsek

        // kompetensi keahlian
        'jurusan'=>'Kompetensi Keahlian',
        // akhir kompetensi keahlian

        // link jurusan
        'tkj'=>'Teknik Komputer dan Jaringan',
        'tei'=>'Teknik elektronika dan Industri',
        'mm'=>'Teknik Multimedia',
        'tbsm'=>'Teknik dan Bisnis Sepedah Motor',
        'titl'=>'Teknik Instalasi Tenaga Listrik',
        // akhir link jurusan

    ]);
});


Route::get('/dashboard', function () {
    return view('dashboard.layout.main',[

    ]);
});

Route::get('/masuk', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/masuk', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/daftar', [RegisterController::class,'index'])->middleware('guest');
Route::post('/daftar', [RegisterController::class,'store']);


Route::resource('sisw',SiswaController::class)->middleware('auth');
Route::resource('absensi',AbsensiController::class)->middleware('auth');




