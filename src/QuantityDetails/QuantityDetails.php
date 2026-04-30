<?php

namespace HearConcept\HIMSA\QuantityDetails;

use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read IndividualQuantityDetails $Individual
 * @property-read PackageQuantityDetails $Package
 */
class QuantityDetails extends HIMSA_XML
{
    protected array $casts = [
        'Individual' => IndividualQuantityDetails::class,
        'Package' => PackageQuantityDetails::class,
    ];
}
