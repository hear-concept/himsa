<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use HearConcept\HIMSA\XML\Families\{ALDFamily, CONFamily, FEFamily, GCFamily, HAAFamily, HAFamily, HASPFamily, RRFamily};
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read Collection|HAFamily[] $HearingAids
 * @property-read Collection|HASPFamily[] $HearingAidSpareParts
 * @property-read Collection|HAAFamily[] $HearingAidAccessories
 * @property-read Collection|ALDFamily[] $AssistiveListeningDevices
 * @property-read Collection|CONFamily[] $Consumables
 * @property-read Collection|RRFamily[] $RICReceivers
 * @property-read Collection|FEFamily[] $FittingEquipment
 * @property-read Collection|GCFamily[] $GenericHearingAidCapabilities
 */
class ProductGroups extends HIMSA_XML
{
    protected array $casts = [
        'HearingAids' => [Collection::class, 'Family', HAFamily::class, NS::HA],
        'RICReceivers' => [Collection::class, 'Family', RRFamily::class, NS::RR],
        'HearingAidSpareParts' => [Collection::class, 'Family', HASPFamily::class, NS::HASP],
        'HearingAidAccessories' => [Collection::class, 'Family', HAAFamily::class, NS::HAA],
        'AssistiveListeningDevices' => [Collection::class, 'Family', ALDFamily::class, NS::ALD],
        'Consumables' => [Collection::class, 'Family', CONFamily::class, NS::CON],
        'FittingEquipment' => [Collection::class, 'Family', FEFamily::class, NS::FE],
        'GenericHearingAidCapabilities' => [Collection::class, 'Family', GCFamily::class, NS::GC],
    ];
}
