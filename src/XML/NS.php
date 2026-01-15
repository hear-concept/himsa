<?php

namespace HearConcept\HIMSA\XML;

enum NS: string
{
    case PI = 'http://www.himsa.com/ProductInformation';
    case ALD = 'http://www.himsa.com/ProductInformation/AssistedListeningDevices';
    case CON = 'http://www.himsa.com/ProductInformation/Consumable';
    case FE = 'http://www.himsa.com/ProductInformation/FittingEquipment';
    case HA = 'http://www.himsa.com/ProductInformation/HearingAid';
    case HAA = 'http://www.himsa.com/ProductInformation/HearingAidAccessory';
    case HASP = 'http://www.himsa.com/ProductInformation/HearingAidSparePart';
    case INFO = 'http://www.himsa.com/ProductInformation/Information';
    case RR = 'http://www.himsa.com/ProductInformation/RICReceiver';
    case SUP = 'http://www.himsa.com/ProductInformation/Supply';
    case GC = 'http://www.himsa.com/ProductInformation/GenericCapability';
    case REL = 'http://www.himsa.com/ProductInformation/Relationships';
}
