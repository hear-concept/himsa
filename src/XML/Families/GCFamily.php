<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\Products\CapabilityGroup;

/**
 * @property-read string|null $Name
 * @property-read Collection|CapabilityGroup[] $CapabilityGroups
 * @property-read LevelInformation|null $LevelInformation
 */
class GCFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'CapabilityGroupCollection' => [Collection::class, 'CapabilityGroup', CapabilityGroup::class],
        'LevelInformation' => LevelInformation::class,
    ];
}
