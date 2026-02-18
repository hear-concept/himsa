<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\MergedCollection;
use HearConcept\HIMSA\XML\Products\EarImpressionSupply;
use HearConcept\HIMSA\XML\Products\HearingAidSparePart;

/**
 * @property-read Collection|EarImpressionSupply[] $ModelCollection
 */
class SUPFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [
            MergedCollection::class, [
                'ImpressionMaterial' => EarImpressionSupply::class,
                'MixingTip' => EarImpressionSupply::class,
                'ImpressionGun' => EarImpressionSupply::class,
                'OtoBlock' => EarImpressionSupply::class,
                'EarLite' => EarImpressionSupply::class,
                'Other' => EarImpressionSupply::class,
            ]
        ],
        'LevelInformation' => LevelInformation::class,
    ];
}
