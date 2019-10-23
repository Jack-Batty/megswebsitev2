<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/portfolio'], function (Router $router) {
    $router->bind('portfolio', function ($id) {
        return app('Modules\Portfolio\Repositories\PortfolioRepository')->find($id);
    });
    $router->get('portfolios', [
        'as' => 'admin.portfolio.portfolio.index',
        'uses' => 'PortfolioController@index',
        'middleware' => 'can:portfolio.portfolios.index'
    ]);
    $router->get('portfolios/create', [
        'as' => 'admin.portfolio.portfolio.create',
        'uses' => 'PortfolioController@create',
        'middleware' => 'can:portfolio.portfolios.create'
    ]);
    $router->post('portfolios', [
        'as' => 'admin.portfolio.portfolio.store',
        'uses' => 'PortfolioController@store',
        'middleware' => 'can:portfolio.portfolios.create'
    ]);
    $router->get('portfolios/{portfolio}/edit', [
        'as' => 'admin.portfolio.portfolio.edit',
        'uses' => 'PortfolioController@edit',
        'middleware' => 'can:portfolio.portfolios.edit'
    ]);
    $router->put('portfolios/{portfolio}', [
        'as' => 'admin.portfolio.portfolio.update',
        'uses' => 'PortfolioController@update',
        'middleware' => 'can:portfolio.portfolios.edit'
    ]);
    $router->delete('portfolios/{portfolio}', [
        'as' => 'admin.portfolio.portfolio.destroy',
        'uses' => 'PortfolioController@destroy',
        'middleware' => 'can:portfolio.portfolios.destroy'
    ]);
// append

});
