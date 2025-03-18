<?php

namespace App\Modules\YieldWithDto\Infrastructure;

use Generator;
use Spatie\SimpleExcel\SimpleExcelReader;
use App\Modules\YieldWithDto\Infrastructure\ExcelDto;

class Repository
{
    public function get(): Generator
    {
        $path = storage_path('app/public/multiple-with-password.xlsx');

        $rows = SimpleExcelReader::create($path)->getRows();

        foreach ($rows as $row) {
            yield new ExcelDto(
                $row['email'],
                $row['password'],
                $row['first_name'],
                $row['last_name'],
            );
        }
    }
}