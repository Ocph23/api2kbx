<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanwil extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id', 'regionalid','nama','kota', 'email', 'telp', 'kordinat', 'alamat'];
}
