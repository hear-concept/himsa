<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\Products\HearingAidAccessory;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\Enums\NS;
use HearConcept\HIMSA\XML\MergedCollection;

/**
 * @property-read string|null $Name
 * @property-read Collection|HearingAidAccessory[] $ModelCollection
 * @property-read LevelInformation $LevelInformation
 */
class HAAFamily extends Family
{
    protected ?NS $namespace = NS::HAA;

    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [
            MergedCollection::class, [
                'RemoteControl' => HearingAidAccessory::class,
                'WirelessGateway' => HearingAidAccessory::class,
                'MediaStreamer' => HearingAidAccessory::class,
                'PediatricAccessory' => HearingAidAccessory::class,
                'HearingCase' => HearingAidAccessory::class,
                'Other' => HearingAidAccessory::class,
            ]
        ],
        'LevelInformation' => LevelInformation::class,
    ];
}
