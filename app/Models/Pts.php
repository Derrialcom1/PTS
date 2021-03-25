<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pts extends Model
{
    protected $table = "dataKaryawan";
    protected $fillable = ['namaKaryawan','hadirMasuk','izinMasuk','bolosMasuk','telatMasuk'];

}
