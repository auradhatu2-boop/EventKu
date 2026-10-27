<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';
    protected $primaryKey = 'id_vendor';
    public $timestamps = false;
    protected $fillable = [
        'id_kategori', 'nama_vendor', 'email', 'password', 'no_telp', 'alamat',
        'kota', 'deskripsi', 'nama_bank', 'no_rekening', 'atas_nama_rekening', 'status_aktif'
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriJasa::class, 'id_kategori', 'id_kategori');
    }

    public function paketLayanan()
    {
        return $this->hasMany(PaketLayanan::class, 'id_vendor', 'id_vendor');
    }
}
