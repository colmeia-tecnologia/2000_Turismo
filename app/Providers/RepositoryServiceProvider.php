<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
                \App\Repositories\UserRepository::class, 
                \App\Repositories\UserRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\PostCategoryRepository::class, 
                \App\Repositories\PostCategoryRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\PostRepository::class, 
                \App\Repositories\PostRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\BannerRepository::class, 
                \App\Repositories\BannerRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\ServiceRepository::class, 
                \App\Repositories\ServiceRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\PortfolioRepository::class, 
                \App\Repositories\PortfolioRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\PermissionRepository::class, 
                \App\Repositories\PermissionRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\PermissionUserRepository::class, 
                \App\Repositories\PermissionUserRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\ClientRepository::class, 
                \App\Repositories\ClientRepositoryEloquent::class
        );
        $this->app->bind(
                \App\Repositories\VideoRepository::class, 
                \App\Repositories\VideoRepositoryEloquent::class
        );
        //:end-bindings:
    }
}