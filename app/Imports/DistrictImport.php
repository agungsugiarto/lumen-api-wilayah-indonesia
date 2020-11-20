<?php

namespace App\Imports;

use App\Models\Districts;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DistrictImport implements ToModel, WithProgressBar, WithStartRow
{
    use Importable;

    /**
     * {@inheritdoc}
     */
    public function model(array $row)
    {
        return new Districts([
            'id'         => $row[0],
            'regency_id' => $row[1],
            'name'       => $row[2],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function startRow(): int
    {
        return 2;
    }
}
