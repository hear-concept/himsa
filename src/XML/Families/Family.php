<?php

namespace HearConcept\HIMSA\XML\Families;

use App\Models\Product;
use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use SimpleXMLElement;

/**
 * @property-read string $Name
 * @property-read Collection|Product[] $ModelCollection
 */
abstract class Family extends HIMSA_XML implements HasLevelInformation
{
    use HasLastModifiedDate;
}
