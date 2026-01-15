<?php

namespace HearConcept\HIMSA\XML;

use Illuminate\Support\Collection as BaseCollection;
use SimpleXMLElement;
use HearConcept\HIMSA\XML\Collection;

class MergedCollection extends BaseCollection
{
    public function __construct(
        protected SimpleXMLElement $xml,
        array $mapping,
    )
    {
        foreach ($mapping as $name => $class)
        {
            $items[] = new \HearConcept\HIMSA\XML\Collection($xml, $name, $class);
        }

        $this->items = collect($items)->reduce(
            fn($carry, $item) => $carry->merge($item),
            collect()
        )->toArray();
    }
}
