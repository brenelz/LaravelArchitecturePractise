<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Tactician\CommandBus\ExecutingCommandBus;
use App\CommandBus\LaravelHandlerLocator;
use App\CommandBus\HandleInflector;

class TacticianServiceProvider extends ServiceProvider {

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
			'Tactician\Handler\MethodNameInflector\MethodNameInflector',
			'App\CommandBus\HandleInflector'
		);

		$this->app->bind('Tactician\CommandBus\CommandBus',function(){
			return new ExecutingCommandBus(
			    new LaravelHandlerLocator($this->app),
			    new HandleInflector()
			);
		});
	}

}
