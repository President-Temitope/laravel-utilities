<?php

namespace Callmehalpha\LaravelUtilities\Commands;

use Illuminate\Console\Command;

class LaravelUtilitiesCommand extends Command
{
    public $signature = 'utilities';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
