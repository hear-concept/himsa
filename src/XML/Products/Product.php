<?php

namespace HearConcept\HIMSA\XML\Products;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;

/**
 * @property-read string $Name Marketing name of the product
 * @property-read LevelInformation|null $LevelInformation
 */
abstract class Product extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;
}
