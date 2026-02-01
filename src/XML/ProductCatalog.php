<?php

namespace HearConcept\HIMSA\XML;

use Carbon\Carbon;
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
    public readonly string $version;

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

    public function __construct(SimpleXMLElement $xml)
    {
        $this->version = (string) $xml['version'];
        parent::__construct($xml);
    }
}
