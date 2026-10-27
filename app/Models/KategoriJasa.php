<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriJasa extends Model
{
    protected $table = 'kategori_jasa';
    protected $primaryKey = 'id_kategori';
    public $timestamps = false;
    protected $fillable = ['nama_kategori', 'status_aktif'];
}
