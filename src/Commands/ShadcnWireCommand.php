<?php

namespace Kleppinger\ShadcnWire\Commands;

use Illuminate\Console\Command;

class ShadcnWireCommand extends Command
{
    public $signature = 'shadcn-wire';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
