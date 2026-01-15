<?php

namespace HearConcept\HIMSA\XML;

use Exception;
use Illuminate\Support\Carbon;
use SimpleXMLElement;
use function is_array;

abstract class HIMSA_XML
{
    protected array $casts = [];

    public function __construct(protected SimpleXMLElement $xml) {}

    protected function cast(string $key, SimpleXMLElement $value): mixed
    {
        $castTo = $this->casts()[$key] ?? null;

        // Casting to a collection
        if (is_array($castTo))
        {
            $class = array_shift($castTo);

            return new $class($value, ...$castTo);
        }

        return match ($castTo)
        {
            'string' => (string) $value,
            'int', 'number', 'integer' => (int) (string) $value,
            'datetime', 'date', 'time' => Carbon::create($value),
            'bool', 'boolean' => (string) $value === 'false' ? false : true,
            SimpleXMLElement::class => $value,
            default => new $castTo($value),
        };
    }

    protected function casts(): array
    {
        return $this->casts;
    }

    public function __get(string $name)
    {
        $value = $this->xml->$name;

        return $this->cast($name, $value);
    }
}
