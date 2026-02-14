<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

/**
 * @property-read bool $IsTestCatalog
 * @property-read Manufacturer|null $Manufacturer
 * @property-read Collection|string[] $CountryCodeCollection
 * @property-read Collection|string[]|null $SalesAreaCollection
 */
class ScopeOfUse extends HIMSA_XML
{
    protected array $casts = [
        'IsTestCatalog' => 'boolean',
        'Manufacturer' => Manufacturer::class,
        'CountryCodeCollection' => [Collection::class, 'CountryCode', 'string'],
        'SalesAreaCollection' => [Collection::class, 'SalesArea', 'string'],
    ];
}
