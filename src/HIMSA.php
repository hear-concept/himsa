<?php

namespace HearConcept\HIMSA;

use HearConcept\HIMSA\XML\ProductCatalog;
use HearConcept\HIMSA\XML\Relationships\RelationshipTable;

class HIMSA
{
    public static function catalog(string $file): ProductCatalog
    {
        return new ProductCatalog(simplexml_load_file($file));
    }

    public static function relationshipTable(string $file): RelationshipTable
    {
        return new RelationshipTable(simplexml_load_file($file));
    }

    public function validate(): mixed
    {

    }
}
