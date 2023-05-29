<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nim',
        'nama',
        'prodi_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_telp',
    ];

    public function prodi() {
        return $this->belongsTo(ProdiModel::class);
    }

    public function hobi(){
        return $this->belongsToMany(HobiModel::class);
    }

    public function matakuliah()
    {
        return $this->belongsToMany(MatkulModel::class, 'mahasiswa_matakuliah')->withPivot('nilai');
    }
}
