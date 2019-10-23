<?php

namespace Modules\Portfolio\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Portfolio\Events\Handlers\RegisterPortfolioSidebar;

class PortfolioServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterPortfolioSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('portfolios', array_dot(trans('portfolio::portfolios')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('portfolio', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Portfolio\Repositories\PortfolioRepository',
            function () {
                $repository = new \Modules\Portfolio\Repositories\Eloquent\EloquentPortfolioRepository(new \Modules\Portfolio\Entities\Portfolio());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Portfolio\Repositories\Cache\CachePortfolioDecorator($repository);
            }
        );
// add bindings

    }
}
