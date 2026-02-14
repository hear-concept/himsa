<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Enums\BatterySize;
use HearConcept\HIMSA\Enums\Side;
use HearConcept\HIMSA\Enums\StyleType;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;
use HearConcept\HIMSA\XML\Color;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\ElectricalAcoustic;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $SubStyleName
 * @property-read string|null $DeviceName
 * @property-read string|null $AliasName
 * @property-read string|null $PowerMarketingEntryName
 * @property-read Side|null $Side The ear side the device is used in
 * @property-read Collection|BatterySize[] $BuildForBatterySizeCollection
 * @property-read Collection|ElectricalAcoustic[]|null $ElectricalAcousticCollection
 * @property-read Collection|Color[]|null $ColorCollection
 */
abstract class Style extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;

    protected array $casts = [
        'SubStyleName' => 'string',
        'DeviceName' => 'string',
        'AliasName' => 'string',
        'PowerMarketingEntryName' => 'string',
        'Side' => Side::class,
        'BuildForBatterySizeCollection' => [Collection::class, 'BatterySize', BatterySize::class],
        'ElectricalAcousticCollection' => [Collection::class, 'ElectricalAcoustic', ElectricalAcoustic::class],
        'ColorCollection' => [Collection::class, 'Color', Color::class],
        'LevelInformation' => LevelInformation::class,
    ];

    abstract public function type(): StyleType;

    public function isType(StyleType $type): bool
    {
        return $type === $this->type();
    }
}
