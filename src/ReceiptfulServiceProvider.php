<?php namespace RawCreative\Receiptful;

use Illuminate\Support\ServiceProvider;

class ReceiptfulServiceProvider extends ServiceProvider {

     /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['receiptful'] = $this->app->share(function ($app){
            $config = $app['config']->get('services.receiptful.secret', array());
            return new Api($config);
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('receiptful');
    }

}
