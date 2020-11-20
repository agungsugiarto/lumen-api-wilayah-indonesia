<?php

namespace App\Jobs;

use Illuminate\Support\Facades\Artisan;

class ImportJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Artisan::call('import:database');
    }
}
