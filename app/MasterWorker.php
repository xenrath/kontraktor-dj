<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterWorker extends Model
{
    protected $table='master_worker';
    protected $fillable=['nama','alamat','telepon','kategori','gaji'];
}
