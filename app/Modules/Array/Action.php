<?php

namespace App\Modules\Array;

class Action
{
    public function __construct(
        private Repository $repository,
        private Service $service,
    ) {}

    public function handle()
    {
        $files = $this->repository->get();

        $this->service->process($files);
    }
}
