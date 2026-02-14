<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;
use HearConcept\HIMSA\Exceptions\HIMSAException;
use HearConcept\HIMSA\HIMSA;
use HearConcept\HIMSA\XML\Relationships\RelationshipTable;
use SimpleXMLElement;
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $CatalogId
 * @property-read string $CatalogCreationDateTime
 * @property-read VersionInformation $VersionInformation
 * @property-read ScopeOfUse $ScopeOfUse
 * @property-read Carbon|null $ValidFromDate
 * @property-read Carbon|null $ValidToDate
 * @property-read Description $Description
 * @property-read ContactInformation $ContactInformation
 * @property-read string $RelationshipTableId
 * @property-read string|null $DictionaryId
 * @property-read Brand[]|Collection $BrandCollection
 */
class ProductCatalog extends HIMSA_XML
{
    public readonly string $Version;

    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'CatalogId' => 'string',
        'CatalogCreationDate' => 'datetime',
        'VersionInformation' => VersionInformation::class,
        'ScopeOfUse' => ScopeOfUse::class,
        'ValidFromDate' => 'datetime',
        'ValidToDate' => 'datetime',
        'Description' => Description::class,
        'ContactInformation' => ContactInformation::class,
        'RelationshipTableId' => 'string',
        'DictionaryId' => 'string',
        'BrandCollection' => [Collection::class, 'Brand', Brand::class],
    ];

    protected ?RelationshipTable $relationshipTable = null;

    public function __construct(SimpleXMLElement $xml)
    {
        $this->Version = (string) $xml['version'];
        parent::__construct($xml);
    }

    public function setRelationshipTable(RelationshipTable $table): void
    {
        if ($table->RelationshipTableId != $this->RelationshipTableId)
            throw new HIMSAException("Catalog Relationship Table ID $this->RelationshipTableId does not match $table->RelationshipTableId");

        $this->relationshipTable = $table;
    }
}
