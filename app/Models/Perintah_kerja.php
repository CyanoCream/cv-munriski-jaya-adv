<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perintah_kerja extends Model
{
    use HasFactory;

    protected $table = 'perintah_kerja';

    protected $guarded = [];

    // public function article(){
    // 	return $this->belongsTo('App\Article');
    // }

    public function Perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'perusahaan_id');
    }
    // protected $fillable = [

    //     'deskripsi',
    //     'kuantitas',
    //     'harga_unit',
    //     'total'
    // ];
}
