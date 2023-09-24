<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
 

class Penjualan extends Model
{
    use HasFactory;

    public $timestamps=false;


    protected $fillable = ["harga",
    "berat",
    "jumlah",
    "isvolume",
    "dimensi_panjang",
    "dimensi_lebar",
    "dimensi_tinggi",
    "tarif",
    "biaya_packing",
    "biaya_lain",
    "tanggal","stt",
    "pengirim_nama",
    "pengirim_alamat",
    "penerima_nama",
    "penerima_alamat",
    "asal",
    "tujuan"];

    public function trackings(): HasMany
    {
        return $this->hasMany(Tracking::class,'penjualanid');
    }
}
