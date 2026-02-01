<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Products\Consumable;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\MergedCollection;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string|null $Name
 * @property-read Collection|Consumable[] $ModelCollection
 * @property-read LevelInformation $LevelInformation
 */
class CONFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
        'ModelCollection' => [MergedCollection::class, [
            'Tube' => Consumable::class,
            'Dome' => Consumable::class,
            'Tool' => Consumable::class,
            'Filter' => Consumable::class,
            'WaxProtection' => Consumable::class,
            'Headset' => Consumable::class,
            'EarBud' => Consumable::class,
            'Battery' => Consumable::class,
            'Other' => Consumable::class,
        ]],
    ];
}
