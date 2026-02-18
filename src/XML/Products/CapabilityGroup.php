<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string|null $GroupName
 * @property-read string|null $Version
 * @property-read LevelInformation|null $LevelInformation
 */
class CapabilityGroup extends Product
{
    protected array $casts = [
        'GroupName' => 'string',
        'Version' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
