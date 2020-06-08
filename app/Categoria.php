<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Categoria extends Model
{
    protected $primaryKey = "id_categoria";
    protected $table = "categoria";

    protected $fillable = ['id_categoria', 'nome_categoria', 'descrizione_categoria', 'percorso_foto'];

    public function sotto_categorie()
    {
        return $this->hasMany('App\Sottocategoria', 'id_categoria', 'id_categoria');
    }

    public static function createCat(array $data)
    {
        return Categoria::create([
            'nome_categoria' => $data['nome_categoria'],
            'descrizione_categoria' => $data['descrizione_categoria'],
        ]);
    }
}
