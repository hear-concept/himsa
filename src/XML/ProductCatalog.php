<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

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
    protected array $casts = [
        'CatalogId' => 'string',
        'CatalogCreationDate' => 'datetime',
        'RelationshipTableId' => 'string',
        'VersionInformation' => VersionInformation::class,
        'ScopeOfUse' => ScopeOfUse::class,
        'Description' => Description::class,
        'BrandCollection' => [Collection::class, 'Brand', Brand::class],
    ];

    public function version(): string
    {
        return (string) $this->xml['version'];
    }

    public function __get(string $name): mixed
    {
        $value = $this->xml->children(NS::PI->value)->$name;

        return $this->cast($name, $value);
    }
}
