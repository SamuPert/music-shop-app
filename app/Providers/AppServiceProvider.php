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
        $layouts = [
            'layouts/app',
            'components/modalInsertProduct',
            'components/modalNewSubCategory',
            'gestioneProdotti',
        ];

        // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layouts, function ($view) {
            $listaCategorie = Categoria::select('id_categoria', 'nome_categoria')->orderBy('nome_categoria')->get();
            $view->with('listaCategorie', $listaCategorie);
        });


        $layout_header = [
            'layouts/header',
            'layouts/header_admin',
            'layouts/header_staff'
        ];
         // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layout_header, function ($view) {
            $user = \Illuminate\Support\Facades\Auth::user();
            $view->with('user', $user);
        });


        $layout_registrazione = [
            'components/modalRegistra'
        ];
        // Inject in every request to "views/layouts/app.blade.php" the category data.
        view()->composer($layout_registrazione, function ($view) {
            $datiOccupazione = Occupazione::select('id','occupazione')->orderBy('occupazione')->get();
            $view->with('datiOccupazione', $datiOccupazione);
        });

        $layout_catalogo = [
            'homeCatalogo',
            'listaProdotti',
            'listaSottoCategorie',
            'schedaprodotto',
            'showUser'
        ];

        view()->composer($layout_catalogo, function ($view) {
            $user = \Illuminate\Support\Facades\Auth::user();
            $view->with('user', $user);
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
