<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\ApproximateColorCode;
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read ApproximateColorCode|null $ApproximateColorCode
 * @property-read string|null $ManufacturerDefinedColorCode
 * @property-read string|null $ManufacturerDefinedColorName
 * @property-read string|null $ColorSwatchLink
 * @property-read Text|null $ColorUsageDescription
 * @property-read Collection|string[] $ImageLinkCollection
 */
class ColorSelection extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'ApproximateColorCode' => ApproximateColorCode::class,
        'ManufacturerDefinedColorCode' => 'string',
        'ManufacturerDefinedColorName' => 'string',
        'ColorSwatchLink' => 'string',
        'ImageLinkCollection' => [Collection::class, 'ImageLink', 'string'],
        'ColorUsageDescription' => Text::class,
    ];
}
