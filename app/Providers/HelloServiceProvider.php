<?php

namespace App\Providers;

use Validator;
use App\Http\Validators\HelloValidator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend("hello", function($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
        // $validator = $this->app["validator"];
        // $validator->resolver(function($translator, $data, $rules, $messages) {
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });
    }
}
