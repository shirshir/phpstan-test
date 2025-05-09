<?php

declare(strict_types=1);

namespace PhpstanTest;

use Ramsey\Uuid\UuidInterface;

final readonly class Bar
{
    public function __construct(public UuidInterface $id, public string $name)
    {
    }
}
