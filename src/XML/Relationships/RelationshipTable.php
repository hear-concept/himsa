<?php

namespace HearConcept\HIMSA\XML\Relationships;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use SimpleXMLElement;
use HearConcept\HIMSA\Enums\NS;

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

    /**
     * Get relationships to a LevelInformation object
     * Currently broken
     *
     * @param HasLevelInformation $item
     * @return mixed
     *
     * @see HasLevelInformation
     */
    public function getRelationships(HasLevelInformation $item): mixed
    {
        return $this->RelationshipCollection->filter(function (Relationship $relationship) use ($item) {

            $id = $item->LevelInformation?->Identification?->ManufacturerItemId;

            return $relationship->ItemCollection->filter(function (RelationshipItem $relationshipItem) use ($id) {
                if ($relationshipItem->ManufacturerItemId && $relationshipItem->ManufacturerItemId === $id)
                    return true;

                return false;
            })->isNotEmpty();
        });
    }
}
