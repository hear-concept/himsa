<?php

namespace HearConcept\HIMSA\XML\Relationships;

use Carbon\Carbon;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\Identification;
use HearConcept\HIMSA\XML\NS;

/**
 * @property-read Carbon $LastModifiedDate
 * @property-read bool $AllItemsNecessary
 * @property-read Collection|RelationshipItem[] $ItemCollection
 * @property-read Identification $Identification
 */
class Relationship extends HIMSA_XML
{
    protected array $casts = [
        'LastModifiedDate' => 'datetime',
        'AllItemsNecessary' => 'boolean',
        'ItemCollection' => [Collection::class, 'Item', RelationshipItem::class],
        'Identification' => Identification::class,
    ];

    protected array $namespaces = [
        NS::REL->value => [
            'LastModifiedDate',
            'AllItemsNecessary',
            'ItemCollection',
        ],
        NS::PI->value => [
            'Identification',
        ],
    ];
}
