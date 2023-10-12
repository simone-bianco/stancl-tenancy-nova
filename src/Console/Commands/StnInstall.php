<?php

namespace SimoneBianco\StanclTenancyNova\Console\Commands;

use Illuminate\Console\Command;

class StnInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stn:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @return int
     */
    public function handle()
    {
        echo "funziona\n";

        return Command::SUCCESS;
    }
}
