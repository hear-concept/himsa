<?php

namespace HearConcept\HIMSA\XML;

/**
 * @property-read string $Name
 * @property-read LevelInformation $LevelInformation
 */
class AssistiveListeningDevice extends HIMSA_XML
{
    protected ?NS $namespace = NS::PI;

    protected array $casts = [
        'Name' => 'string',
        'LevelInformation' => LevelInformation::class,
    ];
}
