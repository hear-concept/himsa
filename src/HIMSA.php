<?php

namespace HearConcept\HIMSA;

use HearConcept\HIMSA\XML\ProductCatalog;
use HearConcept\HIMSA\XML\Relationships\RelationshipTable;
use function version_compare;

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

    /**
     * Validate the HIMSA catalog file. Only supports version 1.1.0 and above.
     *
     * @param string $catalogFile
     * @param string $relationshipTableFile
     * @param string $schemaFile
     * @return bool For versions of lower than 1.1.0 it will always return true
     * @throws
     */
    public static function validate(string $catalogFile, string $relationshipTableFile, string $catalogSchemaFile, string $relationshipTableSchemaFile): mixed
    {
        if (version_compare(HIMSA::catalog($catalogFile)->version(), '1.1.0', '<'))
            return true;

        libxml_use_internal_errors(true);

        $xml = new DOMDocument();
        $xml->loadXML(simplexml_load_file($catalogFile)->asXML());

        if (!$xml->schemaValidate(storage_path("$catalogSchemaFile")))
            return false;

        $xml = new DOMDocument();
        $xml->loadXML(simplexml_load_file($relationshipTableFile)->asXML());

        if (!$xml->schemaValidate(storage_path("$relationshipTableSchemaFile")))
            return false;

        return true;
    }
}
