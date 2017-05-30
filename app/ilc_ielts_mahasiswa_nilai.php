<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilc_ielts_mahasiswa_nilai extends Model
{
    public $timestamps = false;
    protected $table = 'ilc_ielts_mahasiswa_nilai';
    protected $fillable = [
        'ilcmhsnilaiId',
        'ilcmhsnilaiMhsNiu',
        'ilcmhsnilaiSempId',
        'ilcmhsnilaiIelts'
    ];

    public function SempId()
    {
        return $this->belongsTo(s_semester_prodi::class, 'sempId');
    }

     public function Mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'mhsNiu');
    }
}
