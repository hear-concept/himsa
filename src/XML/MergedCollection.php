<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

class MergedCollection extends Collection
{
    public function __construct(
        protected SimpleXMLElement $xml,
        array $mapping,
    )
    {
        foreach ($mapping as $name => $class)
        {
            $items[] = new Collection($xml, $name, $class);
        }

        $this->items = collect($items)->reduce(
            fn($carry, $item) => $carry->merge($item),
            collect()
        )->toArray();
    }
}
