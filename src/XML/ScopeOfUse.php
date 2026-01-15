<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

/**
 * @property-read bool $IsTestCatalog
 */
class ScopeOfUse extends HIMSA_XML
{
    protected array $casts = [
        'IsTestCatalog' => 'boolean',
    ];
}
