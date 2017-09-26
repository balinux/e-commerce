<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{

    protected $fillable=['name'];
    
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
