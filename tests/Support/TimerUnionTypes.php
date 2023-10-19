<?php

declare(strict_types=1);

namespace Yiisoft\Injector\Tests\Support;

use DateTimeInterface;

class TimerUnionTypes
{
    public function __construct(private string|DateTimeInterface $time)
    {
    }

    public function getTime(): string|DateTimeInterface
    {
        return $this->time;
    }
}