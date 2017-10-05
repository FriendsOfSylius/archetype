<?php

namespace Fosyl\ArchetypeOne;

/**
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Gene
{
    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @return string
     */
    public function __toString(): string;
}
