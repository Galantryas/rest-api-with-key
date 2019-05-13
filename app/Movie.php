<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillabel = ['judul', 'genre','jenis','sinopsis','pemain','produser','sutradara','penulis','produksi','poster','trailer','umur','rating','durasi','jadwal'];
}
