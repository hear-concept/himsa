<?php

namespace HearConcept\HIMSA\XML\Relationships;

use HearConcept\HIMSA\Enums\LevelIndicator;
use HearConcept\HIMSA\Enums\ProductGroupIndicator;
use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read string $ManufacturerItemId
 * @property-read string $ProductGroupIndicator
 * @property-read LevelIndicator $LevelIndicator
 */
class RelationshipItem extends HIMSA_XML
{
    protected array $casts = [
        'ManufacturerItemId' => 'string',
        'ProductGroupIndicator' => ProductGroupIndicator::class,
        'LevelIndicator' => LevelIndicator::class,
    ];

    public function isIndicator(ProductGroupIndicator $indicator): bool
    {
        return $this->ProductGroupIndicator == $indicator;
    }

    public function isLevel(LevelIndicator $indicator): bool
    {
        return $this->LevelIndicator === $indicator;
    }
}
