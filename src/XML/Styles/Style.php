<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\XML\Color;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\ElectricalAcoustic;

/**
 * @property-read string $SubStyleName
 * @property-read Collection|string[] $BuildForBatterySizeCollection
 * @property-read Collection|ElectricalAcoustic[] $ElectricalAcousticCollection
 * @property-read Collection|Color[] $ColorCollection
 */
class Style extends HIMSA_XML
{
    protected array $casts = [
        'SubStyleName' => 'string',
        'BuildForBatterySizeCollection' => [Collection::class, 'BatterySize', 'string'],
        'ElectricalAcousticCollection' => [Collection::class, 'ElectricalAcoustic', ElectricalAcoustic::class],
        'ColorCollection' => [Collection::class, 'Color', Color::class],
    ];
}
