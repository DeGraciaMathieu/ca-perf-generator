<?php

namespace App\Modules\Yield;

use Generator;
use Spatie\SimpleExcel\SimpleExcelReader;

class Repository
{
    public function get(): Generator
    {
        $path = storage_path('app/public/multiple-with-password.xlsx');

        $rows = SimpleExcelReader::create($path)->getRows();

        foreach ($rows as $row) {
            yield $row;
        }
    }
}