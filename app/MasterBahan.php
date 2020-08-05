<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBahan extends Model
{
    protected $table='master_bahan';
    protected $fillable=['nama','kategori','satuan','harga','stok'];
}