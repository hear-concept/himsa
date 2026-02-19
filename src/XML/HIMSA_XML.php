<?php

namespace HearConcept\HIMSA\XML;

use Closure;
use Exception;
use HearConcept\HIMSA\XML\Relationships\RelationshipTable;
use Illuminate\Contracts\Support\Arrayable;
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

    public function __construct(SimpleXMLElement $xml, protected array $attributes = [])
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

    protected function cast(string $key, ?SimpleXMLElement $value = null): mixed
    {
        $castTo = $this->casts()[$key] ?? null;

        // Casting to a collection
        if (is_array($castTo))
        {
            $class = array_shift($castTo);

            return new $class($value, ...$castTo);
        }

        if (!$value)
            return null;

        $str = (string) $value;

        // Enum cast
        if (enum_exists($castTo))
            return $castTo::tryFrom($str);

        $returnValue = match ($castTo)
        {
            'string' => $str == '' ? null : $str,
            'int', 'number', 'integer' => $str == '' ? null : intval($str),
            'datetime', 'date', 'time' => $str == '' ? null : Carbon::make($str),
            'bool', 'boolean' => $str ? ($str == 'true' ? true : false) : null,
            'double', 'float', 'decimal' => $str == '' ? null : doubleval($str),
            SimpleXMLElement::class => $value,
            default => function () use ($castTo, $value) {
                if (class_exists($castTo))
                    return new $castTo($value);

                return null;
            },
        };

        if ($returnValue instanceof Closure)
            return $returnValue();

        return $returnValue;
    }

    protected function casts(): array
    {
        return $this->casts;
    }

    public function __get(string $name)
    {
        if (is_array($this->xml))
        {
            $value = $this->xml[$name]->$name;
        }
        else
            $value = $this->xml->$name;

        return $this->cast($name, $value);
    }

    /**
     * Get the xml key of the current item
     *
     * @return string|null
     */
    public function xmlKey(): ?string
    {
        return $this->attributes['xml_tag'] ?? null;
    }

    public function rawValue(string $key): mixed
    {
        return $this->xml[$key];
    }
}
