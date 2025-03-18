<?php

namespace App\Modules\Yield;

use Generator;

class Service
{
    public function process(Generator $files)
    {
        $items = [];

        foreach ($files as $file) {

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
