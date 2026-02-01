<?php

namespace HearConcept\HIMSA\Traits;

use Carbon\Carbon;
use SimpleXMLElement;
use HearConcept\HIMSA\Enums\NS;

trait HasLastModifiedDate
{
    public function lastModifiedDate(): Carbon
    {
        return Carbon::createFromFormat("Y-m-d", (string) $this->xml->attributes(NS::PI->value)['LastModifiedDate'])->setTime(0, 0, 0);
    }
}
