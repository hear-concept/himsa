<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read Identification $Identification
 * @property-read Dates $Dates
 */
class LevelInformation extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Identification' => Identification::class,
        'Dates' => Dates::class,
    ];
}
