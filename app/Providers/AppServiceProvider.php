<?php

namespace App\Providers;

use App\Categoria;
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
