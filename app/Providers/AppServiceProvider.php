<?php

namespace App\Providers;

use App\Categoria;
use App\Occupazione;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $layouts_lista_categorie = [
            'layouts/app',
            'components/modalInsertProduct',
            'components/modalNewSubCategory',
            'gestioneProdotti',
            'layouts/header'
        ];

        // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layouts_lista_categorie, function ($view) {
            $listaCategorie = Categoria::select('id_categoria', 'nome_categoria')->orderBy('nome_categoria')->get();
            $view->with('listaCategorie', $listaCategorie);
        });


        $layouts_user = [
            'layouts/header',
            'layouts/header_admin',
            'layouts/header_staff',
            'homeCatalogo',
            'listaProdotti',
            'listaSottoCategorie',
            'schedaprodotto',
            'showUser',
        ];
         // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layouts_user, function ($view) {
            $user = \Illuminate\Support\Facades\Auth::user();
            $view->with('user', $user);
        });

        $layouts_dati_occupazione = [
            'components/modalRegistra'
        ];
        // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layouts_dati_occupazione, function ($view) {
            $datiOccupazione = Occupazione::select('id','occupazione')->orderBy('occupazione')->get();
            $view->with('datiOccupazione', $datiOccupazione);
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
