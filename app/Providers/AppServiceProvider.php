<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extendImplicit('accept_terms', function($attribute, $value, $parameters, $validator) {
            return $value == 'accept';
        });

        Validator::extendImplicit('plan_settings', function($attribute, $value, $parameters, $validator) {
            $validatedData = $validator->getData();

            if (isset($validatedData['selected_stock_market'])) {
                return $value == 'customPlan' ? true : ($validatedData['selected_stock_market'] == '' ? false : true);
            }

            return false;
        });

        Validator::extendImplicit('source_settings', function($attribute, $value, $parameters, $validator) {
            $validatedData = $validator->getData();

            if (isset($validatedData['source'])) {
                return ($value == 'landing1' || $value == 'landing2' || $value == 'register' || $value == 'home') ? true : false;
            }

            return true;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
