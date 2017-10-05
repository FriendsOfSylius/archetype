<?php

namespace Fosyl\ArchetypeOne;

/**
 * The archetype acts as a gemone of an object, containing all genetic information
 * that the object should inherit.
 */
interface Archetype
{
    /**
     * @return string
     */
    public function getIdentificationCode(): string;

    /**
     * @return Attribute[]
     */
    public function getAllAttributes(): array;

    /**
     * @param string $identifier
     *
     * @return Attribute
     */
    public function getSingleAttribute(string $identifier): ?Attribute;

    /**
     * @param Attribute $attribute
     */
    public function assignAttribute(Attribute $attribute);

    /**
     * @return Option[]
     */
    public function getAllOptions(): array;

    /**
     * @return Archetype
     */
    public function getParent(): ?Archetype;
}
