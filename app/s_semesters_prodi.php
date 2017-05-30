<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class s_semesters_prodi extends Model
{
    public $timestamps = false;
    protected $table = 's_semester_prodi';
    protected $fillable = [
        'sempId',
        'sempSemId',
        'sempProdiKode',
        'sempIsAktif'
    ];

    public function utep_mahasiswanilai()
    {
    return $this->hasMany(ilc_mahasiswa_nilai::class,'sempId');
    }

    public function ucept_mahasiswanilai()
    {
    return $this->hasMany(ilc_ucept_mahasiswa_nilai::class,'sempId');
    }

    public function toeic_mahasiswanilai()
    {
    return $this->hasMany(ilc_toeic_mahasiswa_nilai::class,'sempId');
    }

    public function toefl_mahasiswanilai()
    {
    return $this->hasMany(ilc_toefl_mahasiswa_nilai::class,'sempId');
    }

    public function ielts_mahasiswanilai()
    {
    return $this->hasMany(ilc_ielts_mahasiswa_nilai::class,'sempId');
    }

}
