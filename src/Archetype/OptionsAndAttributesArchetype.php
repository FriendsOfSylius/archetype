<?php

namespace Fosyl\ArchetypeOne\Archetype;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Attribute;
use Fosyl\ArchetypeOne\Option;

class OptionsAndAttributesArchetype implements Archetype
{
    /**
     * @var
     */
    private $identificationCode;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var array
     */
    private $options;
    /**
     * @var Archetype
     */
    private $parent;

    public function __construct($identificationCode, $attributes = [], $options = [], Archetype $parent = null)
    {
        $this->identificationCode = $identificationCode;
        $this->attributes = $attributes;
        $this->options = $options;
        $this->parent = $parent;
    }

    public static function blank($identificationCode, $parent)
    {
        return new self($identificationCode, [], [], $parent);
    }

    /**
     * @return string
     */
    public function getIdentificationCode(): string
    {
        return $this->identificationCode;
    }

    /**
     * @return Attribute[]
     */
    public function getAllAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $identifier
     *
     * @return Attribute
     */
    public function getSingleAttribute(string $identifier): ?Attribute
    {
        return $this->attributes[$identifier] ?? null;
    }

    /**
     * @param Attribute $attribute
     */
    public function assignAttribute(Attribute $attribute)
    {
        $this->attributes[$attribute->getIdentificationCode()] = $attribute;
    }

    /**
     * @return Option[]
     */
    public function getAllOptions(): array
    {
        return $this->options;
    }

    /**
     * @return Archetype
     */
    public function getParent(): ?Archetype
    {
        return $this->parent;
    }
}
