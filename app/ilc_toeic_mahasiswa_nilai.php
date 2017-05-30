<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilc_toeic_mahasiswa_nilai extends Model
{
    public $timestamps = false;
    protected $table = 'ilc_toeic_mahasiswa_nilai';
    protected $fillable = [
        'ilcmhsnilaiId',
        'ilcmhsnilaiMhsNiu',
        'ilcmhsnilaiSempId',
        'ilcmhsnilaiLevel',
        'ilcmhsnilaiToeic',
        'ilcmhsToeiclvl'   
    ];

    public function Level()
    {
        return $this->belongsTo(ilc_level::class, 'ilclvlId');
    }

    public function SempId()
    {
        return $this->belongsTo(s_semester_prodi::class, 'sempId');
    }

     public function Mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'mhsNiu');
    }
}
