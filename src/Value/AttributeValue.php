<?php

namespace Fosyl\ArchetypeOne\Value;

use Fosyl\ArchetypeOne\Attribute;
use Fosyl\ArchetypeOne\Value;

class AttributeValue implements Value
{
    /**
     * @var Attribute
     */
    private $attribute;

    /**
     * @var mixed
     */
    private $name;

    /**
     * @param Attribute $attribute
     * @param mixed $name
     */
    public function __construct(Attribute $attribute = null, $name = null)
    {
        $this->attribute = $attribute;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->name;
    }

    /**
     * @param Attribute $attribute
     */
    public function setAttribute(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }
}
