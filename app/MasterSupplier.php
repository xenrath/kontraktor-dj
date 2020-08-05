<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterSupplier extends Model
{
    protected $table='master_supplier';
    protected $fillable=['nama','alamat','telepon','bank','rekening'];
}
