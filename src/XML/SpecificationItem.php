<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $Name
 * @property-read string|null $Description
 */
class SpecificationItem extends HIMSA_XML
{
    protected array $casts = [
        'Name' => 'string',
        'Description' => 'string',
    ];
}