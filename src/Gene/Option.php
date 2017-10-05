<?php

namespace Fosyl\ArchetypeOne\Gene;

use Fosyl\ArchetypeOne\Gene;
use Fosyl\ArchetypeOne\Marker\Selection;

interface Option extends Gene
{
    /**
     * @param Selection $selection
     */
    public function setSelection(Selection $selection);
}
