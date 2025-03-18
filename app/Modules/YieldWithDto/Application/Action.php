<?php

namespace App\Modules\YieldWithDto\Application;

use App\Modules\YieldWithDto\Application\Service;
use App\Modules\YieldWithDto\Infrastructure\Repository;

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
