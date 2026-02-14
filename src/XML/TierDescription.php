<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read Text $AllTierDescription
 * @property-read Collection|SpecificationItem[] $TierCollection
 */
class TierDescription extends HIMSA_XML
{
    protected array $casts = [
        'AllTierDescription' => Text::class,
        'TierCollection' => [Collection::class, 'Tier', SpecificationItem::class],
    ];
}