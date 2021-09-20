<?php

namespace App\Console\Commands;
use App\Models\FastParity;
use Illuminate\Console\Command;

class FastParityScheduler extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fastparity:period';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'FastParity Period Generated';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Sleep function executed');
        return 0;
    }
}
