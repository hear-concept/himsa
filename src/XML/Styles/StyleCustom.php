<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\Enums\BatterySize;
use HearConcept\HIMSA\XML\Color;
use HearConcept\HIMSA\Enums\Side;
use HearConcept\HIMSA\XML\ColorStyleCustom;

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
        'ColorCollection' => [Collection::class, 'ColorStyleCustom', ColorStyleCustom::class],
        'LevelInformation' => LevelInformation::class,
    ];

    public function type(): StyleType
    {
        return StyleType::CUSTOM;
    }
}
