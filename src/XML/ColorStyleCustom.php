<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;

/**
 * @property-read ColorSelection $ShellColor
 * @property-read ColorSelection|null $FacePlateColor
 */
class ColorStyleCustom extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;

    protected array $casts = [
        'ShellColor' => ColorSelection::class,
        'FacePlateColor' => ColorSelection::class,
        'LevelInformation' => LevelInformation::class,
    ];
}
