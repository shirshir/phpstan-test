<?php

declare(strict_types=1);

namespace PhpstanTest;

use Ramsey\Uuid\Rfc4122\UuidV7;

final readonly class Main
{
    public static function go(): void
    {
        $barCollection = new BarCollection();

        $barCollection->add(new Bar(UuidV7::uuid7(), 'bar 1'));
        $barCollection->add(new Bar(UuidV7::uuid7(), 'bar 2'));

        $bars = $barCollection->findByName('bar 1');

        foreach ($bars as $bar) {
            echo $bar->name . PHP_EOL;
        }
    }
}
