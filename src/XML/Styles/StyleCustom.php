<?php

namespace HearConcept\HIMSA\XML\Styles;

use HearConcept\HIMSA\Enums\StyleType;

class StyleCustom extends Style
{
    public function type(): StyleType
    {
        return StyleType::CUSTOM;
    }
}
