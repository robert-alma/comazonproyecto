<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UbigeoModel extends Model
{
    protected $table = "ubigeos";

    public function datos()
    {
        return $this->hasMany(DatoModel::class,'ubigeo_id');
    }
}
