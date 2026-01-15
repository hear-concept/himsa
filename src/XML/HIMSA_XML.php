<?php

namespace HearConcept\HIMSA\XML;

use Exception;
use Illuminate\Support\Carbon;
use SimpleXMLElement;
use function doubleval;
use function is_array;

abstract class HIMSA_XML
{
    protected SimpleXMLElement $xml;

    protected array $casts = [];

    protected ?NS $namespace = null;

    public function __construct(SimpleXMLElement $xml)
    {
        if ($this->namespace)
            $this->xml = $xml->children($this->namespace->value);
        else
            $this->xml = $xml;
    }

    protected function cast(string $key, SimpleXMLElement $value): mixed
    {
        $castTo = $this->casts()[$key] ?? null;

        // Casting to a collection
        if (is_array($castTo))
        {
            $class = array_shift($castTo);

            return new $class($value, ...$castTo);
        }

        $str = (string) $value;

        return match ($castTo)
        {
            'string' => $str == '' ? null : $str,
            'int', 'number', 'integer' => $str == '' ? null : intval($str),
            'datetime', 'date', 'time' => $str == '' ? null : Carbon::create($str),
            'bool', 'boolean' => $str === 'false' ? false : true,
            'double', 'float', 'decimal' => $str == '' ? null : doubleval($str),
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
