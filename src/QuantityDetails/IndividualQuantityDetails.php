<?php

namespace HearConcept\HIMSA\QuantityDetails;

use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read int|null $MaxQuantity
 * @property-read int|null $MinQuantity
 * @property-read int|null $OrderMultiples
 * @property-read string|null $PackageInformation
 */
class IndividualQuantityDetails extends HIMSA_XML
{
    protected array $casts = [
        'MaxQuantity' => 'int',
        'MinQuantity' => 'int',
        'OrderMultiples' => 'int',
        'PackageInformation' => 'string',
    ];
}
