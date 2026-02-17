<?php

namespace HearConcept\HIMSA\Enums;

enum ProductGroupIndicator: string
{
    case HEARING_INSTRUMENTS = 'HearingInstruments';
    case CONSUMABLES = 'Consumables';
    case HEARING_AID_SPARE_PARTS = 'HearingAidSpareParts';
    case HEARING_AID_ACCESSORIES = 'HearingAidAccessories';
    case ASSISTED_LISTENING_DEVIES = 'AssistedListeningDevices';
    case EAR_IMPRESSION_SUPPLIES = 'EarImpressionSupplies';
    case MARKETING_PRODUCT_INFO = 'MarketingProductInfo';
    case RIC_RECEIVERS = 'RICReceivers';
    case FITTING_EQUIPMENT = 'FittingEquipment';
    case GENERIC_CAPABILITIES = 'GenericCapabilities';
    case CUSTOM_SHELL = 'CustomShell';
}
