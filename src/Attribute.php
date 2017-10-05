<?php

namespace Fosyl\ArchetypeOne;

use Fosyl\ArchetypeOne\Value\AttributeValue;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Attribute extends Marker
{
    /**
     * @param AttributeValue $value
     * @return mixed
     */
    public function setValue(AttributeValue $value);
}
