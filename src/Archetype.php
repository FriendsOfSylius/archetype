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
     * @return null|Archetype
     */
    public function getParent(): ?Archetype;
}
