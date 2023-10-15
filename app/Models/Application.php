<?php

namespace App\Models;

use App\Models\Stat;
use App\Models\Institution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nik',
        'alamat',
        'telepon',
        'email',
        'univ',
        'lokasi',
        'mulai',
        'selesai',
        'keterangan',
        'berkasktp',
        'berkasktm',
        'berkaspermohonan',
        'berkasproposal',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function stat() {
    //     return $this->hasOne(Stat::class, 'stat_id');
    // }

    // public function institution() {
    //     return $this->hasOne(Institution::class, 'institution_id');
    // }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function stat()
    {
        return $this->belongsTo(Stat::class, 'stat_id');
    }
}
