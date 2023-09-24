<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Regional extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['name', 'description'];

    public function kanwils(): HasMany
    {
        return $this->hasMany(Kanwil::class, 'regionalid');
    }


    public function getWithKanwilAttribute()
    {
        $data = $this->all();
        foreach ($data as $key => $value) {
            $key->datas = $key->kanwils;
        }
        return $data;
    }
}