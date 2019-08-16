<?php

namespace Delio\LaravelWorkflow;

use Illuminate\Support\ServiceProvider;

/**
 * @author Boris Koumondji <brexis@yahoo.fr>
 */
class WorkflowServiceProvider extends ServiceProvider
{
    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app->singleton(
            'workflow', function ($app) {
                return new WorkflowRegistry($app['config']->get('workflow'));
            }
        );
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return ['workflow'];
    }
}
