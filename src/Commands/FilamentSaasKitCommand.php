<?php

namespace Netizens\FilamentSaasKit\Commands;

use Illuminate\Console\Command;

class FilamentSaasKitCommand extends Command
{
    public $signature = 'filament-saas-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
