<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\XML\Styles\{Style, StyleBTE, StyleCustom, StyleOther, StyleRIC};

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 * @property-read MergedCollection|Style[] $StyleCollection
 */
class HAModel extends HIMSA_XML
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
