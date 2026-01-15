<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read string $Name
 */
abstract class Family extends HIMSA_XML
{
    protected array $casts = [
        'Name' => 'string',
    ];
}
