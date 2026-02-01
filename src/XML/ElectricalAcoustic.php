<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read ElectricalAcousticsMeasuresType $TwoCC
 * @property-read ElectricalAcousticsMeasuresType $EarSimulator
 */
class ElectricalAcoustic extends HIMSA_XML
{
    protected array $casts = [
        'TwoCC' => ElectricalAcousticsMeasuresType::class,
        'EarSimulator' => ElectricalAcousticsMeasuresType::class,
    ];
}
