<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HAModel;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\NS;
use SimpleXMLElement;

/**
 * @property-read Collection|HAModel[] $ModelCollection
 */
class HAFamily extends Family
{
    protected array $casts = [
        'ModelCollection' => [Collection::class, 'Model', HAModel::class],
    ];
}
