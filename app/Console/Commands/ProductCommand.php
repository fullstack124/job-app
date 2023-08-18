<?php

namespace App\Console\Commands;

use App\Imports\PorductImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;


class ProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:product-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dd("hello");
        $file = $this->argument('file');
        Excel::import(new PorductImport, $file);
        $this->info('Products imported successfully.');
    }
}
