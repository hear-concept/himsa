<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string|null $Warehouse
 * @property-read bool|null $UnavailableToOrder
 * @property-read string|null $UnavailableToOrderText
 */
class OrderDetails extends HIMSA_XML
{
    protected array $casts = [
        'Warehouse' => 'string',
        'UnavailableToOrder' => 'boolean',
        'UnavailableToOrderText' => 'string',
    ];
}