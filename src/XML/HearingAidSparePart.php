<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 * @property-read Collection|Color[] $ColorCollection
 */
class HearingAidSparePart extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
        'ColorCollection' => [Collection::class, 'Color', Color::class],
    ];
}
