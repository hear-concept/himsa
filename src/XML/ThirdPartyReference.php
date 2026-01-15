<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $ThirdPartyOrganisationName
 * @property-read string $CodeValue
 * @property-read string $CountryCode
 */
class ThirdPartyReference extends HIMSA_XML
{
    protected array $casts = [
        'ThirdPartyOrganisationName' => 'string',
        'CodeValue' => 'string',
        'CountryCode' => 'string',
    ];
}
