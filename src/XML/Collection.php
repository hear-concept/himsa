<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use IteratorAggregate;
use Traversable;
use ArrayIterator;
use Illuminate\Support\Collection as BaseCollection;

class Collection extends BaseCollection
{
    public function __construct(SimpleXMLElement $xml, string $key, string $class, ?NS $namespace = null)
    {
        if ($namespace)
            $xml = $xml->children($namespace->value);

        foreach ($xml->$key as $item)
        {
            $this->items[] = new $class($item);
        }
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->items);
    }
}
