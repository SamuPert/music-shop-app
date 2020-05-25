<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $primaryKey = "id_prodotto";
    protected $table = "prodotto";

    public function getPrezzoScontatoAttribute()
    {
        return abs( ceil($this->prezzo * ( 100 - $this->sconto )) / 100);
    }

    public function getIdCategoriaAttribute()
    {
        return $this->sotto_categoria()->first()->id_categoria . '';
    }

    public function sotto_categoria()
    {
        return $this->hasOne('App\Sottocategoria', 'id_sotto_categoria', 'id_sotto_categoria');
    }
}
