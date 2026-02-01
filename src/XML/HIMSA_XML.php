<?php

namespace HearConcept\HIMSA\XML;

use Exception;
use Illuminate\Support\Carbon;
use SimpleXMLElement;
use HearConcept\HIMSA\Enums\NS;
use function doubleval;
use function is_array;
use function str_contains;

abstract class HIMSA_XML
{
    protected SimpleXMLElement|array $xml;

    protected array $casts = [];

    /**
     * @var NS|null Global namespace for all entries. For more detailed entry definition use $namespaces property
     */
    protected ?NS $namespace = null;

    /**
     * @var array Definition of namespaces and each entry connected to it
     */
    protected array $namespaces = [];

    public function __construct(SimpleXMLElement $xml, protected array $injectedAttributes = [])
    {
        if (!empty($this->namespaces))
        {
            $this->xml = [];

            foreach ($this->namespaces as $namespace => $keys)
            {
                $children = $xml->children($namespace);

                foreach ($keys as $key)
                {
                    $this->xml[$key] = $children;
                }
            }
        }
        elseif ($this->namespace)
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

        // Enum cast
        if (enum_exists($castTo))
            return $castTo::tryFrom($str);

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
        if (is_array($this->xml))
            $value = $this->xml[$name];
        else
            $value = $this->xml->$name;

        return $this->cast($name, $value);
    }
}
