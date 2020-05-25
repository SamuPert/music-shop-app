<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sottocategoria extends Model
{
    protected $primaryKey = "id_sotto_categoria";
    protected $table = "sotto_categoria";

    public function categoria()
    {
        return $this->hasOne('App\Categoria', 'id_categoria', 'id_categoria');
    }


}
