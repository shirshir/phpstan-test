<?php

declare(strict_types=1);

namespace PhpstanTest;

use InvalidArgumentException;
use Psl\Collection\MutableMap;

final readonly class BarCollection
{
    /** @var MutableMap<string, Bar> */
    public MutableMap $bars;

    public function __construct()
    {
        $this->bars = new MutableMap([]);
    }

    public function add(Bar ...$bars): void
    {
        foreach ($bars as $bar) {
            $id = $bar->id->toString();

            if ($this->bars->containsKey($id)) {
                throw new InvalidArgumentException(sprintf('Bar %s already exists', $id));
            }

            $this->bars->add($id, $bar);
        }
    }

    /**
     * @return iterable<Bar>
     */
    public function findByName(string $name): iterable
    {
        return $this->bars
            ->filter(static fn(Bar $bar): bool => $bar->name === $name);
    }
}
