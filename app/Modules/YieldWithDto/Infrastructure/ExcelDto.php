<?php

namespace App\Modules\YieldWithDto\Infrastructure;

use App\Modules\YieldWithDto\Application\Dto;

class ExcelDto implements Dto
{
    public function __construct(
        private string $email,
        private string $password,
        private string $first_name,
        private string $last_name,
    ) {}

    public function email(): string
    {
        return $this->email;
    }

    public function password(): string
    {
        return $this->password;
    }

    public function firstName(): string
    {
        return $this->first_name;
    }

    public function lastName(): string
    {
        return $this->last_name;
    }
}

