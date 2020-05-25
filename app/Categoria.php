<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = "id_categoria";
    protected $table = "categoria";

    public function sotto_categorie()
    {
        return $this->hasMany('App\Sottocategoria', 'id_sotto_categoria', 'id_sotto_categoria');
    }


}
