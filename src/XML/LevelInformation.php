<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read Identification $Identification
 * @property-read Dates $Dates
 * @property-read ProductDescription $ProductDescription
 */
class LevelInformation extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Identification' => Identification::class,
        'Dates' => Dates::class,
        'ProductDescription' => ProductDescription::class,
    ];
}
