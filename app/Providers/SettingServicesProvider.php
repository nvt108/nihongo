<?php

namespace App\Providers;

use App\Services\Setting;
use Barryvdh\DomPDF\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Contracts\Foundation\Application;

class SettingServicesProvider extends ServiceProvider implements  DeferrableProvider
{
    public function register(): void
    {
        $this->app->singleton(Setting::class,function (Application $app){
            return new Setting();
        });
    }

}
