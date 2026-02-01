<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\GTINFormat;

/**
 * @property-read string $ItemNumber
 * @property-read GTINFormat $Format
 */
class GlobalTradeItemNumber extends HIMSA_XML
{
    protected array $casts = [
        'ItemNumber' => 'string',
        'Format' => GTINFormat::class,
    ];
}
