<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    //
    protected $fillable=[
        'nama_obat',
        'kode_obat',
        'harga_obat',

    ];
}
