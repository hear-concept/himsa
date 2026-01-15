<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $Name
 * @property-read ProductGroups $ProductGroups
 */
class Brand extends HIMSA_XML
{
    protected array $casts = [
        'Name' => 'string',
        'ProductGroups' => ProductGroups::class,
    ];
}
