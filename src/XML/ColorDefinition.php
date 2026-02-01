<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\ApproximateColorCode;
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read ApproximateColorCode $ApproximateColorCode
 * @property-read string|null $ManufacturerDefinedColorCode
 * @property-read string|null $ManufacturerDefinedColorName
 * @property-read string|null $ColorSwatchLink
 * @property-read Collection|string[] $ImageLinkCollection
 */
class ColorDefinition extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'ApproximateColorCode' => ApproximateColorCode::class,
        'ManufacturerDefinedColorCode' => 'string',
        'ManufacturerDefinedColorName' => 'string',
        'ColorSwatchLink' => 'string',
        'ImageLinkCollection' => [Collection::class, 'ImageLink', 'string']
    ];
}
