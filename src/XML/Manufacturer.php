<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $ManufacturerName
 * @property-read string $ManufacturerUniqueID
 */
class Manufacturer extends HIMSA_XML
{
    protected array $casts = [
        'ManufacturerName' => 'string',
        'ManufacturerUniqueID' => 'string',
    ];
}