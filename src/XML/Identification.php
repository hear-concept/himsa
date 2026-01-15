<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $ManufacturerItemId
 * @property-read Collection|ThirdPartyReference[] $ThirdPartyReferenceCollection
 */
class Identification extends HIMSA_XML
{
    protected array $casts = [
        'ManufacturerItemId' => 'string',
        'ThirdPartyReferenceCollection' => [Collection::class, 'ThirdPartyReference', ThirdPartyReference::class],
    ];
}
