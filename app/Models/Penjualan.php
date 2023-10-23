<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 

class Penjualan extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $casts = [ 
        'jumlah' => 'integer', 
        'via' => 'integer', 
        'pembayaran' => 'integer', 
        'tarif' => 'double', 
        'dimensi_panjang' => 'double', 
        'dimensi_lebar' => 'double', 
        'dimensi_tinggi' => 'double', 
        'biaya_packing' => 'double', 
        'biaya_lain' => 'double', 
        'harga' => 'double', 
        'berat' => 'double', 
        'isvolume' => 'integer', 
    ];

    protected $fillable = [
        'stt',
        'pengirim_nama',
        'pengirim_telepon',
        'pengirim_alamat',
        'penerima_nama',
        'penerima_telepon',
        'penerima_alamat',
        'asal',
        'tujuan',
        'jumlah',
        'tarif',
        'isvolume',
        'dimensi_panjang',
        'dimensi_lebar',
        'dimensi_tinggi',
        'user',
        'biaya_packing',
        'biaya_lain',
        'harga',
        'catatan',
        'created',
        'updated',
        'berat',
        'tanggal',
        'pembayaran',
        'via',
        'nama_barang'
    ];

    public function trackings(): HasMany
    {
        return $this->hasMany(Tracking::class,'penjualanid');
    }
}
