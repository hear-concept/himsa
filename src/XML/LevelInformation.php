<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read Identification|null $Identification
 * @property-read Dates|null $Dates
 * @property-read ProductDescription|null $ProductDescription
 * @property-read Text|null $ManufacturerItemDescription
 * @property-read bool|null $Serialized
 * @property-read bool|null $Consignment
 * @property-read bool|null $NotMeantForSale
 * @property-read OrderDetails|null $OrderDetails
 */
class LevelInformation extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Identification' => Identification::class,
        'Dates' => Dates::class,
        'ProductDescription' => ProductDescription::class,
        'ManufacturerItemDescription' => Text::class,
        'Serialized' => 'boolean',
        'Consignment' => 'boolean',
        'NotMeantForSale' => 'boolean',
        'OrderDetails' => OrderDetails::class,
    ];

    protected array $namespaces = [
        NS::PI->value => [
            'Identification',
            'Dates',
            'ProductDescription',
            'ManufacturerItemDescription',
        ],
        NS::HA->value => [
            'Serialized',
            'Consignment',
            'NotMeantForSale',
            'OrderDetails',
        ],
    ];
}
