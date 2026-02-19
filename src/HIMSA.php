<?php

namespace HearConcept\HIMSA;

use HearConcept\HIMSA\Validation\HIMSAValidator;
use HearConcept\HIMSA\XML\ProductCatalog;
use HearConcept\HIMSA\XML\Relationships\RelationshipTable;
use Throwable;
use ZipArchive;
use DOMDocument;
use function file_get_contents;
use function file_put_contents;
use function version_compare;

class HIMSA
{
    public static $strictMode = true;

    /**
     * Read a catalog file
     *
     * @param string $file
     * @return ProductCatalog
     */
    public static function catalog(string $file): ProductCatalog
    {
        return new ProductCatalog(simplexml_load_file($file));
    }

    /**
     * Read a relationship table file
     *
     * @param string $file
     * @return RelationshipTable
     */
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
    public static function validate(string $catalogFile, string $relationshipTableFile, string $xsdRootPath): mixed
    {
        $xsdRootPath = trim($xsdRootPath, '/');

        $validator = new HIMSAValidator($catalogFile, $relationshipTableFile, $xsdRootPath);
        $validator->validate();

        return $validator;
    }

    public static function downloadSchemaFiles(string $rootFilePath): void
    {
        static $links = [
            '1.1.0' => 'https://himsafiles.com/DataStandards/DataStandards/PDS/HIMSA_PDS_1.1.0%20.zip',
        ];

        $temp = "$rootFilePath/temp";

        if (!file_exists($temp))
            mkdir($temp);

        try
        {
            foreach ($links as $version => $link)
            {
                $tempFilePath = "$temp/$version.zip";
                $schemaRootPath = "$rootFilePath/$version";
                file_put_contents($tempFilePath, file_get_contents($link));

                try
                {
                    $zip = new ZipArchive();

                    if ($zip->open($tempFilePath))
                    {
                        if (!file_exists($schemaRootPath))
                            mkdir($schemaRootPath);

                        $zip->extractTo("$rootFilePath/$version");
                        $zip->close();
                    }
                }
                catch (Throwable $exception)
                {
                    throw $exception;
                }
                finally
                {
                    unlink($tempFilePath);
                }
            }
        }
        catch (Throwable $e)
        {
            throw $e;
        }
        finally
        {
            rmdir($temp);
        }
    }

    /**
     * Enable or disable strict mode
     * Strict mode enables things like casting of enumeration values to PHP Enum
     * If disabled all values will be returned as string instead
     *
     * @param bool $strictMode
     * @return void
     */
    public static function setStrictMode(bool $strictMode): void
    {

    }
}
