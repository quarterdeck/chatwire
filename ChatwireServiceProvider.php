<?php

namespace Quarterdeck;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ChatwireServiceProvider extends ServiceProvider
{
	/**
	* Bootstrap any package services.
	*/
	public function boot(): void
	{
		// $this->publishes([
		// 	__DIR__.'/../config/chatwire.php' => config_path('chatwire.php'),
		// ]);
		// $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		// $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
		// $this->loadViewsFrom(__DIR__.'/../resources/views', 'chatwire');
		// Livewire::component('chatwire', Chatwire::class);
	}

	public function register()
	{
		//
	}
}
