<?php

namespace HearConcept\HIMSA\XML\Families;

use HearConcept\HIMSA\XML\Products\AssistiveListeningDevice;
use HearConcept\HIMSA\XML\Collection;
use HearConcept\HIMSA\XML\HIMSA_XML;
use HearConcept\HIMSA\XML\LevelInformation;
use HearConcept\HIMSA\XML\MergedCollection;

/**
 * @property-read string|null $Name
 * @property-read Collection|HearingAidSparePart[] $ModelCollection
 * @property-read LevelInformation $LevelInformation
 */
class ALDFamily extends Family
{
    protected array $casts = [
        'Name' => 'string',
        'ModelCollection' => [
            MergedCollection::class, [
                'FMSystem' => AssistiveListeningDevice::class,
                'RemoteMicrophone' => AssistiveListeningDevice::class,
                'AudioBootAndChord' => AssistiveListeningDevice::class,
                'InfraredSystem' => AssistiveListeningDevice::class,
                'InductanceLoop' => AssistiveListeningDevice::class,
                'AmplifiedTelephone' => AssistiveListeningDevice::class,
                'CaptionedTelephone' => AssistiveListeningDevice::class,
                'VisualSignaler' => AssistiveListeningDevice::class,
                'AuditorySignaler' => AssistiveListeningDevice::class,
                'TactileSignaler' => AssistiveListeningDevice::class,
                'Other' => AssistiveListeningDevice::class,
            ]
        ],
        'LevelInformation' => LevelInformation::class,
    ];
}
