<?php

namespace HearConcept\HIMSA\Validation;

use App\Exceptions\HIMSAValidationException;
use Illuminate\Support\Collection;
use HearConcept\HIMSA\HIMSA;
use DOMDocument;
use LibXMLError;
use const LIBXML_ERR_ERROR;

class HIMSAValidator
{
    protected bool $catalogIsValid = true;

    protected bool $relationshipTableIsValid = true;

    protected Collection $catalogErrors;

    protected Collection $relationshipTableErrors;

    public function __construct(
        protected string $catalogFile,
        protected string $relationshipTableFile,
        protected string $xsdRootPath,
    )
    {
        if (!file_exists($catalogFile))
            throw new HIMSAValidationException("Catalog file '{$catalogFile}' does not exist");

        if (!file_exists($relationshipTableFile))
            throw new HIMSAValidationException("Relationship table file '{$relationshipTableFile}' does not exist");

        if (!file_exists($xsdRootPath))
            throw new HIMSAValidationException("Schema root path '{$xsdRootPath}' does not exist");

        $this->catalogErrors = collect();
        $this->relationshipTableErrors = collect();
    }

    public function validate(): void
    {
        if (version_compare(HIMSA::catalog($this->catalogFile)->Version, '1.1.0', '<'))
            return;

        libxml_use_internal_errors(true);

        $this->validateProductCatalog();
        $this->validateRelationshipTable();

        return;
    }

    protected function validateProductCatalog(): void
    {
        $xml = new DOMDocument();
        $xml->loadXML(simplexml_load_file($this->catalogFile)->asXML());

        if (!$xml->schemaValidate("$this->xsdRootPath/ProductCatalog.xsd"))
        {
            foreach (libxml_get_errors() as $error)
            {
                if ($error->level == LIBXML_ERR_ERROR)
                    $this->catalogErrors->add($error);
            }

            libxml_clear_errors();

            $this->catalogIsValid = false;
        }
    }

    protected function validateRelationshipTable(): void
    {
        $xml = new DOMDocument();
        $xml->loadXML(simplexml_load_file($this->relationshipTableFile)->asXML());

        $path = "$this->xsdRootPath/Relationship/RelationshipTable.xsd";

        // Account for typo made by NOAH
        if (!file_exists($path))
            $path = "$this->xsdRootPath/Realationship/RelationshipTable.xsd";

        if (!$xml->schemaValidate($path))
        {
            foreach (libxml_get_errors() as $error)
            {
                if ($error->level == LIBXML_ERR_ERROR)
                    $this->relationshipTableErrors->add($error);
            }

            libxml_clear_errors();

            $this->relationshipTableIsValid = false;
        }
    }

    public function valid(): bool
    {
        return $this->catalogIsValid() && $this->relationshipTableIsValid();
    }

    public function invalid(): bool
    {
        return ! $this->valid();
    }

    public function catalogIsValid(): bool
    {
        return $this->catalogIsValid;
    }

    public function relationshipTableIsValid(): bool
    {
        return $this->relationshipTableIsValid;
    }

    public function errors(): Collection
    {
        return $this->errors;
    }
}
