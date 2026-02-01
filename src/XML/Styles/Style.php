<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;
use HearConcept\HIMSA\XML\Color;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\ElectricalAcoustic;

/**
 * @property-read string $SubStyleName
 * @property-read string|null $DeviceName
 * @property-read string|null $AliasName
 * @property-read string|null $PowerMarketingEntryName
 * @property-read Collection|string[] $BuildForBatterySizeCollection
 * @property-read Collection|ElectricalAcoustic[] $ElectricalAcousticCollection
 * @property-read Collection|Color[] $ColorCollection
 */
abstract class Style extends HIMSA_XML
{
    protected array $casts = [
        'SubStyleName' => 'string',
        'DeviceName' => 'string',
        'AliasName' => 'string',
        'PowerMarketingEntryName' => 'string',
        'BuildForBatterySizeCollection' => [Collection::class, 'BatterySize', 'string'],
        'ElectricalAcousticCollection' => [Collection::class, 'ElectricalAcoustic', ElectricalAcoustic::class],
        'ColorCollection' => [Collection::class, 'Color', Color::class],
    ];

    abstract public function type(): StyleType;

    public function isType(StyleType $type): bool
    {
        return $type === $this->type();
    }
}
