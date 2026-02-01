<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\Enums\Side;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\Color;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\Property;

/**
 * @property-read string $TypeAliasName Alias name of the type
 * @property-read Side|null $Side The ear side the device is used in
 * @property-read string $Version Version (number or similar) of the model
 * @property-read Collection|Color[] $ColorCollection
 * @property-read Collection|Property[] $PropertiesCollection
 */
class RICReceiver extends Product
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'Side' => Side::class,
        'TypeAliasName' => 'string',
        'Version' => 'string',
        'ColorCollection' => [Collection::class, 'Color', Color::class],
        'LevelInformation' => LevelInformation::class,
        'PropertiesCollection' => [Collection::class, 'Properties', Property::class],
    ];
}
