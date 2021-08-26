<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumentoModel extends Model
{
    protected $table = "tipo_documento";

    public function datos()
    {
        return $this->hasMany(DatoModel::class,'tipo_documento_id');
    }
}
