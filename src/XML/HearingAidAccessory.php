<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 */
class HearingAidAccessory extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
