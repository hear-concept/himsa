<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read Collection|string[] $ImageLinkCollection
 */
class ProductDescription extends HIMSA_XML
{
    protected array $casts = [
        'ImageLinkCollection' => [Collection::class, 'ImageLink', 'string']
    ];
}
