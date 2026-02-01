<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use IteratorAggregate;
use Traversable;
use ArrayIterator;
use Illuminate\Support\Collection as BaseCollection;
use HearConcept\HIMSA\Enums\NS;

class Collection extends BaseCollection
{
    public function __construct(protected SimpleXMLElement $xml, string $key, string $class, ?NS $namespace = null)
    {
        if ($namespace)
            $xml = $xml->children($namespace->value);

        foreach ($xml->$key as $item)
        {
            if ($class == 'string')
                $this->items[] = (string) $item;
            else
                $this->items[] = new $class($item);
        }
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
