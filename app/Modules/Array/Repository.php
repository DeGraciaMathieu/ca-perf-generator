<?php

namespace App\Modules\Array;

use Spatie\SimpleExcel\SimpleExcelReader;

class Repository
{
    public function get(): array
    {
        $path = storage_path('app/public/multiple-with-password.xlsx');

        $rows = SimpleExcelReader::create($path)->getRows();

        $items = [];

        foreach ($rows as $row) {
            $items[] = $row;
        }

        return $items;
    }
}