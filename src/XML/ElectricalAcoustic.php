<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read ElectricalAcousticsMeasuresType|null $TwoCC
 * @property-read ElectricalAcousticsMeasuresType|null $EarSimulator
 */
class ElectricalAcoustic extends HIMSA_XML
{
    protected array $casts = [
        'TwoCC' => ElectricalAcousticsMeasuresType::class,
        'EarSimulator' => ElectricalAcousticsMeasuresType::class,
    ];
}
