<?php

namespace HearConcept\HIMSA\XML\Families;

use Carbon\Carbon;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HearingAid;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\NS;
use SimpleXMLElement;

/**
 * @property-read Collection|HearingAid[] $ModelCollection
 * @property-read LevelInformation $LevelInformation
 * @property-read string $Name
 */
class HAFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [Collection::class, 'Model', HearingAid::class],
        'LevelInformation' => LevelInformation::class,
    ];
}
