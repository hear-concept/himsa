<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $ApproximateColorCode
 * @property-read string|null $ManufacturerDefinedColorCode
 * @property-read string|null $ManufacturerDefinedColorName
 * @property-read string|null $ColorSwatchLink
 */
class ColorDefinition extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'ApproximateColorCode' => 'string',
        'ManufacturerDefinedColorCode' => 'string',
        'ManufacturerDefinedColorName' => 'string',
        'ColorSwatchLink' => 'string',
    ];
}
