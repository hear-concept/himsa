<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read int $Major
 * @property-read int $Minor
 */
class VersionInformation extends HIMSA_XML
{
    protected array $casts = [
        'Major' => 'int',
        'Minor' => 'int',
    ];

    public function version(): string
    {
        return sprintf("$this->Major.$this->Minor");
    }
}
