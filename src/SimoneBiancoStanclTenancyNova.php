<?php

namespace SimoneBianco\StanclTenancyNova;

use Illuminate\Support\ServiceProvider;
use SimoneBianco\StanclTenancyNova\Console\Commands\StnInstall;

class SimoneBiancoStanclTenancyNova extends ServiceProvider
{
    public function register()
    {
        $this->commands([
            StnInstall::class
        ]);
    }
}