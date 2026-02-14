<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\XML\Products\HearingAid;

/**
 * @property-read string|null $AliasName
 * @property-read Text $AllPowerMarketingLevelDescription
 * @property-read Collection|SpecificationItem[] $EntryCollection
 */
class PowerMarketingDescription extends HIMSA_XML
{
    protected array $casts = [
        'AliasName' => 'string',
        'AllPowerMarketingLevelDescription' => Text::class,
        'EntryCollection' => [Collection::class, 'Entry', SpecificationItem::class],
    ];
}