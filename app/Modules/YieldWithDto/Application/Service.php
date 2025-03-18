<?php

namespace App\Modules\YieldWithDto\Application;

use Generator;
use App\Modules\YieldWithDto\Application\Dto;

class Service
{
    public function process(Generator $files)
    {
        $items = [];

        foreach ($files as $file) {

            /** @var Dto $file */
            $items[] = $file;

            if (count($items) > 100) {

                $this->save($items);

                $items = [];
            }
        }

        return $items;
    }

    private function save(array $items)
    {
        //
    }
}