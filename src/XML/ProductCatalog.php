<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read string $CatalogId
 * @property-read string $CatalogCreationDateTime
 * @property-read string $RelationshipTableId
 * @property-read VersionInformation $VersionInformation
 * @property-read ScopeOfUse $ScopeOfUse
 * @property-read Description $Description
 * @property-read Brand[]|Collection $BrandCollection
 */
class ProductCatalog extends HIMSA_XML
{
    public readonly string $version;

    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'CatalogId' => 'string',
        'CatalogCreationDate' => 'datetime',
        'RelationshipTableId' => 'string',
        'VersionInformation' => VersionInformation::class,
        'ScopeOfUse' => ScopeOfUse::class,
        'Description' => Description::class,
        'BrandCollection' => [Collection::class, 'Brand', Brand::class],
    ];

    public function __construct(SimpleXMLElement $xml)
    {
        $this->version = (string) $xml['version'];
        parent::__construct($xml);
    }
}
