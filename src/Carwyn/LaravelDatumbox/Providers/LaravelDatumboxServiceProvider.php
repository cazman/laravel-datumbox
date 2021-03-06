<?php namespace Carwyn\LaravelDatumbox\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelDatumboxServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('carwyn/laravel-datumbox', 'carwyn/laravel-datumbox',  __DIR__.'/../../../');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Datumbox', function($app){
			return new \Carwyn\LaravelDatumbox\Lib\DatumboxAPI(
				$this->app['config']['carwyn/laravel-datumbox::api_key']
			);
		});
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

}