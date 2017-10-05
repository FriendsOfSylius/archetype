<?php

namespace Fosyl\ArchetypeOne;

use Fosyl\ArchetypeOne\Marker\Facet;

interface Composition
{
    /**
     * @return Facet[]
     */
    public function getAllFacets(): array;

    /**
     * @param string $identifier
     *
     * @return Facet
     */
    public function getSingleFacet(string $identifier): ?Facet;

    /**
     * @param Facet $attribute
     */
    public function assignFacet(Facet $attribute);
}
