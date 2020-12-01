<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts',
              $appends = ['total'];
    public function product()
    {
        return $this->belongsTo('App\Product','id_barang','id');
    }

    public function getTotalAttribute(){
        return $this->product->price * $this->jumlah_barang;
    }
}
