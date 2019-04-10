<?php

namespace Lavalite\Videos\Providers;

use Illuminate\Support\ServiceProvider;

class VideosServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'videos');

        // Load translation
        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'videos');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__.'/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('videos', function ($app) {
            return $this->app->make('Lavalite\Videos\Videos');
        });

        // Repository binds
                // Bind Videos to repository
        $this->app->bind(
            \Lavalite\Videos\Interfaces\VideosRepositoryInterface::class,
            \Lavalite\Videos\Repositories\Eloquent\VideosRepository::class
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['videos'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php' => config_path('package/videos.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public'  => base_path('resources/views/vendor/videos/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin' => base_path('resources/views/vendor/videos/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang' => base_path('resources/lang/vendor/courier')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');
    }
}
