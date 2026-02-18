<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\Property;

/**
 * @property-read string|null $Name
 * @property-read string|null $TypeAliasName
 * @property-read string|null $Version
 * @property-read Collection|Property[] $PropertiesCollection
 * @property-read LevelInformation|null $LevelInformation
 */
class EarImpressionSupply extends Product
{
    protected array $casts = [
        'Name' => 'string',
        'TypeAliasName' => 'string',
        'Version' => 'string',
        'PropertiesCollection' => [Collection::class, 'Properties', Property::class],
        'LevelInformation' => LevelInformation::class,
    ];
}
