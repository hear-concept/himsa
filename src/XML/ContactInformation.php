<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $Name
 * @property-read string|null $TelephoneNumber
 * @property-read string|null $Email
 * @property-read string|null $WebAddress
 */
class ContactInformation extends HIMSA_XML
{
    protected array $casts = [
        'Name' => 'string',
        'Email' => 'string',
        'TelephoneNumber' => 'string',
        'WebAddress' => 'string',
    ];
}
