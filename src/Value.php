<?php

namespace Fosyl\ArchetypeOne;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Value
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return string
     */
    public function __toString(): string;
}
