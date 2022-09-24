<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = "perusahaan";
    protected $guarded = [];

    public function Perintah_kerja()
    {
        return $this->hasMany(Perintah_kerja::class, 'perusahaan_id');
    }
}
