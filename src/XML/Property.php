<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $PropertyName
 * @property-read string $PropertyValue
 * @property-read Text $PropertyDescription
 */
class Property extends HIMSA_XML
{
    protected array $casts = [
        'PropertyName' => 'string',
        'PropertyValue' => 'string',
        'PropertyDescription' => Text::class,
    ];
}
