<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodotto extends Model
{
    protected $primaryKey = "id_prodotto";
    protected $table = "prodotto";
    public $timestamps = false;

    protected $fillable = ['id_prodotto', 'nome_prodotto', 'descrizione_breve', 'descrizione_estesa', 'percorso_foto', 'prezzo', 'sconto', 'id_sotto_categoria'];

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

    public static function updateProdotto( array $data )
    {
        $prodotto = Prodotto::find($data['id_prodotto']);
        if($prodotto == null) return false;

        // prodotto trovato
        $prodotto->nome_prodotto = $data['nome_prodotto'];
        $prodotto->descrizione_breve= $data['descrizione_breve'];
        $prodotto->descrizione_estesa= $data['descrizione_estesa'];
        $prodotto->percorso_foto= $data['percorso_foto'];
        $prodotto->prezzo= $data['prezzo'];
        $prodotto->sconto= $data['sconto'];
        $prodotto->id_sotto_categoria= $data['id_sotto_categoria'];

        return $prodotto->save();
    }
}
