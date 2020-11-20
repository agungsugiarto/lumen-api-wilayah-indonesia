<?php

namespace App\Console\Commands;

use App\Jobs\ImportJob;
use Illuminate\Console\Command;

class JobImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:job-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import CSV api wilayah indonesia using job.';

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
     * @return mixed
     */
    public function handle()
    {
        dispatch(new ImportJob());
    }
}
