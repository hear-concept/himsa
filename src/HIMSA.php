<?php

namespace HearConcept\HIMSA;

use HearConcept\HIMSA\XML\ProductCatalog;

class HIMSA
{
    public static function catalog(string $file): ProductCatalog
    {
        $xml = simplexml_load_file($file);

        return new ProductCatalog($xml);
    }

    public function validate(): mixed
    {

    }
}
