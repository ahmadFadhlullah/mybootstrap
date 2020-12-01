<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    public function simpan()
    {
        return $this->hasOne('App\Simpan');
    }
}
