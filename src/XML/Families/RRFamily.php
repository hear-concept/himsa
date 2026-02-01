<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\Products\RICReceiver;
use HearConcept\HIMSA\XML\Collection;

/**
 * @property-read Collection|RICReceiver[] $ModelCollection
 */
class RRFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [Collection::class, 'RICReceiver', RICReceiver::class],
        'LevelInformation' => LevelInformation::class,
    ];
}
