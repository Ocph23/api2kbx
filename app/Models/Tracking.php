<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['penjualanid','tanggal','deskrpsi','status','user' ];
}
