<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;
use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;

/**
 * @property-read ColorSelection $MainColor
 * @property-read ColorSelection|null $SecondaryColor
 */
class HAColor extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;

    protected array $casts = [
        'MainColor' => ColorSelection::class,
        'SecondaryColor' => ColorSelection::class,
        'LevelInformation' => HALevelInformation::class,
    ];
}
