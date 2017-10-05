<?php

namespace Fosyl\ArchetypeOne;

interface Marker
{
    /**
     * @return string
     */
    public function getIdentificationCode(): string;

    /**
     * @return Value
     */
    public function getValue(): ?Value;
}
