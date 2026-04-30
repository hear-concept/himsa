<?php

namespace HearConcept\HIMSA\XML;

use HearConcept\HIMSA\QuantityDetails\QuantityDetails;

/**
 * @property-read string|null $Warehouse
 * @property-read bool|null $UnavailableToOrder
 * @property-read string|null $UnavailableToOrderText
 * @property-read QuantityDetails|null $QuantityDetails
 */
class OrderDetails extends HIMSA_XML
{
    protected array $casts = [
        'Warehouse' => 'string',
        'UnavailableToOrder' => 'boolean',
        'UnavailableToOrderText' => 'string',
        'QuantityDetails' => QuantityDetails::class,
    ];
}
