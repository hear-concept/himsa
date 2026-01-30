<?php

namespace HearConcept\HIMSA\XML\Relationships;

use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read string $ManufacturerItemId
 * @property-read string $ProductGroupIndicator
 * @property-read string $LevelIndicator
 */
class RelationshipItem extends HIMSA_XML
{
    protected array $casts = [
        'ManufacturerItemId' => 'string',
        'ProductGroupIndicator' => 'string',
        'LevelIndicator' => 'string',
    ];
}
