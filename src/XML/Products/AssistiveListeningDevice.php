<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\LevelInformation;

class AssistiveListeningDevice extends Accessory
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
