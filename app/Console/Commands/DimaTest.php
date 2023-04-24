<?php

namespace App\Console\Commands;

use App\Events\DimaTested;
use Illuminate\Console\Command;

class DimaTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dima:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    public function handle()
    {
        $message = 'Dima sent event that he tested';

        //DimaTested::dispatch($message);
        broadcast(new DimaTested($message));
    }
}
