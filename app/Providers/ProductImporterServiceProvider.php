<?php

namespace App\Providers;

use App\Facades\ProductImporterFacade;
use App\Imports\PorductImport;
use Illuminate\Support\ServiceProvider;

class ProductImporterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('product-importer', function () {
            return new PorductImport();
        });
        
        $this->app->alias(ProductImporterFacade::class, 'ProductImporterFacade');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
