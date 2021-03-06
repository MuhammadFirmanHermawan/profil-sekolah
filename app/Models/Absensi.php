<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'datasiswa';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nisn',
        'nama',
        'kelas',
    ];
}
