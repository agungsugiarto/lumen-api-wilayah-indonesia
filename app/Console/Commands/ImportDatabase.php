<?php

namespace App\Console\Commands;

use App\Imports\DistrictImport;
use App\Imports\ProvinceImport;
use App\Imports\RegencyImport;
use App\Imports\VillageImport;
use Illuminate\Console\Command;

class ImportDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import CSV api wilayah indonesia.';

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
        $this->output->title('Starting import');

        (new ProvinceImport())->withOutput($this->output)
            ->import('provinces.csv', 'local', \Maatwebsite\Excel\Excel::CSV);

        (new RegencyImport())->withOutput($this->output)
            ->import('regencies.csv', 'local', \Maatwebsite\Excel\Excel::CSV);

        (new DistrictImport())->withOutput($this->output)
            ->import('districts.csv', 'local', \Maatwebsite\Excel\Excel::CSV);

        (new VillageImport())->withOutput($this->output)
            ->import('villages.csv', 'local', \Maatwebsite\Excel\Excel::CSV);

        $this->output->success('Import successful');
    }
}
