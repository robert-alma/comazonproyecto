<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerfilModel extends Model
{
    protected $table = "perfiles";

    public function usuario()
    {
        return $this->hasMany(Cliente::class);
    }
}
