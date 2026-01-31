<?php

namespace HearConcept\HIMSA\XML\Relationships;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\NS;
use SimpleXMLElement;

/**
 * @property-read string $RelationshipTableId
 * @property-read Collection|Relationship[] $RelationshipCollection
 */
class RelationshipTable extends HIMSA_XML
{
    protected ?NS $namespace = NS::REL;

    public readonly string $version;

    protected array $casts = [
        'RelationshipTableId' => 'string',
        'RelationshipCollection' => [Collection::class, 'Relationship', Relationship::class],
    ];

    public function __construct(SimpleXMLElement $xml)
    {
        $this->version = (string) $xml['version'];

        parent::__construct($xml);
    }
}
