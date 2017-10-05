<?php

namespace Fosyl\ArchetypeOne\Marker;

use Fosyl\ArchetypeOne\Gene\Attribute;
use Fosyl\ArchetypeOne\Marker;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Facet extends Marker
{
    /**
     * @return Attribute
     */
    public function getAttribute(): ?Attribute;

    /**
     * @param Attribute $value
     */
    public function setAttribute(Attribute $value);
}
