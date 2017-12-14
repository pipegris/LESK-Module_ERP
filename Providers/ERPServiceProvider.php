<?php
namespace App\Modules\ERP\Providers;

use App;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class ERPServiceProvider extends ServiceProvider
{
	/**
	 * Register the ERP module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\ERP\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the ERP module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('erp', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('erp', base_path('resources/views/vendor/erp'));
		View::addNamespace('erp', realpath(__DIR__.'/../Resources/Views'));
	}

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('erp.php'),
        ], 'config');

        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'erp'
        );
    }

}
