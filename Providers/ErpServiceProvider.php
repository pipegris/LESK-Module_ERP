<?php
namespace App\Modules\Erp\Providers;

use App;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class ErpServiceProvider extends ServiceProvider
{
	/**
	 * Register the Erp module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Erp\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Erp module resource namespaces.
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
        $this->publishes([
            __DIR__.'/../Assets' => public_path('assets/modules/erp'),
        ], 'modules');
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'erp'
        );
    }

}
