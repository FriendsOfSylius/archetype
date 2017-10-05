<?php

namespace Fosyl\ArchetypeOne\Gene;

use Fosyl\ArchetypeOne\Gene;
use Fosyl\ArchetypeOne\Marker\Facet;

interface Attribute extends Gene
{
    /**
     * @param Facet $facet
     */
    public function setFacet(Facet $facet);
}
