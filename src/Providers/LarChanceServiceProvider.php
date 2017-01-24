<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-1-24
 * Time: 下午1:20
 */

namespace zedisdog\LarChance\Providers;


use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use zedisdog\LarChance\Facades\Chance;

class LarChanceServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //绑定facade
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Chance', Chance::class);
        });
    }

    public function provides()
    {
        return [Chance::class];
    }
}