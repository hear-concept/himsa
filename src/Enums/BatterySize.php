<?php

namespace HearConcept\HIMSA\Enums;

enum BatterySize: string
{
    case SIZE_675 = '675';
    case SIZE_13 = '13';
    case SIZE_312 = '312';
    case SIZE_10 = '10';
    case SIZE_10A = '10a';
    case SIZE_5A = '5a';
    case SIZE_BUILTIN = 'BuiltIn';
    case SIZE_OTHER = 'Other';
}
