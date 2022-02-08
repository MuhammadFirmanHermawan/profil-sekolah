<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'datasiswa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nisn',
        'nama',
        'tempatlahir',
        'tanggallahir',
        'jeniskelamin',
        'agama',
        'kelas',
        'alamat',
        'orangtua',
    ];
}
