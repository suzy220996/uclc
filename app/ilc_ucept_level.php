<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilc_ucept_level extends Model
{
    public $timestamps = false;
    protected $table = 'ilc_ucept_level';
    protected $fillable = [
        'ilclvlId',
        'ilclvlNama',
        'ilclvlNilaiMin',
        'ilclvlNilaiMax'  
    ];
    
    public function mahasiswanilai()
    {
    return $this->hasMany(ilc_ucept_mahasiswa_nilai::class,'ilclvlId');
    }
}