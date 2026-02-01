<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use IteratorAggregate;
use Traversable;
use ArrayIterator;
use Illuminate\Support\Collection as BaseCollection;
use HearConcept\HIMSA\Enums\NS;
use function enum_exists;
use function method_exists;

class Collection extends BaseCollection
{
    public function __construct(protected SimpleXMLElement $xml, string $key, ?string $class = null, ?NS $namespace = null)
    {
        if (!$xml)
            return;

        if ($namespace)
            $xml = $xml->children($namespace->value);

        foreach ($xml->$key as $item)
        {
            if (!$class)
            {
                $this->items = $item;

                continue;
            }

            if ($class == 'string')
                $this->items[] = (string) $item;
            elseif (enum_exists($class))
                $this->items[] = $class::tryFrom($item);
            else
                $this->items[] = new $class($item);
        }
    }
}
