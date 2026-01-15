<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read ColorDefinition $MainColor
 * @property-read ColorDefinition SecondaryColor
 * @property-read LevelInformation $LevelInformation
 */
class Color extends HIMSA_XML
{
    protected array $casts = [
        'MainColor' => ColorDefinition::class,
        'SecondaryColor' => ColorDefinition::class,
        'LevelInformation' => LevelInformation::class,
    ];
}
