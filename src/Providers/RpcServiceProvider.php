<?php

namespace CoinView\LumenRpc\Providers;

use CoinView\LumenRpc\Rpc;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class RpcServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('rpc', function()
        {
            return new Rpc();
        });
    }
}
