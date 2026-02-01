<?php

namespace HearConcept\HIMSA\XML\Styles;


use HearConcept\HIMSA\Enums\StyleType;

class StyleBTE extends Style
{
    public function type(): StyleType
    {
        return StyleType::BTE;
    }
}
