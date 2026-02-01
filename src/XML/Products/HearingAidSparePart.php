<?php

namespace HearConcept\HIMSA\XML\Products;

use Carbon\Carbon;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 * @property-read Collection|Color[] $ColorCollection
 */
class HearingAidSparePart extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
        'ColorCollection' => [Collection::class, 'Color', Color::class],
    ];
}
