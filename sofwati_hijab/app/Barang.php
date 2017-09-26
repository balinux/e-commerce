<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable=['name','stok'];

    public function galery()
    {
        return $this->hasMany(Galery::class);
    }


}
