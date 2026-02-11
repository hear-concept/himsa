<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\Color;

/**
 * @property-read Collection|Color[] $ColorCollection
 */
abstract class Accessory extends Product
{
    public function type(): string
    {
        return $this->attributes['xml_tag'];
    }
}
