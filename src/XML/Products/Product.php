<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;
use HearConcept\HIMSA\XML\HIMSA_XML;

/**
 * @property-read string $Name Marketing name of the product
 */
abstract class Product extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;
}
