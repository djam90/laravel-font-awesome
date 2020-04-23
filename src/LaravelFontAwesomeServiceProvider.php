<?php

namespace Djam90\LaravelFontAwesome;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelFontAwesomeServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $types = ['fas', 'far', 'fad', 'fal', 'fab'];

        foreach ($types as $type) {
            Blade::directive($type, function ($expression) use ($type) {
                return "<?php echo '<i class=\"$type fa-' . $expression . '\"></i>'; ?>";
            });
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}