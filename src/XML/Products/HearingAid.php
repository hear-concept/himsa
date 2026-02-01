<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\XML\Styles\{Style, StyleBTE, StyleCustom, StyleOther, StyleRIC};
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 * @property-read MergedCollection|Style[] $StyleCollection
 */
class HearingAid extends Product
{
    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
        'StyleCollection' => [MergedCollection::class, [
            'StyleBTE' => StyleBTE::class,
            'StyleRIC' => StyleRIC::class,
            'StyleCustom' => StyleCustom::class,
            'StyleOther' => StyleOther::class,
        ]],
    ];
}
