<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Categoria extends Model
{
    protected $primaryKey = "id_categoria";
    protected $table = "categoria";
    public $timestamps = false;

    protected $fillable = ['id_categoria', 'nome_categoria', 'percorso_foto'];

    public function sotto_categorie()
    {
        return $this->hasMany('App\Sottocategoria', 'id_categoria', 'id_categoria');
    }

    public static function creaCategoria(array $data)
    {
        return Categoria::create([
            'nome_categoria' => $data['nome_categoria'],
            'percorso_foto' => $data['percorso_foto'],
        ]);
    }
}
