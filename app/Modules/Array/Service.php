<?php

namespace App\Modules\Array;

use Illuminate\Support\Collection;

class Service
{
    public function process(array $items)
    {
        collect($items)->chunk(100)->map(function (Collection $chunk) {
            $chunk->map(function (array $items) {
                $this->save($items);
            });
        });
    }

    private function save(array $items)
    {
        //
    }
}
