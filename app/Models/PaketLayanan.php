<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketLayanan extends Model
{
    protected $table = 'paket_layanan';
    protected $primaryKey = 'id_paket';
    public $timestamps = false;
    protected $fillable = ['id_vendor', 'nama_paket', 'deskripsi', 'harga'];
}
