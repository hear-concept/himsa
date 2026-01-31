<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HearingAidSparePart;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\NS;
use HearConcept\HIMSA\XML\MergedCollection;

/**
 * @property-read string|null $Name
 * @property-read Collection|HearingAidSparePart[] $ModelCollection
 * @property-read LevelInformation $LevelInformation
 */
class HASPFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [
            MergedCollection::class, [
                'BatteryDoor' => HearingAidSparePart::class,
                'EarHook' => HearingAidSparePart::class,
                'Amplifier' => HearingAidSparePart::class,
                'ITEReceiver' => HearingAidSparePart::class,
                'Coil' => HearingAidSparePart::class,
                'Microphone' => HearingAidSparePart::class,
                'MicrophoneCover' => HearingAidSparePart::class,
                'RemovalString' => HearingAidSparePart::class,
                'HousingParty' => HearingAidSparePart::class,
                'Screw' => HearingAidSparePart::class,
                'FacePlate' => HearingAidSparePart::class,
                'Other' => HearingAidSparePart::class,
            ]
        ],
        'LevelInformation' => LevelInformation::class,
    ];
}
