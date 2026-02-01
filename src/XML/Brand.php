<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $Name Name of the brand
 * @property-read ProductGroups $ProductGroups Different groups/categories of the products
 */
class Brand extends HIMSA_XML
{
    protected array $casts = [
        'Name' => 'string',
        'ProductGroups' => ProductGroups::class,
    ];
}
