<?php

namespace HearConcept\HIMSA\XML;

use SimpleXMLElement;
use HearConcept\HIMSA\XML\Families\{ALDFamily, CONFamily, FEFamily, GCFamily, HAAFamily, HAFamily, HASPFamily, RRFamily};
use HearConcept\HIMSA\Enums\NS;

/**
 * @property-read Collection|HAFamily[]|null $HearingAids Hearing aids included in this product catalog. Returns a collection of families.
 * @property-read Collection|HASPFamily[]|null $HearingAidSpareParts Hearing aid spare parts included in this product catalog. Returns a collection of families.
 * @property-read Collection|HAAFamily[]|null $HearingAidAccessories Hearing aid accessories included in this product catalog. Returns a collection of families.
 * @property-read Collection|ALDFamily[]|null $AssistiveListeningDevices Assistive listening devices included in this product catalog. Returns a collection of families.
 * @property-read Collection|CONFamily[]|null $Consumables Consumables included in this product catalog. Returns a collection of families.
 * @property-read Collection|SimpleXMLElement $MarketingAndProductRelatedInformation Marketing and product related information included in this product catalog.Returns a collection of families.
 * @property-read Collection|SimpleXMLElement $EarImpressionSupplies Ear impression supplies included in this product catalog. Returns a collection of families.
 * @property-read Collection|RRFamily[]|null $RICReceivers Dispenser-replacable output transducers for Receiver-In-Canal hearing aids. Returns a collection of families.
 * @property-read Collection|FEFamily[]|null $FittingEquipment Fitting Equipment included in this product catalog. Returns a collection of families.
 * @property-read Collection|GCFamily[]|null $GenericHearingAidCapabilities
 * @property-read Collection|SimpleXMLElement $CustomShell
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
        'MarketingAndProductRelatedInformation' => [Collection::class, 'Family', null, NS::INFO],
        'EarImpressionSupplies' => [Collection::class, 'Family', null, NS::SUP],
        'FittingEquipment' => [Collection::class, 'Family', FEFamily::class, NS::FE],
        'GenericHearingAidCapabilities' => [Collection::class, 'Family', GCFamily::class, NS::GC],
        'CustomShell' => [Collection::class, 'Family', null, NS::CSM],
    ];
}
