<?php

namespace Fosyl\ArchetypeOne\Marker;

use Fosyl\ArchetypeOne\Gene\Option;
use Fosyl\ArchetypeOne\Marker;

interface Selection extends Marker
{
    /**
     * @return Option
     */
    public function getOption(): ?Option;

    /**
     * @param Option $option
     */
    public function setOption(Option $option);
}
