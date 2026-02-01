<?php

namespace HearConcept\HIMSA\XML\Products;

use Carbon\Carbon;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $Name
 */
class HearingAidAccessory extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
