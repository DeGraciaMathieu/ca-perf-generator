<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('app:array', function () {
    $action = new \App\Modules\Array\Action(
        new \App\Modules\Array\Repository(),
        new \App\Modules\Array\Service(),
    );

    $action->handle();
});

Artisan::command('app:yield', function () {
    $action = new \App\Modules\Yield\Action(
        new \App\Modules\Yield\Repository(),
        new \App\Modules\Yield\Service(),
    );

    $action->handle();
});

Artisan::command('app:yield-with-dto', function () {
    $action = new \App\Modules\YieldWithDto\Application\Action(
        new \App\Modules\YieldWithDto\Infrastructure\Repository(),
        new \App\Modules\YieldWithDto\Application\Service(),
    );

    $action->handle();
});
