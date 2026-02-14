<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string|null $ThirdPartyOrganisationName Third party name (organization name)
 * @property-read string|null $CodeValue Value of the third party reference code
 * @property-read string|null $CountryCode Country code must follow ISO 3166-1 alpha-2
 * @property-read string|null $CodeName Name of the third party reference code
 * @property-read Text|null $Description
 */
class ThirdPartyReference extends HIMSA_XML
{
    protected array $casts = [
        'ThirdPartyOrganisationName' => 'string',
        'CodeValue' => 'string',
        'CountryCode' => 'string',
        'CodeName' => 'string',
        'Description' => Text::class,
    ];
}
