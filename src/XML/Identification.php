<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;
use function filter_var;

/**
 * @property-read string|null $ManufacturerItemId
 * @property-read Collection|ThirdPartyReference[]|null $ThirdPartyReferenceCollection
 * @property-read Collection|GlobalTradeItemNumber[]|null $GLobalTradeItemNumberCollection
 */
class Identification extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'ManufacturerItemId' => 'string',
        'ThirdPartyReferenceCollection' => [Collection::class, 'ThirdPartyReference', ThirdPartyReference::class],
        'GlobalTradeItemNumberCollection' => [Collection::class, 'GlobalTradeItemNumber', GlobalTradeItemNumber::class],
    ];

    public function isPartNumber(): ?bool
    {
        return filter_var((string) $this->xml->attributes()['IsPartNumber'], FILTER_VALIDATE_BOOLEAN);
    }
}
