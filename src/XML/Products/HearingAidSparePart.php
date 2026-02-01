<?php

namespace HearConcept\HIMSA\XML\Products;

use Carbon\Carbon;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\Collection;

class HearingAidSparePart extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
        'ColorCollection' => [Collection::class, 'Color', Color::class],
    ];
}
