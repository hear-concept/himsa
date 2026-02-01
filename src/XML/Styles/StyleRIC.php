<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;

class StyleRIC extends Style
{
    public function type(): StyleType
    {
        return StyleType::RIC;
    }
}
