<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\Contracts\HasLevelInformation;
use HearConcept\HIMSA\Traits\HasLastModifiedDate;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use SimpleXMLElement;

abstract class Family extends HIMSA_XML implements HAsLevelInformation
{
    use HasLastModifiedDate;
}
