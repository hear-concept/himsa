<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\XML\HALevelInformation;
use HearConcept\HIMSA\XML\Styles\{Style, StyleBTE, StyleCustom, StyleOther, StyleRIC};
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\MergedCollection;

/**
 * @property-read MergedCollection|Style[] $StyleCollection
 * @property-read string|null $Version
 * @property-read string|null $TierLevelName
 */
class HearingAid extends Product
{
    protected array $casts = [
        'Name' => 'string',
        'Version' => 'string',
        'TierLevelName' => 'string',
        'LevelInformation' => HALevelInformation::class,
        'StyleCollection' => [MergedCollection::class, [
            'StyleBTE' => StyleBTE::class,
            'StyleRIC' => StyleRIC::class,
            'StyleCustom' => StyleCustom::class,
            'StyleOther' => StyleOther::class,
        ]],
    ];
}
