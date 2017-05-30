<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilc_level extends Model
{
    public $timestamps = false;
    protected $table = 'ilc_level';
    protected $fillable = [
        'ilclvlId',
        'ilclvlNama',
        'ilclvlNilaiMin',
        'ilclvlNilaiMax'
    ];
    public function utep_mahasiswanilai()
    {
    return $this->hasMany(ilc_mahasiswa_nilai::class,'ilclvlId');
    }

    public function toeic_mahasiswanilai()
    {
    return $this->hasMany(ilc_toeic_mahasiswa_nilai::class,'ilclvlId');
    }
}
