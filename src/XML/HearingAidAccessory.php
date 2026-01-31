<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 */
class HearingAidAccessory extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
