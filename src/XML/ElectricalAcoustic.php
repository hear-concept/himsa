<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read TwoCC $TwoCC
 */
class ElectricalAcoustic extends HIMSA_XML
{
    protected array $casts = [
        'TwoCC' => TwoCC::class,
    ];
}
