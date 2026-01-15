<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;

/**
 * @property-read Carbon|null $StartSellingDate
 * @property-read Carbon|null $StopSellingDate
 * @property-read Carbon|null $EndOfServiceDate
 */
class Dates extends HIMSA_XML
{
    protected array $casts = [
        'StartSellingDate' => 'datetime',
        'StopSellingDate' => 'datetime',
        'EndOfServiceDate' => 'datetime',
    ];
}
