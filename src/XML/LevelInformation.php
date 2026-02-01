<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read Identification $Identification
 * @property-read Dates $Dates
 * @property-read ProductDescription $ProductDescription
 * @property-read string|null $ManufacturerItemDescription
 * @property-read bool $Serialized
 * @property-read bool $Consignment
 */
class LevelInformation extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Identification' => Identification::class,
        'Dates' => Dates::class,
        'ProductDescription' => ProductDescription::class,
        'ManufacturerItemDescription' => 'string',
        'Serialized' => 'boolean',
        'Consignment' => 'boolean',
    ];
}
