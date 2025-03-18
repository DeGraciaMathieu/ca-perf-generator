<?php

namespace Tests\Benchmark;

use Tests\CreatesApplication;

class ActionBench
{
    use CreatesApplication;

    /**
     * @Revs(10)
     * @Iterations(3)
     * @BeforeMethods({"setUp"}) 
     */
    public function benchArray(): void
    {
        $action = new \App\Modules\Array\Action(
            new \App\Modules\Array\Repository(),
            new \App\Modules\Array\Service(),
        );

        $action->handle();
    }

    /**
     * @Revs(10)
     * @Iterations(3)
     * @BeforeMethods({"setUp"}) 
     */
    public function benchYield(): void
    {
        $action = new \App\Modules\Yield\Action(
            new \App\Modules\Yield\Repository(),
            new \App\Modules\Yield\Service(),
        );

        $action->handle();
    }

    /**
     * @Revs(10)
     * @Iterations(3)
     * @BeforeMethods({"setUp"}) 
     */
    public function benchYieldWithDto(): void
    {
        $action = new \App\Modules\YieldWithDto\Application\Action(
            new \App\Modules\YieldWithDto\Infrastructure\Repository(),
            new \App\Modules\YieldWithDto\Application\Service(),
        );

        $action->handle();
    }

    public function setUp(): void
    {
        $this->createApplication();
    }
}
