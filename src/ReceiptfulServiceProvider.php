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
            $config = $app['config']->get('services.receiptful', array());
            if(isset($config['secret']) && !empty($config['secret'])) {
                $config['apiKey'] = $config['secret'];
                unset($config['secret']);
            }
            return Api::factory($config);
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
