<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $Name
 * @property-read Text|null $Description
 */
class Condition extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'Description' => Text::class,
    ];
}
