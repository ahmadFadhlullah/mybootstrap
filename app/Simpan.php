<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpan extends Model
{
    protected $table = 'simpans',
              $dates = ['tgl_pinjam'];
    public function book()
    {
        return $this->belongsTo('App\Book','id_buku','id');
    }
}
