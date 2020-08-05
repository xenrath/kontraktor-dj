<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterCustomer extends Model
{
    protected $table='master_customer';
    protected $fillable=['nama','telepon','alamat','kategori'];
}
