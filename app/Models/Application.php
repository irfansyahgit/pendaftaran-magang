<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
