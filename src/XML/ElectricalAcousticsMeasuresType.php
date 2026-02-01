<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read double|null $BatteryConsumption
 * @property-read double|null $MaxGain
 * @property-read double|null $MaxOutput
 * @property-read Collection|Condition[] $ConditionCollection
 */
class ElectricalAcousticsMeasuresType extends HIMSA_XML
{
    protected array $casts = [
        'BatteryConsumption' => 'double',
        'MaxGain' => 'double',
        'MaxOutput' => 'double',
        'ConditionCollection' => [Collection::class, 'Condition', Condition::class]
    ];
}
