<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $ManufacturerItemId
 * @property-read Collection|ThirdPartyReference[] $ThirdPartyReferenceCollection
 * @property-read Collection|GlobalTradeItemNumber[] $GLobalTradeItemNumberCollection
 */
class Identification extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'ManufacturerItemId' => 'string',
        'ThirdPartyReferenceCollection' => [Collection::class, 'ThirdPartyReference', ThirdPartyReference::class],
        'GlobalTradeItemNumberCollection' => [Collection::class, 'GlobalTradeItemNumber', GlobalTradeItemNumber::class],
    ];
}
