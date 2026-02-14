<?php

namespace HearConcept\HIMSA\XML\Families;

use Carbon\Carbon;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\PowerMarketingDescription;
use HearConcept\HIMSA\XML\Products\HearingAid;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\TierDescription;
use SimpleXMLElement;

/**
 * @property-read Collection|HearingAid[] $ModelCollection Collection of hearing aid models
 * @property-read string $Name Marketing name of hearing aid family
 * @property-read TierDescription|null $TierDescription
 * @property-read PowerMarketingDescription|null $PowerMarketingDescription
 */
class HAFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [Collection::class, 'Model', HearingAid::class],
        'LevelInformation' => LevelInformation::class,
        'TierDescription' => TierDescription::class,
        'PowerMarketingDescription' => PowerMarketingDescription::class,
    ];
}
