<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 */
class Consumable extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
