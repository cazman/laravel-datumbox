<?php namespace Carwyn\LaravelDatumbox\Providers;

use Illuminate\Support\ServiceProvider, App, Config;

class LaravelDatumboxServiceProvider extends ServiceProvider {

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
		$this->package('carwyn/laravel-datumbox');

		App::bind('Datumbox', function(){
			return new \Carwyn\LaravelDatumbox\Lib\DatumboxAPI(
				Config::get('laravel-datumbox::api_key')
			);
		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register(){}

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