<?php

namespace Tipoff\Products\Commands;

use Illuminate\Console\Command;

class ProductsCommand extends Command
{
    public $signature = 'products';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}