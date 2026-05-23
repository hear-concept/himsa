<?php

namespace HearConcept\HIMSA\Contracts;

use HearConcept\HIMSA\XML\HALevelInformation;
use HearConcept\HIMSA\XML\LevelInformation;;

/**
 * @property-read LevelInformation|HALevelInformation|null $LevelInformation Information about a family, group or item. It includes identification, dates and product description. This element can be used at many levels of a product group structure.
 */
interface HasLevelInformation
{

}
