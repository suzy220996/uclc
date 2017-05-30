<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ilc_mahasiswa_nilai extends Model
{
    public $timestamps = false;
    protected $table = 'ilc_mahasiswa_nilai';
    protected $fillable = [
        'ilcmhsnilaiId',
        'ilcmhsnilaiMhsNiu',
        'ilcmhsnilaiSempId',
        'ilcmhsnilaiLevelId',
        'ilcmhsnilaiIlcmhsklsId',
        'ilcmhsnilaiListening',
        'ilcmhsnilaiSpeaking',
        'ilcmhsnilaiReading',
        'ilcmhsnilaiWriting',
    ];

    public function level()
    {
        return $this->belongsTo(ilc_level::class, 'ilcmhsnilaiLevelId');
    }

    public function sempId()
    {
        return $this->belongsTo(s_semester_prodi::class, 'ilcmhsnilaiSempId');
    }

     public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'ilcmhsnilaiMhsNiu');
    }
}
