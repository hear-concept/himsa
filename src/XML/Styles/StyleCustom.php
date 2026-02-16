<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;

class StyleCustom extends Style
{
    protected array $casts = [
        'SubStyleName' => 'string',
        'DeviceName' => 'string',
        'AliasName' => 'string',
        'PowerMarketingEntryName' => 'string',
        'Side' => Side::class,
        'BuildForBatterySizeCollection' => [Collection::class, 'BatterySize', BatterySize::class],
        'ElectricalAcousticCollection' => [Collection::class, 'ElectricalAcoustic', ElectricalAcoustic::class],
        'ColorCollection' => [Collection::class, 'ColorStyleCustom', Color::class],
        'LevelInformation' => LevelInformation::class,
    ];

    public function type(): StyleType
    {
        return StyleType::CUSTOM;
    }
}
