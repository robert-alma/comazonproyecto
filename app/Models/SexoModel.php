<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SexoModel extends Model
{
    protected $table = "sexos";

    public function datos()
    {
        return $this->hasMany(DatoModel::class,'sexo_id');
    }
}
