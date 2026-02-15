<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

class MergedCollection extends Collection
{
    public function __construct(
        protected SimpleXMLElement|array $xml,
        array $mapping,
    )
    {
        if (is_array($xml))
        {
            parent::__construct($xml);
            return;
        }

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
