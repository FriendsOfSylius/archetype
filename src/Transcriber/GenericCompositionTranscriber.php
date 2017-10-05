<?php

namespace Fosyl\ArchetypeOne\Transcriber;

use Fosyl\ArchetypeOne\Archetype;
use Fosyl\ArchetypeOne\Composition;
use Fosyl\ArchetypeOne\Gene\Attribute\GenericAttribute;
use Fosyl\ArchetypeOne\Transcriber;

class GenericCompositionTranscriber implements Transcriber
{
    /**
     * @param Archetype $unit
     */
    public function express(Archetype $unit)
    {
        if (! $unit instanceof Composition) {
            throw new \InvalidArgumentException('Can only transcribe objects that can be composed with facets.');
        }

        $parent = $unit->getParent();

        if (! $parent instanceof Composition) {
            throw new \DomainException('Cannot inherit facets or attributes from the parent that is not also a composition.');
        }

        $this->expressAttributes($unit, $parent);
    }

    /**
     * @param Composition $unit
     * @param Composition $carrier
     */
    private function expressAttributes(Composition $unit, Composition $carrier)
    {
        foreach ($carrier->getAllFacets() as $facet) {
            if (null === $unit->getSingleFacet($facet->getIdentificationCode())) {
                // @todo use factory
                $facet->setAttribute(new GenericAttribute());

                $unit->assignFacet($facet);
            }
        }
    }
}
