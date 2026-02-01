<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;
use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;

/**
 * @property-read ColorDefinition $MainColor
 * @property-read ColorDefinition $SecondaryColor
 * @property-read ShellColor $ShellColor
 */
class Color extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;

    protected array $casts = [
        'MainColor' => ColorDefinition::class,
        'SecondaryColor' => ColorDefinition::class,
        'ShellColor' => ColorDefinition::class,
        'LevelInformation' => LevelInformation::class,
    ];
}
