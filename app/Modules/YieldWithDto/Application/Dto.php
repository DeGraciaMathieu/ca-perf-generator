<?php

namespace App\Modules\YieldWithDto\Application;

interface Dto
{
    public function email(): string;
    public function password(): string;
    public function firstName(): string;
    public function lastName(): string;
}