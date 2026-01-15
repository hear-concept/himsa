<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;

/**
 * @property-read Collection|HearingAidFamily $HearingAids
 */
class ProductGroups extends HIMSA_XML
{
    protected array $casts = [
        'HearingAids' => [Collection::class, 'Family', HearingAidFamily::class, NS::HA],
    ];
}
