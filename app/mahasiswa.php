<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public $timestamps = false;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'mhsNiu',
        'mhsNif',
        'mhsNama',
        'mhsAngkatan',
        'mhsSemesterMasuk'  
    ];

    public function utep_mahasiswanilai()
    {
    return $this->hasMany(ilc_mahasiswa_nilai::class,'mhsNiu');
    }

    public function ucept_mahasiswanilai()
    {
    return $this->hasMany(ilc_ucept_mahasiswa_nilai::class,'mhsNiu');
    }

    public function toeic_mahasiswanilai()
    {
    return $this->hasMany(ilc_toeic_mahasiswa_nilai::class,'mhsNiu');
    }
    
    public function toefl_mahasiswanilai()
    {
    return $this->hasMany(ilc_toefl_mahasiswa_nilai::class,'mhsNiu');
    }

    public function ielts_mahasiswanilai()
    {
    return $this->hasMany(ilc_ielts_mahasiswa_nilai::class,'mhsNiu');
    }
}
