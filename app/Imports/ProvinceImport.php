<?php

namespace App\Imports;

use App\Models\Provinces;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProvinceImport implements ToModel, WithProgressBar, WithStartRow
{
    use Importable;

    /**
     * {@inheritdoc}
     */
    public function model(array $row)
    {
        return new Provinces([
            'id'   => $row[0],
            'name' => $row[1],
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
