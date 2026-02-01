<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;

class StyleOther extends Style
{
    public function type(): StyleType
    {
        return StyleType::OTHER;
    }
}
