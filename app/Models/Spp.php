<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'spps';
    protected $fillable = [
        'tahun',
        'nominal'
    ];
    public function siswa()
    {
        return $this->hasMany('App\Models\Siswa');
    }
    public function Pembayaran()
    {
        return $this->hasMany('App\Models\Pembayaran');
    }
}
